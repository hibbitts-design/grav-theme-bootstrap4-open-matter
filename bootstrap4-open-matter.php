<?php

// Developed with the assistance of Claude Code (claude.ai)

namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;
use Grav\Common\Page\Interfaces\PageInterface;

class Bootstrap4OpenMatter extends Theme
{
    // Boostrap plugin will look for this class var to know it should load
    public $load_bootstrapper_plugin = true;

    /**
     * Course search settings, worked out for each request (see onSearchPagesInitialized)
     */

    // The search route set in the SimpleSearch plugin, for example '/search'
    protected $searchRoute = '/search';

    // The route of the course being searched, for example '/cpt363-basic' (empty when searching the whole site)
    protected $searchCourseRoute = '';

    // Page templates used for a course (Subsite) and for a group of courses (Subsite Group)
    protected $courseTemplates = ['subsite', 'course'];
    protected $courseGroupTemplates = ['subsitegroup', 'coursegroup'];

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'  => ['onThemeInitialized', 0],
            // after plugins (priority 0), so a shortcode name a plugin already uses is left to that plugin
            'onShortcodeHandlers' => ['onShortcodeHandlers', -10],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onPageInitialized' => ['onPageInitialized', 0],
            // Course search: runs before the SimpleSearch plugin (which uses priority 0)
            'onPagesInitialized' => ['onSearchPagesInitialized', 10],
            'onSimpleSearchCollection' => ['onSimpleSearchCollection', 0],
            'onTwigInitialized' => ['onTwigInitialized', 0]
        ];
    }

    /*
     * ------------------------------------------------------------------------------------------------
     * Course search (SimpleSearch plugin), as in Grav Helios Course Hub - hibbittsdesign.org
     *
     * - <course>/search (for example /cpt363-basic/search) searches only that course, shown with the
     *   course's own NavBar and sidebar
     * - /search searches the whole site
     * - results are grouped by section, best matches first, with the search words highlighted
     * ------------------------------------------------------------------------------------------------
     */

    /**
     * Is this page a course (Subsite)?
     */
    protected function isCoursePage($page)
    {
        return in_array($page->template(), $this->courseTemplates, true);
    }

    /**
     * Is this page a group of courses (Subsite Group)?
     */
    protected function isCourseGroupPage($page)
    {
        return in_array($page->template(), $this->courseGroupTemplates, true);
    }

    /**
     * The pages above a page, from the top of the site down (the site's home page is not included).
     * For /cpt363-advanced/ux-techniques-guide/prototyping this is: CPT363-3, UX Techniques Guide
     */
    protected function getParentPages($page)
    {
        $parents = [];
        $parent = $page->parent();

        // stop at the site's hidden root page, the only page without a parent of its own
        while ($parent && $parent->parent()) {
            // add each parent to the start of the list, so the list runs from the top down
            array_unshift($parents, $parent);
            $parent = $parent->parent();
        }

        return $parents;
    }

    /**
     * The course page a route belongs to, or null if it is not in a course.
     * A course is either a top-level folder (/course) or a folder inside a course group (/group/course).
     */
    protected function findCoursePage($route)
    {
        $pages = $this->grav['pages'];
        $folders = explode('/', trim($route, '/'));
        $path = '';

        // look at no more than the first two folders of the route
        foreach (array_slice($folders, 0, 2) as $folder) {
            if ($folder === '') {
                return null;
            }

            $path = $path . '/' . $folder;
            $page = $pages->find($path);

            if (!$page) {
                return null;
            }
            if ($this->isCoursePage($page)) {
                return $page;
            }
            if (!$this->isCourseGroupPage($page)) {
                // only a course group can have a course inside it
                return null;
            }
        }

        return null;
    }

    /**
     * Before SimpleSearch runs: if the address is <course>/search, tell SimpleSearch to handle this address
     * and remember which course is being searched
     */
    public function onSearchPagesInitialized()
    {
        if ($this->isAdmin() || !$this->config->get('plugins.simplesearch.enabled')) {
            return;
        }

        // The search route set in the plugin (a page-based '@self' route is left to the plugin)
        $route = (string) $this->config->get('plugins.simplesearch.route', '/search');
        if ($route === '' || $route === '/' || $route[0] !== '/') {
            return;
        }
        $this->searchRoute = $route;

        // Does the address end with the search route, for example /cpt363-basic/search?
        $path = $this->grav['uri']->path();
        $endsWithSearchRoute = strlen($path) > strlen($route) && substr($path, -strlen($route)) === $route;
        if (!$endsWithSearchRoute) {
            return;
        }

        // Is the part before it a course, for example /cpt363-basic?
        $coursePath = substr($path, 0, -strlen($route));
        $course = $this->findCoursePage($coursePath);
        if ($course && $course->route() === $coursePath) {
            $this->config->set('plugins.simplesearch.route', $path);
            $this->searchCourseRoute = $coursePath;
        }
    }

    /**
     * Should this page be left out of search results?
     */
    protected function leaveOutOfSearch($page)
    {
        // Course and course group folders only hold a course's pages, and a "latest" page only repeats
        // another page (leaving it out also keeps a Page Inject of it, for example in a sidebar, working)
        $folderTemplates = array_merge($this->courseTemplates, $this->courseGroupTemplates, ['latestcustompagetype']);
        if (in_array($page->template(), $folderTemplates, true)) {
            return true;
        }

        // When searching a course, leave out pages from other courses
        if ($this->searchCourseRoute !== '') {
            $isInCourse = strpos($page->route() . '/', $this->searchCourseRoute . '/') === 0;
            if (!$isInCourse) {
                return true;
            }
        }

        // Leave out pages of an unpublished course or course group
        foreach ($this->getParentPages($page) as $parent) {
            $isCourseOrGroup = $this->isCoursePage($parent) || $this->isCourseGroupPage($parent);
            if ($isCourseOrGroup && !$parent->published()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Before SimpleSearch looks for the search words: remove the pages that should not be searched
     */
    public function onSimpleSearchCollection(Event $event)
    {
        $collection = $event['collection'];

        foreach ($collection as $page) {
            if ($this->leaveOutOfSearch($page)) {
                $collection->remove($page);
            }
        }
    }

    /**
     * Make open_matter_search_groups() available to the search results template
     */
    public function onTwigInitialized()
    {
        $this->grav['twig']->twig()->addFunction(
            new \Twig\TwigFunction('open_matter_search_groups', [$this, 'searchGroups'])
        );
    }

    /**
     * Search results for the results template, grouped by section with the best matches first.
     *
     * Returns a list of groups, each like:
     *   ['title' => 'UX Techniques Guide', 'items' => [ ['url' => ..., 'title_html' => ..., 'trail' => ..., 'snippet_html' => ...], ... ]]
     */
    public function searchGroups($results, $query)
    {
        // SimpleSearch treats commas as separators between search words, so do the same
        $terms = [];
        foreach (explode(',', (string) $query) as $term) {
            $term = trim($term);
            // skip empty words, and words with unreadable characters (they cannot be highlighted)
            if ($term !== '' && mb_check_encoding($term, 'UTF-8')) {
                $terms[] = $term;
            }
        }
        if (!$results || count($terms) === 0) {
            return [];
        }

        $groups = [];
        $position = 0;

        foreach ($results as $page) {
            $groupTitle = $this->searchGroupTitle($page);
            $title = (string) $page->title();

            // Pages whose title has a search word come first, then the others in SimpleSearch's order
            $rank = $position;
            if (!$this->containsAnyTerm($title, $terms)) {
                $rank = $rank + 100000;
            }
            $position++;

            $item = [
                'url' => $page->url(),
                'title_html' => $this->highlightTerms($title, $terms),
                'trail' => $this->searchTrail($page),
                'snippet_html' => $this->highlightTerms($this->searchSnippet($page, $terms), $terms),
                'rank' => $rank,
            ];

            // Add the page to its group, creating the group the first time
            if (!isset($groups[$groupTitle])) {
                $groups[$groupTitle] = ['title' => $groupTitle, 'items' => [], 'rank' => $rank];
            }
            $groups[$groupTitle]['items'][] = $item;

            // A group's rank is the rank of its best page
            if ($rank < $groups[$groupTitle]['rank']) {
                $groups[$groupTitle]['rank'] = $rank;
            }
        }

        // Sort the pages in each group, then the groups, by rank (lowest first)
        $sortedGroups = [];
        foreach ($groups as $group) {
            usort($group['items'], [$this, 'compareRank']);
            $sortedGroups[] = $group;
        }
        usort($sortedGroups, [$this, 'compareRank']);

        return $sortedGroups;
    }

    /**
     * For sorting search results and groups: the lower rank comes first
     */
    public function compareRank($a, $b)
    {
        return $a['rank'] - $b['rank'];
    }

    /**
     * The sections of a page below its course, from the top down, for example: UX Techniques Guide, How to Prototype
     */
    protected function sectionsBelowCourse($page)
    {
        $parents = $this->getParentPages($page);

        foreach ($parents as $index => $parent) {
            if ($this->isCoursePage($parent)) {
                return array_slice($parents, $index + 1);
            }
        }

        // not in a course: all its parents are sections
        return $parents;
    }

    /**
     * The course a page belongs to, as shown on its course card, or the site title when it is not in a course
     */
    protected function courseTitle($page)
    {
        foreach ($this->getParentPages($page) as $parent) {
            if ($this->isCoursePage($parent)) {
                $header = $parent->header();
                if (!empty($header->subsite_list_title)) {
                    return $header->subsite_list_title;
                }
                return $parent->title();
            }
        }

        return (string) $this->config->get('site.title');
    }

    /**
     * The heading of the group a search result is shown in:
     * - searching all courses: the result's course
     * - searching one course (or a single course site): the result's section, or the course for its top-level pages
     */
    protected function searchGroupTitle($page)
    {
        $sections = $this->sectionsBelowCourse($page);
        $isInCourse = count($sections) < count($this->getParentPages($page));

        if ($this->searchCourseRoute === '' && $isInCourse) {
            return $this->courseTitle($page);
        }
        if (count($sections) > 0) {
            return $sections[0]->title();
        }
        return $this->courseTitle($page);
    }

    /**
     * Where a result sits below its group heading, for example: How to Design Products › Accessibility
     */
    protected function searchTrail($page)
    {
        $sections = $this->sectionsBelowCourse($page);

        // the first section is already the group heading, unless searching across all courses
        $isInCourse = count($sections) < count($this->getParentPages($page));
        if (!($this->searchCourseRoute === '' && $isInCourse)) {
            $sections = array_slice($sections, 1);
        }

        $titles = [];
        foreach ($sections as $section) {
            $titles[] = $section->title();
        }

        return implode(' › ', $titles);
    }

    /**
     * Does the text contain any of the search words (ignoring upper and lower case)?
     */
    protected function containsAnyTerm($text, $terms)
    {
        foreach ($terms as $term) {
            if (mb_stripos($text, $term) !== false) {
                return true;
            }
        }
        return false;
    }

    /**
     * About 160 characters of a page's text, from just before the first search word, with … where it is cut
     */
    protected function searchSnippet($page, $terms)
    {
        $length = 160;

        // The page's text without HTML, on one line
        $text = strip_tags((string) $page->content());
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = trim(preg_replace('/\s+/u', ' ', $text));

        // Leave out the page title if the text starts with it (it is already shown)
        $title = (string) $page->title();
        if ($title !== '' && mb_stripos($text, $title) === 0) {
            $text = trim(mb_substr($text, mb_strlen($title)));
        }
        if ($text === '') {
            return '';
        }

        // Start about 50 characters before the first search word found
        $start = 0;
        foreach ($terms as $term) {
            $found = mb_stripos($text, $term);
            if ($found !== false) {
                $start = max(0, $found - 50);
                break;
            }
        }

        // Begin at the start of a word
        if ($start > 0) {
            $nextSpace = mb_strpos($text, ' ', $start);
            if ($nextSpace !== false && $nextSpace - $start < 20) {
                $start = $nextSpace + 1;
            }
        }

        $snippet = mb_substr($text, $start, $length);

        // End at the end of a word, and show … where the text is cut
        $isCutAtEnd = $start + $length < mb_strlen($text);
        if ($isCutAtEnd) {
            $lastSpace = mb_strrpos($snippet, ' ');
            if ($lastSpace !== false && $lastSpace > $length - 30) {
                $snippet = mb_substr($snippet, 0, $lastSpace);
            }
            $snippet = $snippet . '…';
        }
        if ($start > 0) {
            $snippet = '…' . $snippet;
        }

        return trim($snippet);
    }

    /**
     * Make text safe for HTML, with each search word wrapped in <mark> to highlight it
     */
    protected function highlightTerms($text, $terms)
    {
        // A pattern that finds any of the search words, ignoring upper and lower case
        $quotedTerms = [];
        foreach ($terms as $term) {
            $quotedTerms[] = preg_quote($term, '/');
        }
        $pattern = '/(' . implode('|', $quotedTerms) . ')/iu';

        // Split the text into pieces: the search words, and the text between them.
        // Each piece is made safe for HTML on its own, so a search word never matches inside an HTML code like &amp;
        $pieces = preg_split($pattern, (string) $text, -1, PREG_SPLIT_DELIM_CAPTURE);

        // If the search words could not be used (for example, unreadable characters), show the text without highlighting
        if ($pieces === false) {
            return htmlspecialchars((string) $text, ENT_QUOTES, 'UTF-8');
        }

        $html = '';
        foreach ($pieces as $index => $piece) {
            $safePiece = htmlspecialchars($piece, ENT_QUOTES, 'UTF-8');
            $isSearchWord = ($index % 2 === 1);
            if ($isSearchWord) {
                $html = $html . '<mark>' . $safePiece . '</mark>';
            } else {
                $html = $html . $safePiece;
            }
        }

        return $html;
    }

    public function onThemeInitialized()
    {
        $this->config->set('plugins.bootstrapper.version', 'v4');

        // Show GitHub-style alerts (> [!NOTE] etc., as in Helios Course Hub) as Bootstrap alerts, unless the
        // GitHub Markdown Alerts plugin's wrapper class has been customised (see css/github-alerts.css)
        if ($this->config->get('plugins.github-markdown-alerts.wrapper_class', 'md-alert md-alert--') === 'md-alert md-alert--') {
            $this->config->set('plugins.github-markdown-alerts.wrapper_class', 'alert md-alert md-alert--');
            $this->config->set('plugins.github-markdown-alerts.include_css', false);
        }
    }

    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes('user://themes/bootstrap4-open-matter/shortcodes');
    }

    public function onTwigSiteVariables()
    {
        // Embedded mode via Grav params (/chromeless:true, /embedded:true, /standalone:true)
        // or query strings (?embedded=true, ?chromeless=true, ?standalone=true – as in Helios Course Hub)
        $uri = $this->grav['uri'];
        $embeddedMode = false;
        foreach (['chromeless', 'embedded', 'standalone'] as $name) {
            if ($this->isTrueParam($uri->param($name)) || $this->isTrueParam($uri->query($name))) {
                $embeddedMode = true;
                break;
            }
        }
        $twig = $this->grav['twig'];
        $twig->twig_vars['embedded_mode'] = $embeddedMode;

        // Course search: the configured SimpleSearch route, and the course (if any) the current page belongs to
        $twig->twig_vars['search_route'] = $this->searchRoute;
        $searchCourse = $this->isAdmin() ? null : $this->findCoursePage($uri->path());
        $twig->twig_vars['search_course_route'] = $searchCourse ? $searchCourse->route() : '';

        // Hide the Git Sync link via ?edit_link=false or ?hidegitlink=true (as in Helios Course Hub), or /edit_link:false or /hidegitlink:true
        $twig->twig_vars['hide_git_link'] = $uri->query('edit_link') === 'false' || $uri->param('edit_link') === 'false'
            || $this->isTrueParam($uri->query('hidegitlink')) || $this->isTrueParam($uri->param('hidegitlink'));

        if ($this->isAdmin() && ($this->grav['config']->get('plugins.shortcode-core.enabled'))) {
            $this->grav['assets']->add('user://themes/bootstrap4-open-matter/editor-buttons/admin/js/shortcode-pdf.js');
            $this->grav['assets']->add('user://themes/bootstrap4-open-matter/editor-buttons/admin/js/shortcode-h5p.js');
        }
    }

    private function isTrueParam($value)
    {
        return $value !== null && $value !== false && $value !== '' && $value !== 'false' && $value !== '0';
    }

    public function onPageInitialized()
    {
      $page = $this->grav['page'];
      $parent = $page->parent() ?? null;

      if (!is_null($parent))
      {
        if ($parent->template() === 'course' && !$page->parent()->published())
        {
            $event = new Event(['page' => null]);
            $event->page = null;
            $event = $this->grav->fireEvent('onPageNotFound', $event);
            /** @var PageInterface $page */
            $page = $event->page;
            unset($this->grav['page']);
            $this->grav['page'] = $page;
        } else
        {
          $parentofparent = $page->parent()->parent() ?? null;
          if (!is_null($parentofparent))
          {
            if ($parentofparent->template() === 'course' && !$page->parent()->parent()->published())
            {
                $event = new Event(['page' => null]);
                $event->page = null;
                $event = $this->grav->fireEvent('onPageNotFound', $event);
                /** @var PageInterface $page */
                $page = $event->page;
                unset($this->grav['page']);
                $this->grav['page'] = $page;
            }
          }
        }
      }
    }

}

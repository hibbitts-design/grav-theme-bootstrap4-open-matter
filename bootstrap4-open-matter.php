<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;
use Grav\Common\Page\Interfaces\PageInterface;

class Bootstrap4OpenMatter extends Theme
{
    // Boostrap plugin will look for this class var to know it should load
    public $load_bootstrapper_plugin = true;

    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'  => ['onThemeInitialized', 0],
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
            'onPageInitialized' => ['onPageInitialized', 0]
        ];
    }

    public function onThemeInitialized()
    {
        $this->config->set('plugins.bootstrapper.version', 'v4');
    }

    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes('user://themes/bootstrap4-open-matter/shortcodes');
    }

    public function onTwigSiteVariables()
    {
        if ($this->isAdmin() && ($this->grav['config']->get('plugins.shortcode-core.enabled'))) {
            $this->grav['assets']->add('user://themes/bootstrap4-open-matter/editor-buttons/admin/js/shortcode-presentation.js');
            $this->grav['assets']->add('user://themes/bootstrap4-open-matter/editor-buttons/admin/js/shortcode-h5p.js');
        }
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

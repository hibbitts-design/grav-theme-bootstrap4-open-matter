<div align="center">

# 🏫 Bootstrap4 Open Matter

### Designed to accompany the Open Course Hub and Open MultiCourse Hub Skeletons

<p><em>A Grav theme for open course hubs and blogs – embeddable in any LMS, with Git-based open editing built in.</em></p>

[![Grav Discord Chat](https://img.shields.io/discord/501836936584101899.svg?logo=discord&colorB=728ADA&label=Grav%20Discord%20Chat)](https://chat.getgrav.org) [![Latest Release](https://img.shields.io/github/v/release/hibbitts-design/grav-theme-bootstrap4-open-matter?style=flat-square&label=Release)](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter/releases/latest) [![License](https://img.shields.io/badge/License-MIT-blue.svg?style=flat-square)](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter/blob/master/LICENSE) [![PHP](https://img.shields.io/badge/PHP-%3E%3D8.0.2-8892BF?style=flat-square&logo=php&logoColor=white)](https://learn.getgrav.org/17/basics/requirements)

<p>Try the <a href="https://demo.hibbittsdesign.org/grav-open-course-hub/">demo</a></p>

<p>A free, open-source child theme of the <a href="https://github.com/trilbymedia/grav-theme-bootstrap4">Grav Bootstrap4 theme</a>, built for <a href="https://getgrav.org">Grav CMS</a> with Markdown file-based content, a built-in Admin panel, and no database required. Used by the <a href="https://github.com/hibbitts-design/grav-skeleton-course-hub">Open Course Hub</a> and <a href="https://github.com/hibbitts-design/grav-skeleton-multicourse-hub">Open MultiCourse Hub</a> skeleton packages.</p>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot.webp"><img alt="Course homepage with this week's module, reminders and required reading, and a course sidebar with LMS links, in light mode" src="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot.webp" width="49%"></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot-module-dark.webp"><img alt="Modules page with a card for each module, and the course sidebar on the right, in dark mode" src="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot-module-dark.webp" width="49%"></a>

<a href="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot-blog-dark.webp"><img alt="Course blog with a featured post and other posts, and a sidebar with Popular Tags, Archives and RSS, in dark mode" src="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot-blog-dark.webp" width="49%"></a> <a href="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot-module-page.webp"><img alt="Module 4 page with its slides, and a list of all modules on the right with Module 4 highlighted and its sections listed below it, in light mode" src="https://raw.githubusercontent.com/hibbitts-design/grav-theme-bootstrap4-open-matter/refs/heads/master/screenshots/screenshot-module-page.webp" width="49%"></a>

<p>Open Course Hub – Course homepage and Modules page (top), and the course blog and a module page (bottom), in light and dark mode</p>

</div>

Bootstrap4 Open Matter adds what open, collaborative course and blog sites need on top of the Bootstrap4 theme: pages that embed cleanly in an LMS, links that open each page's source in your Git repository, and a set of shortcodes and page types for course content.

## What Sets It Apart

- **Content that carries over to Grav Helios Course Hub** – shortcodes, GitHub-style alerts, course card fields, and page URL parameters use the same names, so course content moves to [Grav Helios Course Hub](https://github.com/hibbitts-design/grav-skeleton-helios-course-hub) without rewriting, including the `[topics]` index, the course content shortcodes, and course search
- **Chromeless display for LMS embedding** – add `/chromeless:true` or `?embedded=true` to any page URL to show only its content, or hide the site menu, sidebar, and footer site-wide
- **Modules, a blog, or weekly units** – Modules pages with a card for each module and module pages with a list of modules (with the current page's sections) and course search beside the content, plus Previous and Next buttons, using the same page types as Grav Helios Course Hub, alongside a blog or with a blog listing weekly units; a Canvas, Moodle, Brightspace, or Blackboard course can be imported as modules with the free [Common Cartridge Converter](https://common-cartridge-converter.hibbittsdesign.org/) (beta) – see [an example conversion](https://demo.hibbittsdesign.org/grav-open-course-hub-common-cartridge-it2dda/)
- **Open authoring with Git Sync** – a "View Git Repository" or "View/Edit Page in Git Repository" link in the menu, footer, or page, with a custom icon and text
- **Built-in shortcodes** – Badge, Button, Embedly, Google Slides, H5P, iFrame, Link Preview Card, Markdown File, PDF, SpeakerDeck, Topics (an A–Z topics index), and Show/Hide If Embedded, with `title` (and `ratio`) options for accessible, well-proportioned embeds
- **Course content shortcodes** – `[objectives]`, `[key-takeaways]`, `[reflection]`, `[definition]`, `[example]`, `[case-study]`, `[project-brief]`, `[process-note]`, `[feedback-requested]`, `[announcement]`, `[exercise]`, `[references]`, and `[excerpt]`, shown as Bootstrap alerts, with the same names and options as Grav Helios Course Hub
- **Course and content page types** – blog with featured (sticky) posts and a sidebar with Popular Tags, Archives and RSS for each blog, course sections, RSS feed aggregation, link lists, subsites with course cards (description, instructor, badge, group, and image), and dedicated H5P, iFrame, PDF, Embedly, and link preview card pages; a course can be set up with `subsite.md` or, as in Grav Helios Course Hub, `course.md`
- **Course search** – with the SimpleSearch plugin, a "Search course..." box in the sidebar searches just the current course, or, when its Show Search Box setting is on, all courses from the course list page, with results in each course's own layout; the **/** key jumps to the search box, ready to type, as in Grav Helios Course Hub
- **Visual styles** – 2026 Modern, 2026 Refresh or Classic, with Dark Mode off, on, or following the visitor's system setting
- **Flexible layout** – a Markdown-based sidebar, NavBar look (solid or a light tint of its colour), style, colour, position, and breakpoint options, dropdowns, and custom menu items
- **Open licensing and accessibility** – Creative Commons license display and hidden H1 page titles for screen readers
- **Image captions in plain Markdown** – an italic line right after an image (such as `*Photo by …*`) shows as a caption, and images in page text are no taller than a little over half the screen, so an image and its text fit on screen together; tap or click an image shown smaller than its full size to see it larger
- **Print-friendly pages** – printed pages show just the content in black on white, with link addresses, whatever the Theme Style or Dark Mode

## When is Bootstrap4 Open Matter a Good Candidate?

Bootstrap4 Open Matter is a good fit when you:

- Want an open course hub or blog with a familiar Bootstrap look
- Need to embed pages cleanly in an LMS
- Value Git-based, open authoring of your content

Other options might be better when you:

- Want a more refined course site design – consider [Grav Helios Course Hub](https://github.com/hibbitts-design/grav-skeleton-helios-course-hub)
- Need only a standard Bootstrap site without these extras – the [Bootstrap4 theme](https://github.com/trilbymedia/grav-theme-bootstrap4) is enough
- Want zero-server publishing directly from GitHub – consider [Docsify-This](https://docsify-this.net)

## Quick Start

The easiest way to get started is the [Open Course Hub](https://github.com/hibbitts-design/grav-skeleton-course-hub) or [Open MultiCourse Hub](https://github.com/hibbitts-design/grav-skeleton-multicourse-hub) skeleton package, which includes this theme already configured.

### Installing in an Existing Site
1. In the Admin Panel, go to **Themes → Add** and install **Bootstrap4 Open Matter**, or from the root of your Grav site run `bin/gpm install bootstrap4-open-matter`
2. The parent **Bootstrap4** theme and required plugins are installed as dependencies

### Setting as the Default Theme
1. In the Admin Panel, go to **Themes**, select **Bootstrap4 Open Matter**, and press **Activate**, or in `user/config/system.yaml` set the theme under `pages`:
   ```yaml
   pages:
     theme: bootstrap4-open-matter
   ```
2. Clear the Grav cache (`bin/grav clearcache`)

> [!TIP]
> Make your customizations in a child theme (the skeleton packages include one called `mytheme`), so they are kept when Bootstrap4 Open Matter is updated.

## Theme Options

All options are available in the Admin Panel under **Themes → Bootstrap4 Open Matter**.

- **Open Matter Options** – chromeless site, menu dropdowns, Creative Commons license type and display, and H5P embed source URL
- **Bootstrap4 Options** – Visual Style (Theme Style, Dark Mode), Header Defaults (Header Image Height: Standard, Slim, Standard on home pages with slim or hidden elsewhere, or Hidden; NavBar look, style, background, position, and breakpoint, and **Link to Course List**, off by default: on a MultiCourse site, an "All Courses" link at the top of each course's pages, back to the list of courses), Sidebar Defaults (Syndicate (RSS) links), and Module Defaults (Module Description Lines, **Previous/Next Bar on Phones**, off by default: a Previous/Next bar fixed to the bottom of the screen on module pages, as in Grav Open Publishing Space guides, **Keep My Place**, on by default: a "Continue where you left off" box on a course's Modules page, which a course can also turn off on its course page, and **Hide Sidebar Button**, on by default)
- **Custom Menu Items** – text, icon, URL, and target for extra NavBar links
- **Git Sync Link** – location, link type (view or edit), icon and text, Site Theme Files link, and a custom Git repository tree URL

> [!TIP]
> The slim header shows only the middle of the image, so landscapes, textures, or photos with a centred subject work best.

## Modules

Modules use the same page types as Grav Helios Course Hub, and a Canvas, Moodle, Brightspace, or Blackboard course (a Common Cartridge export) can be imported as modules with the free [Common Cartridge Converter](https://common-cartridge-converter.hibbittsdesign.org/) (beta):

- A **Modules** page (`module.md`) shows its content, then a card for each module
- Each **module** (`course-page.md`) can have its own pages; module pages show the course search box and a list of all modules on the right, where the course sidebar is on other pages, with Previous and Next buttons through every module and page in order
- On phones, the module list follows the content, and a page inside a module starts with a link back to its module
- With the [Page TOC](https://github.com/trilbymedia/grav-plugin-page-toc) plugin, the module list also shows the current page's sections (its h2 headings, or its h3s), and on phones they appear in an "On this page" box above the content; on wider screens the module list stays in view while reading
- A module or page can set `group:` to appear under a heading, both on the cards and in the module list
- On wider screens, readers can hide the sidebar (the module list and its search box) to focus on the page, with the button in the same top corner to show it again; their choice is remembered, and a page inside a module then shows its link back to the module. Turn it off with the **Hide Sidebar Button** theme option
- On module pages, the ← and → arrow keys go to the previous and next page, as in Grav Open Publishing Space guides – handy when presenting a module by screen sharing
- A course's Modules page shows returning readers a "Continue where you left off" box, linking to the last page they opened in its module list
- A module or page can also set a Badge Label (such as "Draft" or "Due Friday") and Badge Color, shown on its card, as on the course cards
- Link from one module to another with a relative link, such as `[Accessibility](../accessibility)`: it keeps working when the course moves to another folder or site, or when its content moves to or from a Grav Open Publishing Space guide
- A course page can set **Learning Objectives** (`learning_objectives:`, on the page's Module tab), shown at the top of the page as a Learning Objectives box – the same setting as in Grav Open Publishing Space guides, so a guide page's objectives carry over unchanged
- A **Side Box** (`side_box:`, Markdown) shows under the module list – set it on a module page, on the Modules page for every page in its list, or on the course page in a site with several courses; `side_box: false` hides it on a page, or on a module and its pages. The same setting as in Grav Open Publishing Space guides and Grav Helios Course Hub

## Blogs

A blog page lists its posts newest first, with any posts tagged `featured` shown first. With the [Taxonomy List](https://github.com/getgrav/grav-plugin-taxonomylist), [Archives](https://github.com/getgrav/grav-plugin-archives) and [Feed](https://github.com/getgrav/grav-plugin-feed) plugins, a blog and its posts also show Popular Tags, Archives (posts by month) and RSS/Atom links in the sidebar:

- Each blog shows only its own tags and months, so a site can have several blogs, such as a course blog in each course
- A blog that hides its post dates and tags (Hide Post Date and Hide Post Taxonomy), such as one listing weekly units, leaves out Popular Tags and Archives
- Other pages, such as Modules or the Syllabus, show none of these

## Page URL Parameters

Add these to any page URL, for example `https://yoursite.com/modules/module-01/chromeless:true` or `https://yoursite.com/modules/module-01?embedded=true`.

| Parameter | Effect |
|---|---|
| `/chromeless:true` (or `/embedded:true`, `/standalone:true`) | Shows only the page content, with no site menu, sidebar, or footer – for embedding in an LMS |
| `?embedded=true` (or `?chromeless=true`, `?standalone=true`) | Same as `/chromeless:true`, using the same parameter as Grav Helios Course Hub; carried forward as you follow links |
| `?edit_link=false` (or `?hidegitlink=true`) | Hides the Git Sync link on that page |
| `/hidepagetitle:true` | Hides the visible page title, keeping it as a hidden heading for screen readers |
| `/hideheaderimage:true` | Hides a blog post's header image |
| `/summaryonly:true` (or `/onlysummary:true`) | Shows only a post's summary, with a link to the full post |
| `/filter:<tag>` | On Sections pages, limits the section navigation to pages with that tag |

## Printing

To leave something out when a page is printed, add Bootstrap's `d-print-none` class (or `no-print`, as in Grav Helios Course Hub).

## Requirements

- PHP >= 8.0.2
- Grav CMS 1.7 or 2.0
- The [Bootstrap4 theme](https://github.com/trilbymedia/grav-theme-bootstrap4) and required plugins, installed automatically as dependencies
- GitHub-style alerts (`> [!NOTE]`, `> [!TIP]`, …) need the [GitHub Markdown Alerts](https://github.com/trilbymedia/grav-plugin-github-markdown-alerts) plugin – version 2 on Grav 2, or [version 1.1.1](https://github.com/trilbymedia/grav-plugin-github-markdown-alerts/releases/tag/1.1.1) on Grav 1.7 (both are included in the Open Course Hub and Open MultiCourse Hub packages); without it they show as regular blockquotes
- Course search needs the [SimpleSearch](https://github.com/getgrav/grav-plugin-simplesearch) plugin (Grav 1.7 or 2)
- A module page's sections need the [Page TOC](https://github.com/trilbymedia/grav-plugin-page-toc) plugin – version 4 on Grav 2, or version 3.2.5 on Grav 1.7 (both are included in the Open Course Hub and Open MultiCourse Hub packages)
- The blog sidebar's Popular Tags, Archives and RSS need the Taxonomy List, Archives and Feed plugins (all included in the Open Course Hub and Open MultiCourse Hub packages)

## Languages

English, French and German are complete. The theme's other languages (Spanish, Italian, Romanian, Russian, Ukrainian, Croatian, Polish and Brazilian Portuguese) are partial, with any missing text shown in English – translations are welcome, in `languages.yaml`. (Creative Commons license names stay in English, as their official titles.)

## Support

### Contact and Support
- Share your feedback in the [Open Course Hub Survey](https://docs.google.com/forms/d/e/1FAIpQLSeI6SuJYPyKrhQmlnRVxJI9plUiemu5yTLtLLjwKc9QboR8VQ/viewform)
- Follow [@hibbittsdesign@mastodon.social](https://mastodon.social/@hibbittsdesign) on Mastodon for updates
- 👩🏻‍💻🧑🏻‍💻 Join the [Grav Discord](https://chat.getgrav.org) and often find me there
- Add a ⭐️ [star on GitHub](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter) to the Bootstrap4 Open Matter project repository
- For bugs or feature requests, [open an issue](https://github.com/hibbitts-design/grav-theme-bootstrap4-open-matter/issues) on GitHub

### Professional Services

By leveraging his extensive UX design expertise and systems-oriented approach, Paul helps teams and individuals utilize open content in education and publication settings. Professional services include user experience and workflow consulting, premium support subscriptions, workshops, and custom development. Interested? Send a note to [paul@hibbittsdesign.org](mailto:paul@hibbittsdesign.org).

## License

MIT – Hibbitts Design

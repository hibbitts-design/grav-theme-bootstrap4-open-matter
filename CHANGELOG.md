# v2.0.8
## 04/23/2019

1. [](#improved)
    * Improved handling of Section Page Next/Prev buttons for previous Section with children pages

# v2.0.7
## 04/18/2019

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v2.0.6
## 04/17/2019

1. [](#improved)
    * Added paragraph wrapper to embedly, h5p, iframe, pdf, speakerdeck and swipedeck templates
    * Updated example pages in theme '_demo' folder

# v2.0.5
## 04/17/2019

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v2.0.4
## 04/16/2019

1. [](#improved)
    * Removed unneeded Atom and RSS feed Twig templates (thanks @rhuk for the new Page Inject Plugin release)

# v2.0.3
## 04/15/2019

1. [](#improved)
    * Added option to show/hide custom content item links
    * Updated example pages in theme '_demo' folder

# v2.0.2
## 04/14/2019

1. [](#improved)
    * Improved compatibility of custom content list pages with previous theme releases
    * Updated example pages in theme '_demo' folder

# v2.0.1
## 04/14/2019

1. [](#improved)
    * Added support for optional direct link on iFrame page and content titles
    * Updated example pages in theme '_demo' folder

# v2.0.0
## 04/12/2019

1. [](#new)
    * Set Grav dependency to 1.6+
    * Added Presentation Plugin as dependency
    * Added insert Presentation Shortcode button into Editor toolbar
    * Added example pages in theme '_demo' folder to include use of the Presentation Plugin
    * Implement assets rendering using **Deferred Block** Twig extension
1. [](#improved)
    * Added 'hideheaderimage' as a URL parameter to hide the header image for blog posts
    * Added option to include link for iFrame content title
    * Support for dynamic height footer content (thanks @OleVik)
    * Removed unneeded 'fullwidthpage' and 'sidebarpage' templates and blueprints
    * Added paragraph wrapper to Bootstrap button, H5P, and Swipe Shortcodes

# v1.9.7
## 03/22/2019

1. [](#new)
    * Set Dependency of Grav 1.5.10+ which has support for new **Deferred Block** Twig extension
    * Implement assets rendering using **Deferred Block** Twig extension

# v1.9.6
## 03/21/2019

1. [](#bugfix)
    * Fixed course list page layout with dynamic height footer

# v1.9.5
## 03/21/2019

1. [](#improved)
    * Support for dynamic height footer content (thanks @OleVik)

# v1.9.4
## 03/20/2019

1. [](#bugfix)
    * Removed 'Presentation' folder in theme '_demo' folder intended for 2.0 release

# v1.9.3
## 02/24/2019

1. [](#improved)
    * Added 'Gill Sans MT' to default font family for Presentation pages

# v1.9.2
## 02/24/2019

1. [](#improved)
    * Added defaults for sample content, textscale and fonts with blueprint for Presentation Plugin

# v1.9.1
## 02/15/2019

1. [](#improved)
    * Added more robust support for MultiCourse feature using the Presentation Plugin
    * Added support for default aspect ratio when using the Presentation Plugin

# v1.9.0
## 02/13/2019

1. [](#improved)
    * For improved support of the Presentation Plugin, Markdown links with "=_target" are now handled better

# v1.8.9
## 02/09/2019

1. [](#improved)
    * Better support for flat lists of Section-type pages

# v1.8.8
## 02/08/2019

1. [](#bugfix)
    * Fixed RSS and Atom feeds for pages with embedded iFrame or Topics
1. [](#improved)
    * Additional templates for RSS and Atom feeds no longer contains duplicated Twig code (embed is used instead)

# v1.8.7
## 02/08/2019

1. [](#improved)
    * iFrame link and title only templates now support both complete URLs and local Grav site page paths

# v1.8.6
## 02/07/2019

1. [](#improved)
    * iFrame template and blueprint now supports both complete URLs and local Grav site page paths

# v1.8.5
## 02/06/2019

1. [](#new)
    * Added support for H5P content to be hosted on H5P.com (in addition to H5P.org and your own local server)

# v1.8.4
## 02/05/2019

1. [](#new)
    * Added options to show or hide Section Page Sidebar and change Section Navbar alignment (left or right)

# v1.8.3
## 02/04/2019

1. [](#new)
    * Added option to show or hide Section Page Next/Prev buttons

# v1.8.2
## 02/03/2019

1. [](#new)
    * Added support for 'visible' option setting in Section-type pages. For existing Section-type pages, ensure that any current 'visible: false' values are removed for those pages to be included.

# v1.8.1
## 01/29/2019

1. [](#improved)
    * Improved handling of embedded item summary pages

# v1.8.0
## 01/28/2019

1. [](#improved)
    * Added 'onlysummary' alias for the URL parameter 'summaryonly'

# v1.7.9
## 01/28/2019

1. [](#improved)
    * When displaying pages in 'chromeless' mode, a Creative Commons License is no longer displayed (it is assumed that this would be included in the parent system i.e. LMS)
1. [](#bugfix)
    * Fixed display of additional text for a Creative Commons License

# v1.7.8
## 01/27/2019

1. [](#improved)
    * Adjusted display of optional link items for embedded iFrames

# v1.7.7
## 01/27/2019

1. [](#improved)
    * Added optional link items for each iFrame displayed
1. [](#bugfix)
    * Fixed check for site-wide 'chromeless' option for custom content lists

# v1.7.6
## 01/25/2019

1. [](#bugfix)
    * Removed default custom menubar entry

# v1.7.5
## 01/21/2019

1. [](#bugfix)
    * Fixed check for theme 'chromeless' option and display of Next/Prev Post buttons

# v1.7.4
## 01/14/2019

1. [](#new)
    * Added iFrame template, blueprint, and shortcode (with responsive support for 4by3 and 16by9 aspect ratios)
1. [](#improved)
    * Added option for custom Git Sync link text in page headers
1. [](#bugfix)
    * Fixed display of Git Sync link on custom content list and page rss feeds pages

# v1.7.3
## 01/08/2019

1. [](#bugfix)
    * Custom menu items without icons are now presented correctly

# v1.7.2
## 01/07/2019

1. [](#bugfix)
    * Removed experimental support for multiple blog compatibility for Featured Posts and Popular Tags

# v1.7.1
## 01/05/2019

1. [](#improved)
    * Added optional course list title for courses
    * Updated example pages in theme '_demo' folder

# v1.7.0
## 01/04/2019

1. [](#improved)
    * Updated example pages in theme '_demo' folder
1. [](#bugfix)
    * Fixed malformed link for MultiCourse home page

# v1.6.9
## 01/03/2019

1. [](#improved)
    * Course list cards can now display course page content
    * Added check for page header 'published' for modular home page items

# v1.6.8
## 12/28/2018

1. [](#improved)
    * Removed unneeded theme option for MultiCourse feature (automatic detection is now fully supported)

# v1.6.7
## 12/27/2018

1. [](#new)
    * Added the ability to hide courses from a course list page and set custom course home page
1. [](#improved)
    * Revised MultiCourse feature to be more robust and automatic detection is now supported (manual theme option will be soon removed once further testing is complete)
    * Removed theme option to hide homepage in menubar (set the 'visible' option to 'false' on homepage for same functionality)
    * Updated example pages in theme '_demo' folder

# v1.6.6
## 12/22/2018

1. [](#new)
    * Added menubar item template and blueprint for easier editing of course-specific menubar items (replaced 'menu_classes' with more specific 'menu_target' option)

# v1.6.5
## 12/22/2018

1. [](#improved)
    * Updated 'menu_class' page header option to 'menu_classes' to better match existing option names

# v1.6.4
## 12/21/2018

1. [](#improved)
    * Added 'menu_icon' and 'menu_class' to support menu icon and class for redirect-type pages

# v1.6.3
## 12/21/2018

1. [](#improved)
    * Updated CSS style of MultiCourse list cards

# v1.6.2
## 12/19/2018

1. [](#improved)
    * Added two column display of courses (using Bootstrap 4 Cards) on course list page

# v1.6.1
## 12/19/2018

1. [](#new)
    * Added courselist/course templates and blueprints to provide an auto-generated index of all courses within a MultiCourse Hub
1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.6.0
## 12/16/2018

1. [](#improved)
    * Experimental support of multiple blog compatibility for Featured Posts and Popular Tags. Note: use `- '@self'` for the filter in the Archives Plugin for use of multiple blogs. (Thanks to @pamtbaau for pointing me in the right direction)

# v1.5.9
## 12/12/2018

1. [](#improved)
    * Section-type pages now have the Folder Numeric Prefix option enabled by default (so Section pages can be manually sorted)

# v1.5.8
## 12/12/2018

1. [](#improved)
    * Updated H5P and SpeakerDeck templates
1. [](#bugfix)
    * Removed deprecated Twitter feed template and blueprint

# v1.5.7
## 12/11/2018

1. [](#bugfix)
    * Fixed incorrect H5P references
    * Updated example pages in theme '_demo' folder

# v1.5.6
## 12/11/2018

1. [](#improved)
    * Added option to hide or show content titles for custom content type templates and blueprints
    * Updated example pages in theme '_demo' folder

# v1.5.5
## 12/09/2018

1. [](#bugfix)
    * Fixed display of expected site name for top-level site pages

# v1.5.4
## 12/08/2018

1. [](#improved)
    * Added help and descriptive text to 'MultiCourse' setting in theme blueprint

# v1.5.3
## 12/06/2018

1. [](#improved)
    * Revised theme blueprints and templates to use the term 'MultiCourse'
    * Updated example pages in theme '_demo' folder

# v1.5.2
## 12/05/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.5.1
## 12/03/2018

1. [](#improved)
    * Improved experimental support for multiple courses within one hub
    * Improved compatibility when using the Page Inject Plugin for several page templates

# v1.5.0
## 11/19/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.4.9
## 11/18/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.4.8
## 11/18/2018

1. [](#improved)
    * Improved course title handling within one course hub
    * Updated example pages in theme '_demo' folder

# v1.4.7
## 11/17/2018

1. [](#improved)
    * Title of each course hub is now set by the title of the top-level course hub page (i.e. `default.md`) instead of an additional `site_title` frontmatter variable in the homepage of the course (i.e. `home.md`)
    * Improved course navigation handling within one course hub
    * Updated example pages in theme '_demo' folder

# v1.4.6
## 11/16/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.4.5
## 11/16/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.4.4
## 11/16/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.4.3
## 11/15/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.4.2
## 11/15/2018

1. [](#new)
    * Added support for global image header, sidebar, and footer
1. [](#improved)
    * Adjusted space between custom menu item icons and text labels
    * Updated example pages in theme '_demo' folder

# v1.4.1
## 11/15/2018

1. [](#improved)
    * Revised page titles to better indicate current course
1. [](#bugfix)
    * Fixed ChangeLog format

# v1.4.0
## 11/15/2018

1. [](#new)
    * Added experimental support for multiple courses within one hub (i.e. MultiCourse Hub) with each course having it's own image header, site menu, sidebar and footer (enabled with theme option `multi_course_hub` to `true`)
    * Added new 'multicourse-hub' example site in theme '_demo' folder

# v1.3.0
## 11/07/2018

1. [](#improved)
    * Twig 2.0 compatibility

# v1.2.5
## 10/30/2018

1. [](#improved)
    * Added check for page visibility in Custom Content List page collections (to support creating archive folders within page folders)
    * Updated item blueprints to set default page visibility to true
    * Updated example pages in theme '_demo' folder

# v1.2.4
## 10/22/2018

1. [](#improved)
    * Updated included CSS examples for use with Canvas LMS

# v1.2.3
## 10/21/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.2.2
## 10/19/2018

1. [](#improved)
    * Improved accessibility when displaying blog items in 'chromeless' mode and hiding page title

# v1.2.1
## 10/17/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder
1. [](#bugfix)
    * Fixed blueprint site theme files Git Sync link option

# v1.2.0
## 10/17/2018

1. [](#improved)
    * Updated display of site theme files Git Sync link

# v1.1.9
## 10/16/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.1.8
## 10/16/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.1.7
## 10/15/2018

1. [](#bugfix)
    * Corrected Header level for RSS Page item titles

# v1.1.6
## 10/15/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.1.5
## 10/14/2018

1. [](#bugfix)
    * Corrected filename for Grava11y (Accessibility for Grav) Plugin

# v1.1.4
## 10/14/2018

1. [](#new)
    * Added Grava11y (Accessibility for Grav) Plugin as dependency
1. [](#improved)
    * Adjusted Font Awesome icon spacing
    * Updated example pages in theme '_demo' folder

# v1.1.3
## 10/14/2018

1. [](#improved)
    * Various accessibility improvements related to headings, contrast, and link text (update may require changing header levels used in pages, i.e. h5 to h2 etc.)
    * Updated example pages in theme '_demo' folder

# v1.1.2
## 10/13/2018

1. [](#improved)
    * Added support for pagination controls when a text string filter for display of RSS items is used

# v1.1.1
## 10/12/2018

1. [](#bugfix)
    * Corrected check to hide or show RSS feed pagination controls

# v1.1.0
## 10/12/2018

1. [](#new)
    * Added support for optional text string filter for display of RSS items
1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.0.9
## 10/09/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder
1. [](#bugfix)
    * Restored check for option to hide Git Sync link in menu

# v1.0.8
## 10/08/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.0.7
## 10/07/2018

1. [](#improved)
    * Removed dashes from all template and blueprint names
    * Updated example pages in theme '_demo' folder

# v1.0.6
## 10/07/2018

1. [](#new)
    * Added blueprints for section-type pages
1. [](#improved)
    * Revised visual styling of active page indicator in sections nav
    * Adjusted page title alignment for section-type pages
    * Updated demo pages in theme '_demo' folder

# v1.0.5
## 10/06/2018

1. [](#new)
    * Added blueprints for section-type pages
1. [](#improved)
    * Revised visual styling of active page indicator in sections nav

# v1.0.4
## 10/06/2018

1. [](#bugfix)
    * Fixed current page check in section nav

# v1.0.3
## 10/05/2018

1. [](#improved)
    * Restored the display of a Creative Commons License and Git Sync links on section-type pages

# v1.0.2
## 10/05/2018

1. [](#new)
    * Added page frontmatter option (`sections_nav_align`) to display sections nav on left or right side of page
    * Updated example pages in theme '_demo' folder

# v1.0.1
## 10/04/2018

1. [](#new)
    * Added new 'section' and 'subsection' page templates
1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v1.0.0
## 09/23/2018

1. [](#new)
    * Added the experimental alias 'embedded' for 'chromeless' as a URL parameter (i.e. https://demo.hibbittsdesign.org/grav-open-matter-course-hub/embedded:true is the same as https://demo.hibbittsdesign.org/grav-open-matter-course-hub/chromeless:true)
1. [](#improved)
    * Revised UI text for the site-wide 'chromeless' setting to better relate to the new\ experimental 'embedded' alias
    * Improved checks for the site-wide 'chromeless' setting
    * Updated example pages in theme '_demo' folder

# v0.9.99
## 09/14/2018

1. [](#improved)
    * Adjusted page margins for smaller screens (and when embedding pages into other systems)

# v0.9.98
## 09/08/2018

1. [](#improved)
    * Updated various Git Sync-related blueprint text labels

# v0.9.97
## 09/08/2018

1. [](#improved)
    * Revised name of page frontmatter option to hide page summaries to 'hide_post_summary'
    * Updated example pages in theme '_demo' folder

# v0.9.96
## 09/07/2018

1. [](#improved)
    * Added support for display of either blog item summary or content when hiding "View all of..." links

# v0.9.95
## 09/07/2018

1. [](#improved)
    * Revised page Blueprints to improve wording of various options
    * Updated example pages in theme '_demo' folder
    * Restored option to display "View all of..." links as Buttons

# v0.9.94
## 09/06/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v0.9.93
## 09/06/2018

1. [](#improved)
    * Decreased file size of open course hub example images in theme '_demo' folder

# v0.9.92
## 09/05/2018

1. [](#new)
    * Added new open course hub examples in theme '_demo' folder
1. [](#improved)
    * Added 'topic' as default child type to newly created 'category' pages
    * Added 'embedlycard' as default child type to newly created 'customcontentlist' pages
    * Revised several page blueprint section names

# v0.9.91
## 09/04/2018

1. [](#new)
    * Added experimental Bootstrap button Shortcode ([button url="" label="" target="" type="" size="" classes=""])
1. [](#improved)
    * Updated example pages in theme '_demo' folder
    * Added placeholder 'category' and 'topic' page templates

# v0.9.90
## 09/02/2018

1. [](#bugfix)
    * Renamed blueprint for revised custom content list template name

# v0.9.89
## 09/01/2018

1. [](#improved)
    * Revised custom content type-related template names
    * Updated example pages in theme '_demo' folder

# v0.9.88
## 09/01/2018

1. [](#improved)
    * Updated 'latest' page template to work with more page types

# v0.9.87
## 08/31/2018

1. [](#improved)
    * Added additional templates to handle possible Atom/RSS feed issues

# v0.9.86
## 08/31/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder
    * Added templates to handle possible Atom/RSS feed issues
    * Display Atom/RSS feed buttons only on Blog pages
    * Added new page template to show only latest custom content item

# v0.9.85
## 08/29/2018

1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v0.9.84
## 08/29/2018

1. [](#new)
    * Added Twitter Shortcode ([twitter url="" text="" theme="" height=""]), where theme can be 'light' or 'dark'
    * Added PDF Shortcode ([pdf url="")
    * Added new page template and blueprint ('Page') with optional display of sidebar (replaces previous 'fullwidthpage' and 'sidebarpage' templates and blueprints)
    * Added new H5P page templates
1. [](#improved)
    * Added default favicon folder and file
    * Added insert PDF Shortcode button into Editor toolbar
    * Updated H5P template and blueprint files
    * Updated Twitter feed template and blueprint files
    * Updated example pages in theme '_demo' folder

# v0.9.83
## 08/27/2018

1. [](#bugfix)
    * Removed unavailable Bootswatch theme style options

# v0.9.82
## 08/27/2018

1. [](#new)
    * Added experimental support for Bootswatch theme styles (thanks to Ralf Geschke for the Tikva theme example)

# v0.9.81
## 08/23/2018

1. [](#bugfix)
    * Restored missing Error and Problems Plugin dependencies

# v0.9.80
## 08/23/2018

1. [](#new)
    * Updated example pages in theme '_demo' folder

# v0.9.79
## 08/22/2018

1. [](#improved)
    * Moved option for Sidebar Markdown area location to Sidebar page frontmatter

# v0.9.78
## 08/22/2018

1. [](#new)
    * Added location option for Sidebar Markdown area

# v0.9.77
## 08/18/2018

1. [](#improved)
    * Updated theme screenshots

# v0.9.76
## 08/09/2018

1. [](#new)
    * Added multi-language support
1. [](#improved)
    * Updated example pages in theme '_demo' folder

# v0.9.75
## 08/06/2018

1. [](#improved)
    * Updated theme screenshots

# v0.9.74
## 08/05/2018

1. [](#improved)
    * Updated default NavBar (Bootstrap4 Menubar) colour

# v0.9.73
## 08/03/2018

1. [](#bugfix)
    * Restored theme filenames from 'bootstrap4openmatter' to 'bootstrap4-open-matter'

# v0.9.72
## 08/03/2018

1. [](#improved)
    * Updated theme screenshots and blueprint
1. [](#bugfix)
    * Experimental change of theme filenames from 'bootstrap4-open-matter' to 'bootstrap4openmatter' to support PHP class inheritance properly

# v0.9.71
## 07/31/2018

1. [](#improved)
    * Updated Alert modular template
    * Updated example pages in theme '_demo' folder

# v0.9.7
## 07/30/2018

1. [](#new)
    * ChangeLog started...

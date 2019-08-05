---
title: Read Me
published: true
hide_page_title: true
---

## Create, Publish, Share Markdown-based Slides with Grav Presentation Hub!

1. Create a new [Git](https://git-scm.com/) repository (hosted on [GitHub](https://github.com/), [GitLab](https://about.gitlab.com/), [Bitbucket](https://bitbucket.org/) or your own server) with at least one commit.
2. Tap the 'Setup Git Sync' link on the far right of the site navigation bar of this page for step-by-step instructions.
3. Go to the Git Sync Link options in the [Admin Active Theme panel](../../admin/themes/mytheme) to change the display and functionality of the automatically displayed Git Sync Link (including not displaying it).

## Embed Markdown-based Slides into Another Website

View the full-screen version of the slides you want to embed and copy the URL. You can embed these slides into another Website by using an [iframe](https://www.w3schools.com/tags/tag_iframe.asp), for example like this:

```
<iframe src="https://demo.hibbittsdesign.org/grav-open-matter-course-hub/presentations/placeholder-slides" width="800" height="640" allowfullscreen="allowfullscreen"></iframe>
```

Depending on the specifics of the destination Website, a [class](https://www.w3schools.com/html/html_classes.asp) might need to be added to make the slides responsive when viewed on different size screens. For example, if your Website uses the Bootstrap Responsive Framework the iframe code would be:

```
<div class="embed-responsive embed-responsive-4by3"><iframe src="https://demo.hibbittsdesign.org/grav-open-matter-course-hub/presentations/placeholder-slides" width="800" height="640" allowfullscreen="allowfullscreen"></iframe></div>
```

**Example Responsive iFrame Embed**  
<div class="embed-responsive embed-responsive-4by3"><iframe src="https://demo.hibbittsdesign.org/grav-open-matter-course-hub/presentations/placeholder-slides" width="800" height="640" allowfullscreen="allowfullscreen"></iframe></div>

<br>  

## What More can the Presentation Plugin Do?
The [Presentation Plugin](https://github.com/OleVik/grav-plugin-presentation) by [Ole Vik](https://olevik.me) brings the power of the [Reveal.js](https://revealjs.com/#/) presentation framework to [Grav CMS](https://getgrav.org/). You can learn more on the [Presentation Plugin ReadMe](https://github.com/OleVik/grav-plugin-presentation/blob/master/README.md).

<hr>

Want to no longer display this page on your site?  
Delete the page 'Read Me' in your [Admin Pages panel](../../admin/pages) or set the page's 'Published' option under the 'Options' Tab to 'No'.

---
title: Sidebar
routable: false
visible: false
---

## 🚀Getting Started

### Want to create a new Presentation?

1. Go to the Admin [**Pages**](/admin/pages) page
2. Tap the **New Presentation** button
3. Name your new Page and tap **Continue**
5. Tap **Save** and then view your page

To help get you going, the Markdown for a two-slide presentation is included in the new page.

!!! In addition to [Grav Markdown](https://learn.getgrav.org/16/content/markdown) and standard [Presentation Plugin usage](https://github.com/OleVik/grav-plugin-presentation#usage), [Deckset Syntax](https://docs.deckset.com/English.lproj/) commands are available with the pre-installed [Deckset Presentation Plugin](https://github.com/OleVik/grav-plugin-presentation-deckset).

### Want to create a new list of Presentations?

1. Go to the Admin [**Pages**](/admin/pages) page
2. Tap the **New Presentation List** button
3. Name your new list of Presentations and tap **Continue**
4. Tap **Save** and then view your page

To create a Presentation slide deck on your new list of Presentations page choose the name of that page as the **Parent Page** once you tap the **New Presentation** button.

To move an existing Presentation slide deck to another Presentation List, tap the **Move** button when editing a Presentation page and then choose the destination Presentation List.

### Want to embed a Presentation into another Website?

View the full-screen version of the slides you want to embed and copy the URL. You can embed these slides into another Website by using an [iframe](https://www.w3schools.com/tags/tag_iframe.asp), for example like this:

[prism classes="language-html"]
<iframe src="https://demo.hibbittsdesign.org/grav-open-matter-presentation-blog/presentations/placeholder-slides" width="800" height="640" allowfullscreen="allowfullscreen"></iframe>
[/prism]

Depending on the specifics of the destination Website, a [class](https://www.w3schools.com/html/html_classes.asp) might need to be added to make the slides responsive when viewed on different size screens. For example, if your Website uses the Bootstrap Responsive Framework the iframe code would be:

[prism classes="language-html"]
<div class="embed-responsive embed-responsive-4by3"><iframe src="https://demo.hibbittsdesign.org/grav-open-matter-presentation-blog/presentations/placeholder-slides" width="800" height="640" allowfullscreen="allowfullscreen"></iframe></div>
[/prism]

### Want to embed a standard Grav page into another Website?

You can use the `chromeless` URL flag to seamlessly embed the content of a standard Grav page (including one or more Presentations), without the usual site chrome such as the navigation bar, sidebar and footer.

An example chromeless URL would be: [https://demo.hibbittsdesign.org/grav-open-matter-presentation-blog/page-with-presentation/chromeless:true](https://demo.hibbittsdesign.org/grav-open-matter-presentation-blog/page-with-presentation/chromeless:true)

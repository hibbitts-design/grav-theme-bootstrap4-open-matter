/*
Hide sidebar: on wider screens, a button at the top of a module page's sidebar collapses it (the search box and module
list) to just the button, in the same place, so readers can focus on the page, or expands it again. The choice is
remembered in the reader's browser (localStorage) for the whole course site, and applied before the page is drawn (see
templates/partials/module_page.html.twig). Phones keep the module list below the page either way - hibbittsdesign.org
*/
(function () {
    var button = document.querySelector('.module-nav-toggle');
    var column = document.getElementById('module-nav-column');
    if (!button || !column) {
        return;
    }
    var root = document.documentElement;
    var hideLabel = button.querySelector('.module-nav-toggle-hide').textContent.trim();
    var showLabel = button.querySelector('.module-nav-toggle-show').textContent.trim();

    // collapse or expand, tell screen readers whether the sidebar is expanded (aria-expanded), and show the button's
    // name on hover
    function setHidden(hidden) {
        root.classList.toggle('module-nav-hidden', hidden);
        button.setAttribute('aria-expanded', hidden ? 'false' : 'true');
        button.setAttribute('title', hidden ? showLabel : hideLabel);
    }

    setHidden(root.classList.contains('module-nav-hidden'));
    button.hidden = false;

    button.addEventListener('click', function () {
        var hidden = !root.classList.contains('module-nav-hidden');
        setHidden(hidden);
        try {
            localStorage.setItem('om-modules-hidden', hidden ? '1' : '0');
        } catch (error) {
            // without storage the choice still works on this page, it just isn't remembered
        }
    });
})();

/*
Arrow keys: on module pages, ← and → go to the previous and next page (the Previous and Next links below the page),
as in the Open Publishing guide themes and Grav Helios Open Reader – handy when presenting a module by screen sharing.
Embedded pages have no Previous and Next links, so the keys do nothing there - hibbittsdesign.org
*/
(function () {
    document.addEventListener('keydown', function (event) {
        if (event.key !== 'ArrowLeft' && event.key !== 'ArrowRight') {
            return;
        }
        // leave the keys alone with a modifier key held, so browser shortcuts still work
        if (event.altKey || event.ctrlKey || event.metaKey || event.shiftKey) {
            return;
        }
        // and while typing, or in a table or code block, where the arrow keys may scroll it sideways
        var target = event.target;
        if (target.isContentEditable || ['INPUT', 'TEXTAREA', 'SELECT'].indexOf(target.tagName) !== -1) {
            return;
        }
        if (target.closest && target.closest('table, pre')) {
            return;
        }
        // and while an image is shown larger (js/image-zoom.js), where the reader is looking at the image
        if (document.querySelector('dialog[open]')) {
            return;
        }
        var link = document.querySelector(event.key === 'ArrowLeft' ? '.module-prev-next .module-prev' : '.module-prev-next .module-next');
        if (link) {
            window.location.href = link.href;
        }
    });
})();

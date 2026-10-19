var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

jQuery(document).ready(function($){
    // Smooth scroll to start
    $('#to-start').click(function(){
        var start_y = $('.main-content').position().top;
        var header_offset = 0;
        window.scroll({ top: start_y - header_offset, left: 0, behavior: 'smooth' });
        return false;
    });
});

document.querySelectorAll( 'oembed[url]' ).forEach( element => {
    // Create the <a href="..." class="embedly-card"></a> element that Embedly uses
    // to discover the media.
    const anchor = document.createElement( 'a' );

    anchor.setAttribute( 'href', element.getAttribute( 'url' ) );
    anchor.className = 'embedly-card';
    anchor.dataset.cardAlign = 'left';
    anchor.dataset.cardControls = 0;

    element.appendChild( anchor );
} );

// The / key jumps to the course search box, ready to type - as on GitHub and many documentation sites, and as in
// Grav Helios Course Hub. It's left alone while typing (so a / can still be typed) and with Ctrl, Alt or Cmd held; Shift
// is fine, as some keyboards need it to type a / - hibbittsdesign.org
document.addEventListener('keydown', function (event) {
    if (event.key !== '/' || event.ctrlKey || event.altKey || event.metaKey) {
        return;
    }
    var target = event.target;
    if (target.isContentEditable || ['INPUT', 'TEXTAREA', 'SELECT'].indexOf(target.tagName) !== -1) {
        return;
    }
    // the first search box that can be seen (in the sidebar, on a module page, or in the NavBar on a Subsite List
    // page); offsetParent is empty for a box that isn't shown, such as one inside the closed phone menu
    var boxes = document.querySelectorAll('form[role="search"] input[type="search"]');
    for (var i = 0; i < boxes.length; i++) {
        if (boxes[i].offsetParent !== null) {
            // stop the / from being typed into the box
            event.preventDefault();
            boxes[i].focus();
            return;
        }
    }
});

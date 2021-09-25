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

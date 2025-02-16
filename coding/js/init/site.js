// Glightbox
var lastFocusedElement;

const lightbox = GLightbox({
    selector: '.js-lightbox',
    touchNavigation: true,
    autoplayVideos: true,
});

lightbox.on('open', function() {
    lastFocusedElement = document.activeElement;
});

lightbox.on('close', function() {
    if (lastFocusedElement) {
        lastFocusedElement.focus();
    }
});

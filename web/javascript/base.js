$(document).ready(function () {
    // Toggles sticky class (is-sticky) 
    // allowing to stick an element to the top depending on user's scrolling
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop)
        {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        }
        else
        {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };

    // Add the "sticky on scroll" behavior to all elements needing it
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        // Insert an hidden element to maintain actual top offset on page
        var stickyWrapper = $('<div>').addClass('sticky-wrapper');
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Toggle the behavior on scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // Toggle the behavior on page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });
});
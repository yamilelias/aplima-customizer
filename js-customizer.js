/**
 * APLima JS Customizer
 */

/*
 * Set the sidebar menu to a certain height depending on the position of the page
 */
jQuery(document).scroll(function () {
    var pos = jQuery(window).scrollTop();

    // If it already passed the title, then put it in the top
    if (pos > 350) {
        jQuery("#nav_menu-3").animate({
            'top': '5em'
        }, 100);
    }
    // If it came back, return it so it won't crash with title!
    else {
        jQuery("#nav_menu-3").animate({
            'top': '25em'
        }, 100);
    }
});
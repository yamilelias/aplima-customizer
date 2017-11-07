/**
 * APLima JS Customizer
 */

/*
 * Set the sidebar menu to a certain height depending on the position of the page
 */

// If it already passed the title, then put it in the top
jQuery(document).scroll(function () {
    var pos = jQuery(window).scrollTop();
    console.log(pos);
    // if (pos == 0) {
    //     alert('top of the div');
    // }

    if (pos > 350) {
        jQuery("#nav_menu-3").animate({
            'top': '5em'
        }, 100);
    } else {
        jQuery("#nav_menu-3").animate({
            'top': '25em'
        }, 100);
    }
});

// If it returns to the top, then move the menu a little bit
// jQuery(document).scroll(function () {
//         if (jQuery(window).height() + jQuery(this).scrollTop() < 1200) {
//         jQuery("#nav_menu-3").animate({
//             'top': '25em'
//         }, 1500);
//     }
// });

// jQuery('#nav_menu-3').scroll(function() {
//     var pos = jQuery('#my_div').scrollTop();
//     console.log(pos);
//     if (pos == 0) {
//         alert('top of the div');
//     }
// });
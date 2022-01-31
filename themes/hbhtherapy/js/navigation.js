/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
/* Open when someone clicks on the span element */

//Show/Hide Description ->homepage services
function showOverlay(x) {
    x.style.opacity = "1";
    x.style.transition = ".5s ease";
}

function hideOverlay(x) {
    x.style.opacity = "0";
    x.style.transition = "1s ease";
}

function showDes(x) {
    x.style.opacity = "1";
    x.style.transition = "1s ease";
}

function hideDes(x) {
    x.style.opacity = "0";
    x.style.transition = ".5s ease";
}

function showModes(x) {
    if (x.style.maxHeight === "600px") {
        x.style.maxHeight = "0px";
        x.style.borderWidth = "0px";
        x.style.transition = "0s ease";

    } else {
        x.style.maxHeight = "600px";
        x.style.borderWidth = "1px";
        x.style.transition = "1s ease";
    }
}

//Owl Slider ->homepage testimonials
jQuery(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        //autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
});
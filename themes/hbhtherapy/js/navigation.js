/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
/* Nav Toggle */
function navToggle() {
        var x = document.getElementById("menu");
        var y = document.getElementById("menu-content");
        if (x.style.width === "100vw") {
            x.style.width = "0px";
            x.style.opacity = "0";
            y.style.opacity = "0";
            y. style.transitionDelay = "0s"
        } else {
            x.style.width = "100vw";
            x.style.opacity = "1";
            y.style.opacity = "1";
            y. style.transitionDelay = ".3s"
        }
    }

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
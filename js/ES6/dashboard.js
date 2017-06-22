import * as h from './helpers';

// View Logs Event Listener
document.querySelector(".view-logs").addEventListener("click", function() {
    const element = document.querySelector("aside.right-side");
    h.addClass(element, "visible");
});

document.querySelector(".close-menu").addEventListener("click", function() {
    const element = document.querySelector("aside.right-side");
    h.removeClass(element, "visible");
});

const navBarToggle = document.querySelector(".navbar-toggle");
navBarToggle.addEventListener("click", showNavigation, false);

function showNavigation() {
    const element = document.querySelector("aside.left-side");
    h.addClass(element, "visible");


    // When showing navigation, make body mouseup event.
    const body = document.body;
    body.addEventListener("mouseup", hideNavigation, false);
}

function hideNavigation(e) {
    const container = document.querySelector("aside.left-side");

    if (!Object.is(container, e.target) && !container.contains(e.target)) {
        h.removeClass(container, "visible");

        const body = document.body;
        body.removeEventListener("mouseup", hideNavigation, false);
    }
}

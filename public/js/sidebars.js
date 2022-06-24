/* global bootstrap: false */
(function () {
    "use strict";
    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    tooltipTriggerList.forEach(function (tooltipTriggerEl) {
        new bootstrap.Tooltip(tooltipTriggerEl);
    });
})();

var pathname = window.location.pathname;

var navdashboard = document.getElementById("navdashboard");
var navcategorias = document.getElementById("navcategorias");

if ((pathname == '/dashboard')) {
    navdashboard.classList.add("active");
    navdashboard.classList.remove("link-dark");

} else {
    if ((pathname = '/membresia')) {
        navcategorias.classList.add("active");
        navcategorias.classList.remove("link-dark");
    }
}

// script.js

document.addEventListener("DOMContentLoaded", function () {
  var links = document.querySelectorAll(".nav-link");
  var currentLocation = window.location.href;

  links.forEach(function (link) {
    if (currentLocation.includes(link.getAttribute("href"))) {
      link.classList.add("active");
    }

    link.addEventListener("click", function () {
      links.forEach(function (link) {
        link.classList.remove("active");
      });
      this.classList.add("active");
    });
  });
});

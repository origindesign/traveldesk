/**
 * Splide.js - custom.
 */
(function () {
  document.addEventListener("DOMContentLoaded", (event) => {
    // insert splide before here.
    const parentElement = document.querySelector(".splide");
    const newChild = document.createElement("p");
    newChild.classList.add("splide-pagination-custom");

    parentElement.insertBefore(newChild, parentElement.firstChild);

    setTimeout(function () {
      var el = document.querySelector(".splide__slide.is-active");
      document.querySelector(".splide-pagination-custom").innerHTML =
        el.ariaLabel.replace("of", "/");
    }, 50);

    // select the target node
    var target = document.querySelector(".splide__track");

    // create an observer instance
    var observer = new MutationObserver(function (mutations) {
      mutations.forEach(function (mutation) {
        var el = document.querySelector(".splide__slide.is-active");
        document.querySelector(".splide-pagination-custom").innerHTML =
          el.ariaLabel.replace("of", "/");
      });
    });

    // configuration of the observer:
    var config = { childList: true, subtree: true };

    // pass in the target node, as well as the observer options
    observer.observe(target, config);
  });
})();

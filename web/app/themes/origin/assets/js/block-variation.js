/*
 * Fade in UI element
 */
function elementFadeIn() {
  var reveals = document.querySelectorAll(".fade-in");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
  }
}
window.addEventListener("scroll", elementFadeIn);
elementFadeIn();

// Scroll position - navigation use-case.
var lastScrollTop = 0;

window.addEventListener(
  "scroll",
  function () {
    const currentScroll = window.scrollY;
    var scrollTop = currentScroll || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop && currentScroll >= 100) {
      document.body.classList.add("hide-nav");
    } else if (scrollTop < lastScrollTop) {
      document.body.classList.remove("hide-nav");
    }
    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
  },
  false,
);

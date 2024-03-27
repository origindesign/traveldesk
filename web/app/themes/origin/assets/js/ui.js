/*
 * Fade in UI element.
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

// Scroll position - navigation use-case.
var lastScrollTop = 0;

/*
 * Navigation bar display UI.
 */
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

/*
 * Yoast FAQ https://yoast.com/developer-blog/theming-gutenberg-the-faq-block/ - Block UI functionality.
 */
function yoastFAQUI() {
  const yoastBlock = document.querySelectorAll(".schema-faq-section");

  if (!yoastBlock) return;

  yoastBlock.forEach(function (el) {
    el.addEventListener("click", function () {
      el.classList.toggle("in");

      let yoastAnswer = el.querySelector(".schema-faq-answer");

      yoastAnswer.style.maxHeight
        ? (yoastAnswer.style.maxHeight = null)
        : (yoastAnswer.style.maxHeight = yoastAnswer.scrollHeight * 3 + "px");
    });
  });
}

/*
 * Client logo horixontal scroll - https://scrollmagic.io
 */
function clientScroll() {
  if (document.querySelector(".clients-internal")) {
    let clientController = new ScrollMagic.Controller();
    let clientTrigger = document.querySelector(".clients-internal");
    let offset = clientTrigger.clientWidth;
    console.log(offset);

    let clientTween = new TweenMax(clientTrigger, 1, {
      css: { transform: "translate3d(-" + offset / 2 + "px, 0, 0)" },
      ease: Linear.easeNone,
    });

    new ScrollMagic.Scene({
      triggerElement: clientTrigger,
      triggerHook: "onEnter",
      offset: 40,
      duration: "150%",
    })
      .setTween(clientTween)
      .addTo(clientController);
  }
}

/*
 * Sequentially run our on-load functions.
 */
(function () {
  elementFadeIn();
  yoastFAQUI();
  clientScroll();
})();

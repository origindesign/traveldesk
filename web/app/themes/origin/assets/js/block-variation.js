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

// todo
(function () {
  const a = document.querySelectorAll(".schema-faq-section");

  if (!a) return;

  a.forEach(function (a) {
    a.addEventListener("click", function () {
      a.classList.toggle("in");

      let b = a.querySelector(".schema-faq-answer");

      b.style.maxHeight
        ? (b.style.maxHeight = null)
        : (b.style.maxHeight = b.scrollHeight * 3 + "px");
    });
  });

  // const b = document.querySelectorAll(".faq-section h3");
  // if (!b) return;
  // b.forEach(function (a) {
  //   a.addEventListener("click", function () {
  //     a.closest(".faq-section").classList.toggle("in");
  //   });
  // });
})();

(function () {
  console.log(2344);
  // var splide = new Splide(".splide").mount();
  // splide.on("move", function () {
  //   // do something
  //   console.log("meow");
  // });

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
        console.log(mutation.type);
        // var el = document.querySelector(".splide__slide.is-active");
        // console.log(el.ariaLabel, 999);
        // setTimeout(function () {
        //   var el = document.querySelector(".splide__slide.is-active");
        //   document.querySelector(".splide-pagination-custom").innerHTML =
        //     el.ariaLabel;
        // }, 50);
        // var el = document.querySelector(".splide__slide.is-active");
        // document.querySelector(".splide-pagination-custom").innerHTML =
        //   el.ariaLabel;
        // var el = document.querySelector(".splide__slide.is-active");
        // document.querySelector(".splide-pagination-custom").innerHTML =
        //   el.ariaLabel;

        var el = document.querySelector(".splide__slide.is-active");
        document.querySelector(".splide-pagination-custom").innerHTML =
          el.ariaLabel.replace("of", "/");
      });

      // var el = document.querySelector(".splide__slide.is-active");
      // document.querySelector(".splide-pagination-custom").innerHTML =
      //   el.ariaLabel;
    });

    // configuration of the observer:
    var config = { childList: true, subtree: true };

    // pass in the target node, as well as the observer options
    observer.observe(target, config);
  });
})();

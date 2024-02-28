// const { registerFormatType, toggleFormat } = require("@wordpress/rich-text");
// const { RichTextToolbarButton } = require("@wordpress/block-editor");

// const TextShadowFormatter = (props) => {
//   const value = props.value;
//   const onChange = props.onChange;
//   const isActive = props.isActive;

//   return (
//     <RichTextToolbarButton
//       title="Graphic underline"
//       onClick={() => {
//         /**
//          * toggleFormat accepts 2 arguments:
//          * RichTextValue: value
//          * RichTextFormat: format
//          */
//         const toggledFormat = toggleFormat(value, {
//           type: "indigotree/graphic-underline",
//         });

//         onChange(toggledFormat);
//       }}
//       isActive={isActive}
//     />
//   );
// };

// registerFormatType("indigotree/graphic-underline", {
//   title: "Graphic underline",
//   tagName: "span",
//   className: "indigotree-graphic-underline",
//   edit: TextShadowFormatter,
// });

function reveal() {
  var reveals = document.querySelectorAll(".fade-in");
  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;
    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    }
    // else { // only run once
    //   reveals[i].classList.remove("active");
    // }
  }
}

window.addEventListener("scroll", reveal);

// To check the scroll position on page load
reveal();

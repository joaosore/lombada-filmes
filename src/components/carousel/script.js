import "owl.carousel";

async function init_carousel() {
  $(".owl-carousel").owlCarousel({
    loop: false,
    margin: 10,
    nav: false,
    dots: true,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 3,
      },
    },
  });
}

$(document).ready(function () {
  init_carousel();
});

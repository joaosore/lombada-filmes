export default function init_header() {
  console.log("Init Header");
  $(document).on("click", ".menu-mobile", function () {
    if ($(this).hasClass("close")) {
      $(this).removeClass("close");
      $(".container-menu-mobile").removeClass("open");
    } else {
      $(this).addClass("close");
      $(".container-menu-mobile").addClass("open");
    }
  });
}

init_header();

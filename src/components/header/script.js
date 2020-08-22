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

  var $doc = $("html, body");

  $(document).on("click", "a", function () {
    var item = $.attr(this, "href").replace("#", ".");
    console.log(item);
    if (item !== ".") {
      if ($("body").find(item).length > 0) {
        $doc.animate(
          {
            scrollTop: $(item).offset().top - 140,
          },
          500
        );

        setTimeout(() => {
          if ($(window).scrollTop() < $(item).offset().top - 140) {
            $doc.animate(
              {
                scrollTop: $(item).offset().top - 140,
              },
              500
            );
          }
        }, 550);
        return false;
      }
    }
  });

  window.addEventListener("load", function () {
    if (document.location.hash.length !== 0) {
      var hash = document.location.hash.replace("#", ".");

      if ($("body").find(hash).length > 0) {
        $doc.animate(
          {
            scrollTop: $(hash).offset().top - 140,
          },
          500
        );
        setTimeout(() => {
          if ($(window).scrollTop() < $(hash).offset().top - 80) {
            $doc.animate(
              {
                scrollTop: $(hash).offset().top - 80,
              },
              500
            );
          }
        }, 550);
      }
    }
  });
}

init_header();

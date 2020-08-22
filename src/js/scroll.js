export function scroll() {
  $(window).on("scroll", function() {
    var scrollPosition = $(window).scrollTop();
    if(scrollPosition > 100) {
      $('.box-logo').addClass('minify');
    } else {
      $('.box-logo').removeClass('minify');
    }
  });
  
}
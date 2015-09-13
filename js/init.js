jQuery(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 50) {
      $('#logo-image').attr('src', '/img/flip-campbell-logo-small.png');
      $("nav").addClass("padding-on-my-header");
  }
  if (scroll < 50) {
      $("nav").removeClass("padding-on-my-header");
      $('#logo-image').attr('src', '/img/flip-campbell-logo.png');
  }
});

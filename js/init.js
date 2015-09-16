jQuery(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 50) {
      $('#logo-image').removeClass('logo-image-big', 'logo-margin').addClass('logo-image-small', 'logo-margin-small');
      $("nav").addClass("padding-on-my-header");
  }
  if (scroll < 50) {
      $("nav").removeClass("padding-on-my-header");
      $('#logo-image').removeClass('logo-image-small', 'logo-margin-small').addClass('logo-image-big', 'logo-margin');
  }
});

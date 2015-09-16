jQuery(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll >= 50) {
      $('#logo-image').removeClass('logo-image-big', 'logo-margin').addClass('logo-image-small', 'logo-margin-small');
      $("nav").addClass("padding-on-my-header");
      // $(".top-bar ul.title-area div").css({"margin-top": "0"});
  }
  // if (scroll >= 50 && $(window).width < 640) {
  //   $('#logo-image').attr('src', '/img/flip-campbell-logo-small.png');
  // }
  if (scroll < 50) {
      $("nav").removeClass("padding-on-my-header");
      $('#logo-image').removeClass('logo-image-small', 'logo-margin-small').addClass('logo-image-big', 'logo-margin');
      // $(".top-bar ul.title-area div").css({"margin-top": "-25"});
  }
  // if (scroll < 50 || $(window).width >= 640) {
  //   $('#logo-image').attr('src', '/img/flip-campbell-logo.png');
  // }
});
//
// $(function() {
//   var scroll = $(window).scrollTop();
//   if($(window).width() < 640 && scroll >= 50) {
//     $('#logo-image').attr('src', '/img/flip-campbell-logo-small.png');
//   }
// });
//
// $(window).resize(function() {
//   if($(window).width() < 640) {
//      $('#logo-image').attr('src','/img/flip-campbell-logo-small.png');
//   }
//   if($(window).width() >= 640) {
//      $('#logo-image').attr('src','/img/flip-campbell-logo.png');
//   }
// });

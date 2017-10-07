$(document).ready(function(){
  $(window).scroll(function(event) {
  Scroll();
});
  $(".owl-carousel").owlCarousel({
  items : 1,
  slideSpeed : 100,
  smartSpeed:450,
  nav: true,
  autoplay: true,
  loop: true,
  dots:false,
  animateOut: 'fadeOut',
  responsiveRefreshRate : 200,
  navText: [
  "<i class='fa fa-angle-left'></i>",
  "<i class='fa fa-angle-right'></i>"
  ],
});
});

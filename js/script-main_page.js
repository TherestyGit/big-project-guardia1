$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $(".dropdown-trigger").dropdown({ hover: true, coverTrigger: false });
  $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true
  });
  $('.modal').modal();
});

new WOW().init();


// Caroussel //

setInterval(function() {
$('.carousel').carousel('next');
}, 4000);
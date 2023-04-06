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

$('.carousel.carousel-slider').carousel({
  fullWidth: true,
  indicators: true
});

function autoplay() {
  $('.carousel').carousel('next');
  setTimeout(autoplay, 3000);
}


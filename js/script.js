$(document).ready(function(){
  $('.sidenav').sidenav();
  $('.parallax').parallax();
  $(".dropdown-trigger").dropdown({ hover: true, coverTrigger: false});
});

new WOW().init();

var typed = new Typed('#typed-header', {
  strings: ["Web developpeur.", "Administrateur Réseau.", "Architecte Réseau.", "Moi-Même."],
  typeSpeed: 50,
  backSpeed: 50,
  startDelay: 1000,
  backDelay: 2000,
  loop: true
});

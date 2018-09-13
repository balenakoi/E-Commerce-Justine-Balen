var toggleMenu = document.querySelector('.toggleMenu');
var nav = document.querySelector('.nav');
var overlay = document.querySelector('.overlay');
var header = document.getElementsByTagName('header')[0];
var containerNav = document.querySelector('.nav-container');
var navBar = document.querySelector('.navbar');



$(window).ready(function() {

  //on click that display menu mobile version
  toggleMenu.addEventListener('click', showNav);

  function showNav() {

    nav.classList.toggle('show');
    overlay.classList.toggle('showOverlay');

  }

  //when it scroll header began fix
  $(window).scroll(function() {
     var scroll = $(window).scrollTop();

     if (scroll >= 100) {

      header.style.position = "fixed";
      containerNav.style.height = "80px";
      header.style.width = "100%";
      header.style.zIndex = "1";
      navBar.style.padding = "1rem";

    } else if (scroll < 100) {
      header.style.position = "initial";
      containerNav.style.height = "auto";
      header.style.width = "100%";
      navBar.style.padding = "2rem";
    }
  });

})

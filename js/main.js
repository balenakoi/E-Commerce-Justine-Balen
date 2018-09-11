var toggleMenu = document.querySelector('.toggleMenu');
var nav = document.querySelector('.nav');
var overlay = document.querySelector('.overlay');


toggleMenu.addEventListener('click', showNav);

function showNav() {
  nav.classList.toggle('show');
  overlay.classList.toggle('showOverlay');

}

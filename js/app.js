/* Slick Carousel Config
   ========================================================================== */

$(document).ready(function(){
    $('.carousel').slick({
      arrows : false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 5000,
      speed: 275
    });
});


/* Toggle Side Menu
   ========================================================================== */

const content = document.getElementById("js-content");
const overlay = document.getElementById("js-overlay");
const burger = document.getElementById("js-burger");
const sideMenu = document.getElementById("js-sidebar");

let sideMenuVisible = false;

// Toggle side menu when burger button pressed.
$(document).ready(function() {
  $(burger).on('click', function() {
    toggleSideMenu();
  });
});

function toggleSideMenu() {

  sideMenuVisible = !sideMenuVisible;

  // Animate burger button.
  $(burger).toggleClass('active');
  
  // Change width and visibility of side menu.
  sideMenu.style.visibility = sideMenuVisible ? "visible" : "hidden";
  sideMenu.style.width = sideMenuVisible ? "240px" : "0"

  // Move page contents.
  content.classList.toggle('active');

  // Add or remove overlay from page contents.
  overlay.style.display = sideMenuVisible ? "block" : "none";
}

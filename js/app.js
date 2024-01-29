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
const sidebar = document.getElementById("js-sidebar");

let sidebarVisible = false;

// Toggle sidebar when burger button pressed.
$(document).ready(function() {
  $(burger).on('click', function() {
    toggleSidebar();
  });
});

function toggleSidebar() {

  sidebarVisible = !sidebarVisible;

  // Animate burger button.
  $(burger).toggleClass('active');
  
  // Change visibility of sidebar.
  sidebar.style.visibility = sidebarVisible ? "visible" : "hidden";

  // Move page contents.
  content.classList.toggle('active');

  // Add or remove overlay from page contents.
  overlay.style.display = sidebarVisible ? "block" : "none";
}

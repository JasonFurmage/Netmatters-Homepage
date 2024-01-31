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


/* Sticky Header
   ========================================================================== */

let contentWrapper = document.getElementById('js-content-wrapper');
let originalHeader = document.getElementById('js-header');
let clonedHeader = originalHeader.cloneNode(true); // Clone header.
clonedHeader.id = 'js-sticky-header'; // Change id to prevent conflict.

let lastScrollTop = 0;
let scrollTimer;

contentWrapper.addEventListener('scroll', function() {

  // Get scroll bar position.
  let scrollTop = contentWrapper.scrollTop; 

  clearTimeout(scrollTimer);

  if (scrollTop > lastScrollTop) { // Scrolling down...

    clonedHeader.style.transform = 'translateY(0)'; // Hide cloned header with animation when scrolling down.

    // Remove cloned header from content wrapper.
    scrollTimer = setTimeout(function() {
      if (contentWrapper.contains(clonedHeader)) { contentWrapper.removeChild(clonedHeader); }
    }, 200);

  } else if (scrollTop > originalHeader.clientHeight) { // Scrolling up whilst below original header.

    // Add cloned header to content wrapper.
    if (!contentWrapper.contains(clonedHeader)) { contentWrapper.appendChild(clonedHeader); }

    // Show cloned header with animation.
      scrollTimer = setTimeout(function() {
        clonedHeader.style.transform = 'translateY(209px)';
        clonedHeader.style.opacity = '1';
      }, 200);

    } if (scrollTop === 0) { // Scroll bar at top of the page.

      clonedHeader.style.opacity = '0'; // Hide cloned header immediately without animation.

      // Remove cloned header from content wrapper.
      scrollTimer = setTimeout(function() {
        if (contentWrapper.contains(clonedHeader)) { contentWrapper.removeChild(clonedHeader); }
      }, 200);
  }

  lastScrollTop = scrollTop;

});


/* Toggle Side Menu
   ========================================================================== */

const content = document.getElementById("js-content");
const overlay = document.getElementById("js-overlay");
const burger = document.getElementById("js-burger");
const sidebar = document.getElementById("js-sidebar");

// Get cloned burger so we can animate when clicked.
const clonedBurger = clonedHeader.querySelector('#js-burger');

let sidebarVisible = false;

// Toggle sidebar when burger button pressed.
$(document).ready(function() {
  $(document).on('click', '.burger-button', function() {
    toggleSidebar();
  });
});

function toggleSidebar() {

  sidebarVisible = !sidebarVisible;

  // Animate burger button.
  $(burger).add(clonedBurger).toggleClass('active');

  // Move page contents.
  content.classList.toggle('active');

  // Add or remove overlay from page contents.
  overlay.style.display = sidebarVisible ? "block" : "none";
}

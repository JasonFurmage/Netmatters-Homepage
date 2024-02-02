/* Cookies Popup
   ========================================================================== */

const cookiesOverlay = document.getElementById('js-cookies-overlay');
const didSetCookies = localStorage.getItem("didSetCookies");

// Show cookies popup if preference has not been set.
if (didSetCookies === null ) {
  showCookiesPopup();
}

// Set cookies preference and remove overlay.
function setCookiesPreference () {
  localStorage.setItem("didSetCookies", true);
  cookiesOverlay.style.display = 'none';
}

function showCookiesPopup() {
  cookiesOverlay.style.display = 'flex';
}


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

function initializeSlickCarousel(selector) {
  $(selector).slick({
    autoplay: true,
    autoplaySpeed: 3500,
    speed: 250,
    variableWidth: true,
    draggable: false,
    swipe: false
  });
}

// Call the function for carousel2
initializeSlickCarousel('.carousel2');

// Call the function for carousel3
initializeSlickCarousel('.carousel3');


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

    clonedHeader.style.transform = 'translateY(-100%)'; // Hide cloned header with animation when scrolling down.

    // Remove cloned header from content wrapper.
    scrollTimer = setTimeout(function() {
      if (contentWrapper.contains(clonedHeader)) { contentWrapper.removeChild(clonedHeader); }
    }, 200);

  } else if (scrollTop > originalHeader.clientHeight) { // Scrolling up whilst below original header.

    // Add cloned header to content wrapper.
    if (!contentWrapper.contains(clonedHeader)) { 
      contentWrapper.appendChild(clonedHeader);

      // Subtract scroll bar width from cloned header width to prevent cloned header from overlapping scrollbar.
      clonedHeader.style.width = `calc(100% - ${getScrollBarWidth()}px)`;
    }

    // Show cloned header with animation.
      scrollTimer = setTimeout(function() {
        clonedHeader.style.transform = 'translateY(0)';
        clonedHeader.style.opacity = '1';
      }, 200);

    } if (scrollTop < 1) { // Scroll bar at top of the page.

      clonedHeader.style.opacity = '0'; // Hide cloned header immediately without animation.

      // Remove cloned header from content wrapper.
      scrollTimer = setTimeout(function() {
        if (contentWrapper.contains(clonedHeader)) { contentWrapper.removeChild(clonedHeader); }
      }, 200);
  }

  lastScrollTop = scrollTop;
});

// Get scroll bar width (will be 0 if there is no scroll bar).
function getScrollBarWidth () {
  var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body'),
      widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
  $outer.remove();
  return 100 - widthWithScroll;
};


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

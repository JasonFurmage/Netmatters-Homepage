const contentWrapper = document.getElementById('js-content-wrapper');
const originalHeader = document.getElementById('js-header');
const clonedHeader = originalHeader.cloneNode(true); // Clone header.
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
  var $outer = $('<div>').css({visibility: 'hidden', width: 100, overflow: 'scroll'}).appendTo('body');
  var $widthWithScroll = $('<div>').css({width: '100%'}).appendTo($outer).outerWidth();
  $outer.remove();
  return 100 - $widthWithScroll;
};

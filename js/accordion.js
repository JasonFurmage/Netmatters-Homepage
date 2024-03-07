const accordion = document.getElementById('js-accordion');
const panel = document.getElementById('js-panel');

// Add event listener to accordion element so we can hide or reveal text when clicked.
accordion.addEventListener("click", function() {
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
});

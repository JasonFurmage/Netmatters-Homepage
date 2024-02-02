const content = document.getElementById("js-content");
const overlay = document.getElementById("js-overlay");

let sidebarVisible = false;

// Toggle sidebar when burger button pressed.
$(document).ready(function() {
  $(document).on('click', '.burger-button', function() {
    toggleSidebar();
  });
});

function toggleSidebar() {

  sidebarVisible = !sidebarVisible;

  // Animate burger buttons.
  document.querySelectorAll('.burger-button').forEach(button => button.classList.toggle('active'));

  // Move page contents.
  content.classList.toggle('active');

  // Add or remove overlay from page contents.
  overlay.style.display = sidebarVisible ? "block" : "none";
}

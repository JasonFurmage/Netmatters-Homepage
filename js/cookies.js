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

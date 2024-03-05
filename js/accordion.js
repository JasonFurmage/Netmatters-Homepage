const accordion = document.getElementById('js-accordion');
const panel = document.getElementById('js-panel');

accordion.addEventListener("click", function() {
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
});

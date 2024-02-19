function animateProgressBar(selector) {
  var counter = 0;
  window.addEventListener("DOMContentLoaded", move = () => {
    if (counter === 0) {
      var elem = document.querySelector(selector);
      var width = 0;
      // Get the data-done attribute value and convert it to a number
      var j = parseInt(elem.getAttribute("data-done"), 10) || 0;

      var main = setInterval(frame, 0);

      function frame() {
        if (width >= j) {
          clearInterval(main);
        } else {
          width++;
          elem.style.width = width + "%";
          elem.innerHTML = width + "%";
        }
      }
    }
  });
}

animateProgressBar(".progress-done");
animateProgressBar(".progress-done2");
animateProgressBar(".progress-done3");
animateProgressBar(".progress-done4");
animateProgressBar(".progress-done5");


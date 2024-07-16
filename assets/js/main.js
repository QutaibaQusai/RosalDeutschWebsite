AOS.init();

var movingImage = document.getElementById('movingImage');
    var container = document.querySelector('.Home-firstSec');

    container.addEventListener('mousemove', function (event) {
        var mouseX = event.clientX / container.offsetWidth - 0.5;
        var mouseY = event.clientY / container.offsetHeight - 0.5;

        movingImage.style.transform = 'translate(' + mouseX * 50 + 'px, ' + mouseY * 50 + 'px)';
    });

    container.addEventListener('mouseout', function () {
        movingImage.style.transform = 'translate(0, 0)';
    });

    document.addEventListener("DOMContentLoaded", function() {
        var backToTopButton = document.getElementById('back-to-top');
  
    })


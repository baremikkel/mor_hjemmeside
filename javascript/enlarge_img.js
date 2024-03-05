document.addEventListener("DOMContentLoaded", function() {
    var images = document.querySelectorAll('#clickable');
    var overlay = document.getElementById('overlay');
  
    images.forEach(function(image) {
      image.addEventListener('click', function(event) {
        var clickedImage = event.target;
  
        // Toggle the 'enlarged' class for the clicked image
        clickedImage.classList.toggle('enlarged');
        overlay.style.display = clickedImage.classList.contains('enlarged') ? 'block' : 'none';
  
        // Remove the 'enlarged' class from other images if present
        images.forEach(function(img) {
          if (img !== clickedImage) {
            img.classList.remove('enlarged');
          }
        });
      });
    });
  });
  
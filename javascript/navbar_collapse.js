document.getElementById('menu-toggle').addEventListener('change', function() {
  const navBar = document.getElementById('nav-bar');
  if (this.checked) {
    navBar.style.left = '0';
    navBar.style.boxShadow = '5px 0px 4px 0px rgba(0, 0, 0, 0.5)';
  } else {
    navBar.style.left = '-250px';
  }
});

document.addEventListener("click", function(event) {
  const navBar = document.getElementById('nav-bar');
  if (!event.target.closest("#nav-bar") && navBar.style.left !== '-250px') {
    navBar.style.left = '-250px';
  }
});

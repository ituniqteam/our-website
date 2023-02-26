const anchorLinks = document.querySelectorAll('a[href^="#"]');
anchorLinks.forEach(function(anchorLink) {
  anchorLink.addEventListener('click', function(e) {
    e.preventDefault();
    const targetId = anchorLink.getAttribute('href').substr(1);
    const targetElement = document.getElementById(targetId);
    if (targetElement) {
      targetElement.scrollIntoView({ behavior: 'smooth' });
    }
  });
});

// shrink header khi cuộn
window.addEventListener('scroll', function() {
  const header = document.querySelector('.main-header');
  const backToTop = document.getElementById('back-to-top');
  if (window.scrollY > 50) {
    header.classList.add('shrink');
    backToTop.style.display = 'block';
  } else {
    header.classList.remove('shrink');
    backToTop.style.display = 'none';
  }
});

// scroll lên đầu trang
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: 'smooth' });
}
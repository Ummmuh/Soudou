let slideIndex = 0;
const slides = document.querySelectorAll('.slide');

function showSlides() {
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });
  
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1;
  }
  
  slides[slideIndex - 1].classList.add('active');
  setTimeout(showSlides, 3000); // Changement de slide toutes les 3 secondes
}

showSlides();

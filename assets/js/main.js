let currentSlide = 0;
const slider = document.getElementById('testimonialSlider');
const dots = document.querySelectorAll('.dot');

if (slider) {
    const totalSlides = slider.children.length;

    setInterval(() => {
        currentSlide = (currentSlide + 1) % totalSlides;
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;

        dots.forEach((dot, index) => {
            dot.classList.toggle('bg-yellow-500', index === currentSlide);
            dot.classList.toggle('bg-gray-600', index !== currentSlide);
        });
    }, 4000);
}


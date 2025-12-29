    let currentSlide = 0;
    const slides = document.querySelectorAll('.carousel-slide');
        const dots = document.querySelectorAll('.dot');
        let autoplayInterval;

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            dots.forEach(dot => dot.classList.remove('active'));
            
            if (n >= slides.length) currentSlide = 0;
            if (n < 0) currentSlide = slides.length - 1;
            
            slides[currentSlide].classList.add('active');
            dots[currentSlide].classList.add('active');
        }

        function nextSlide() {
            currentSlide++;
            showSlide(currentSlide);
            resetAutoplay();
        }

        function prevSlide() {
            currentSlide--;
            showSlide(currentSlide);
            resetAutoplay();
        }

        function goToSlide(n) {
            currentSlide = n;
            showSlide(currentSlide);
            resetAutoplay();
        }

        function startAutoplay() {
            autoplayInterval = setInterval(() => {
                currentSlide++;
                showSlide(currentSlide);
            }, 5000);
        }

        function resetAutoplay() {
            clearInterval(autoplayInterval);
            startAutoplay();
        }

        startAutoplay();
    
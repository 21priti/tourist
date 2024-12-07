const slider = document.querySelector(".slider");
        const slides = document.querySelectorAll(".container-fluid");
        let currentIndex = 0;

        function slideNext() {
            const offset = -(currentIndex * 100); // Shift to the next slide
            slider.style.transform = `translateX(${offset}%)`;

            // Move to the next slide, loop back at the end
            //
            currentIndex = (currentIndex + 1) % (slides.length-1);
        }

        // Start auto-slide
        setInterval(slideNext, 3000); // Change slide every 3 seconds
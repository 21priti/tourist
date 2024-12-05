const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".container-fluid");
let currentIndex = 0;

function slideNext() {
// Calculate the new translateX value
    const offset = -(currentIndex * 100);
    slider.style.transform = `translateX(${offset}%)`;

    // Move to the next slide, loop back if at the end
    currentIndex = (currentIndex + 1) % (slides.length-1);
}

// Start the sliding effect with a time interval
setInterval(slideNext, 3000); // Change slide every 3 seconds
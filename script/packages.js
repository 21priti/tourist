// Function to update the details section
function showDetails(title, image, description) {
    document.getElementById('details-title').innerText = title;
    document.getElementById('details-image').src = image;
    document.getElementById('details-description').innerText = description;
}

// Function to update the Add to Cart section
function updateCartSection(title, description) {
    document.getElementById('cart-title').innerText = `Add to Cart: ${title}`;
    document.getElementById('cart-description').innerText = description;
}

// Update active circle based on scroll
function updateActiveDetails() {
    const flowchart = document.getElementById('flowchart');
    const circles = Array.from(flowchart.getElementsByClassName('circle'));
    const flowchartRect = flowchart.getBoundingClientRect();

    let centerCircle = null;
    let minDistance = Infinity;

    circles.forEach(circle => {
        const rect = circle.getBoundingClientRect();
        const distance = Math.abs(rect.top + rect.height / 2 - flowchartRect.top - flowchartRect.height / 2);

        if (distance < minDistance) {
            minDistance = distance;
            centerCircle = circle;
        }
    });

    if (centerCircle) {
        circles.forEach(circle => circle.classList.remove('active'));
        centerCircle.classList.add('active');
        const title = centerCircle.dataset.title;
        const image = centerCircle.dataset.image;
        const description = centerCircle.dataset.description;

        showDetails(title, image, description);
        updateCartSection(title, description);
    }
}

// Add click functionality to each circle
const circles = document.querySelectorAll('.circle');
circles.forEach(circle => {
    circle.addEventListener('click', () => {
        circles.forEach(c => c.classList.remove('active'));
        circle.classList.add('active');
        const title = circle.dataset.title;
        const image = circle.dataset.image;
        const description = circle.dataset.description;

        showDetails(title, image, description);
        updateCartSection(title, description);
    });
});

// Attach scroll listener to flowchart
document.getElementById('flowchart').addEventListener('scroll', updateActiveDetails);

// Initialize with the first circle active
updateActiveDetails();

// Add to Cart button functionality
document.getElementById('add-to-cart-btn').addEventListener('click', () => {
    const title = document.getElementById('details-title').innerText;
    alert(`${title} has been added to your cart!`);
});
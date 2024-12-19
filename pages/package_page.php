<?php include_once "navbar.php"; ?>
<?php
// Include database connection
require_once '../databasefunction/dbconnect.php';
global $conn;

// Fetch the package ID and name
$packageName = $_GET['pid']; // Assuming pname is passed in the URL

// Fetch package details (name, price, descriptions)
$packageQuery = "SELECT name, price, des1, des2, des3 FROM package WHERE package_id = ?";
$packageStmt = $conn->prepare($packageQuery);
$packageStmt->bind_param('s', $packageName);
$packageStmt->execute();
$packageResult = $packageStmt->get_result();

$packageDetails = [];
if ($packageResult->num_rows > 0) {
    $packageDetails = $packageResult->fetch_assoc();
}

// Fetch images for the package
$query = "SELECT img_path FROM picture WHERE package_name = (select name from package where package_id = ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param('s', $packageName);
$stmt->execute();
$result = $stmt->get_result();

$images = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $images[] = $row['img_path'];
    }
}

// Fetch locations for the package
$locationQuery = "SELECT location_name, description, image FROM location WHERE package_id = ?";
$locationStmt = $conn->prepare($locationQuery);
$locationStmt->bind_param('s', $packageName);
$locationStmt->execute();
$locationResult = $locationStmt->get_result();

$locations = [];
if ($locationResult->num_rows > 0) {
    while ($row = $locationResult->fetch_assoc()) {
        $locations[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/packages.css">
    <title>Package Details</title>
</head>
<body>
    <div style="height: 75px;"></div>

    <!-- Carousel -->
    <div id="travelCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($images)): ?>
                <?php foreach ($images as $index => $imgPath): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <img src="./uploads/<?php echo htmlspecialchars($imgPath); ?>" class="d-block w-100" alt="Travel Image">
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="carousel-item active">
                    <img src="https://via.placeholder.com/1200x300" class="d-block w-100" alt="Default Image">
                </div>
            <?php endif; ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#travelCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#travelCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Main Content -->
    <div class="fs-1 fw-bold text-center"><?php echo $packageDetails['name'];?></div>
    <div class="container mx-5 px-5 row">
        <!-- Flowchart -->
        <div class="flowchart my-5 p-5 col-md-4" id="flowchart">
            <div style="height: 20px;"></div>
            <?php foreach ($locations as $index => $location): ?>
                <div class="circle" data-title="<?php echo htmlspecialchars($location['location_name']); ?>" data-description="<?php echo htmlspecialchars($location['description']); ?>" data-img="<?php echo htmlspecialchars($location['image']); ?>" data-price="<?php echo htmlspecialchars($packageDetails['price']); ?>">
                    <?php echo htmlspecialchars($location['location_name']); ?>
                </div>
                <?php if ($index < count($locations) - 1): ?>
                    <div class="arrow"></div>
                <?php endif; ?>
            <?php endforeach; ?>
            <div style="height: 20px;"></div>
        </div>

        <!-- Details Section -->
        <div class="details col-md-8">
            <img id="details-img" src="" alt="Location Image" class="img-fluid">
            <h3 id="details-title">Place 1</h3>
            <p id="details-description">Description for Place 1.</p>
            <div id="details-price">Price: </div>
        </div>
    </div>

    <!-- Add to Cart Section -->
    <div class="container mx-5 px-5 mt-5 mb-3">
        <div class="row w-100 mt-5">
            <div class="col-md-8">
                <h1 id="add-to-cart-location">Location</h1>
                <p id="add-to-cart-description">Description</p>
            </div>
            <div class="col-md-4">
                <div class="card mx-auto" style="max-width: 600px;">
                    <img id="add-to-cart-img" src="../image/bg1.jpg" alt="logo" srcset="" class="img-fluid">
                    <div class="card-body text-center">
                        <div class="mb-2 fs-4" id="add-to-cart-price">Price: 1000 Rs/-</div>
                        <button class="btn btn-primary" id="add-to-cart-btn">Buy</button>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="mt-5"></div>
    <?php include_once "footer.php"; ?>

    <!-- Scripts -->
    <script>
        // Function to update the details section
        function showDetails(title, description, imgPath, price) {
            document.getElementById('details-title').innerText = title;
            document.getElementById('details-description').innerText = description;
            document.getElementById('details-img').src = imgPath ? `./uploads/${imgPath}` : 'https://via.placeholder.com/1200x300'; // Default image if none exists
            document.getElementById('details-price').innerText = `Price: ${price} Rs/-`;
        }

        // Add click functionality to each circle
        const circles = document.querySelectorAll('.circle');
        circles.forEach(circle => {
            circle.addEventListener('click', () => {
                circles.forEach(c => c.classList.remove('active'));
                circle.classList.add('active');
                const title = circle.dataset.title;
                const description = circle.dataset.description;
                const imgPath = circle.dataset.img;
                const price = circle.dataset.price;

                showDetails(title, description, imgPath, price);

                // Update the Add to Cart Section
                document.getElementById('add-to-cart-location').innerText = title;
                document.getElementById('add-to-cart-description').innerText = description;
                document.getElementById('add-to-cart-img').src = imgPath ? `./uploads/${imgPath}` : 'https://via.placeholder.com/1200x300';
                document.getElementById('add-to-cart-price').innerText = `Price: ${price} Rs/-`;
            });
        });

        // Initialize with the first circle active
        if (circles.length > 0) {
            circles[0].classList.add('active');
            showDetails(circles[0].dataset.title, circles[0].dataset.description, circles[0].dataset.img, circles[0].dataset.price);

            // Also initialize the Add to Cart Section with the first location
            document.getElementById('add-to-cart-location').innerText = circles[0].dataset.title;
            document.getElementById('add-to-cart-description').innerText = circles[0].dataset.description;
            document.getElementById('add-to-cart-img').src = circles[0].dataset.img ? `./uploads/${circles[0].dataset.img}` : 'https://via.placeholder.com/1200x300';
            document.getElementById('add-to-cart-price').innerText = `Price: ${circles[0].dataset.price} Rs/-`;
        }

        // Add to Cart button functionality
        document.getElementById('add-to-cart-btn').addEventListener('click', () => {
            const title = document.getElementById('add-to-cart-location').innerText;
            alert(`${title} has been added to your cart!`);
        });
    </script>
</body>
</html>

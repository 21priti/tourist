<?php
include_once "navbar.php";
require_once '../databasefunction/dbfunctions.php';

session_start();

$packageId = $_GET['pid'];

// Fetch package details
$packageDetails = getPackageDetails($packageId);

// Fetch package images
$images = getPackageImages($packageId);

// Fetch package locations
$locations = getPackageLocations($packageId);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../style/packages.css">
    <script src="../jq/jquery-3.7.1.js"></script>
    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
    <title>Package Details</title>
</head>
<body>

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
    <div class="fs-1 fw-bold text-center"><?php echo htmlspecialchars($packageDetails['name']); ?></div>
    <div class="container mx-5 px-5 row">
        <!-- Flowchart -->
        <div class="flowchart my-5 p-5 col-md-4" id="flowchart">
            <div style="height: 20px;"></div>
            <?php foreach ($locations as $index => $location): ?>
                <div class="circle" 
                     data-title="<?php echo htmlspecialchars($location['location_name']); ?>" 
                     data-description="<?php echo htmlspecialchars($location['description']); ?>" 
                     data-img="<?php echo htmlspecialchars($location['image']); ?>">
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
        </div>
    </div>

    <!-- Add to Cart Section -->
    <div class="container px-5 mt-5 mb-3">
        <div class="row w-100 mt-5">
            <div class="col-md-8">
                <h1 id="add-to-cart-title"><?php echo htmlspecialchars($packageDetails['name']); ?></h1>
                <p id="add-to-cart-description"><?php echo htmlspecialchars($packageDetails['des1']); ?></p>
            </div>
            <div class="col-md-4">
                <div class="card mx-auto" style="max-width: 600px;">
                    <img id="add-to-cart-img" src="<?php echo !empty($images) ? './uploads/' . htmlspecialchars($images[0]) : 'https://via.placeholder.com/1200x300'; ?>" alt="logo" class="img-fluid">
                    <div class="card-body text-center">
                        <div class="mb-2 fs-4" id="add-to-cart-price">Price: <?php echo htmlspecialchars($packageDetails['price']); ?> Rs/-</div>
                        <button class="btn btn-primary" id="add-to-cart-btn" 
                            onclick="<?php if (isset($_SESSION['cid'])) { ?>addToCart(<?php echo $_SESSION['cid']; ?>, <?php echo $packageId; ?>)<?php } else { ?>redirectToLogin()<?php } ?>">
                            Buy
                        </button>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="mt-5">
    <?php include_once "footer.php"; ?>
    </div>
    <!-- Scripts -->
    <script>
        // Redirect to Login Page
        function redirectToLogin() {
            alert('Please log in to continue.');
            window.location.href = 'login.php';
        }

        // Add to Cart
        function addToCart(cid, pid) {
            $.ajax({
                url: 'add_subscription.php',
                type: 'POST',
                contentType: 'application/json',
                data: JSON.stringify({ cid: cid, pid: pid }),
                success: function (response) {
                    if (response.success) {
                        alert(response.message);
                    } else {
                        alert(response.message || '');
                    }
                },
                error: function () {
                    alert('An unexpected error occurred.');
                }
            });
        }

        // Show Details on Click
        $(document).ready(function () {
            function showDetails(title, description, imgPath) {
                $('#details-title').text(title);
                $('#details-description').text(description);
                $('#details-img').attr('src', imgPath ? `./${imgPath}` : 'https://via.placeholder.com/1200x300');
            }

            const circles = $('.circle');
            circles.each(function () {
                $(this).on('click', function () {
                    circles.removeClass('active');
                    $(this).addClass('active');
                    const title = $(this).data('title');
                    const description = $(this).data('description');
                    const imgPath = $(this).data('img');
                    showDetails(title, description, imgPath);
                });
            });

            // Initialize with the first circle active
            if (circles.length > 0) {
                $(circles[0]).addClass('active');
                showDetails($(circles[0]).data('title'), $(circles[0]).data('description'), $(circles[0]).data('img'));
            }
        });
    </script>
</body>
</html>

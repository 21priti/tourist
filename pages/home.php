<?php include_once "navbar.php"; ?>
<head>
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="../style/universal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

</head>
<body>
    <!-- hero section -->
    <div>
        <div id="hero" class="carousel carousel-dark slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-delay="100">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="2000">
                    <img src="../image/hero.webp" class="d-block w-100 image" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <!-- haeding change -->
                        <h1 class="caption-heading">Discover Hidden Gems</h1>
                        <p class="caption-body">Explore the most breathtaking and lesser-known destinations around the world, curated just for you.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="../image/road.webp" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="caption-heading">Your Ultimate Travel Companion</h1>
                        <p class="caption-body">Get personalized itineraries, expert tips, and local insights to make your trip unforgettable.
                        .</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../image/hill.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1 class="caption-heading">Unveil the World’s Wonders</h1>
                        <p class="caption-body">Journey through iconic landmarks and stunning landscapes with in-depth guides to every destination..</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- about us -->
     <div>
    <?php include_once "about.php";?>
</div>
    <!-- package  -->
     <!-- annimation added -->
    <div class="container my-4" data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-center mb-4">Packages</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="../image/package1.jpg" class="card-image-top image-card" alt="" srcset="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../image/package2.jpg" class="card-image-top image-card" alt="" srcset="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="../image/package3.jpg" class="card-image-top image-card" alt="" srcset="">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary" value="See More">See More</button>
        </div>
    </div>

    <div id="blog" class="mb-5" data-aos="fade-up" data-aos-delay="100">
    <?php include_once "blog.php"?>
    </div>
    
    <?php include_once "footer.php"?>

    <script>
  AOS.init();
</script>
</body>
</html>
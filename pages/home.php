<?php include_once "navbar.php"; ?>
<head>
    <link rel="stylesheet" href="../style/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
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
        <div class="row" id="packages-container">
            
        </div>
        <div class="text-center mt-3">
            <a type="submit" class="btn btn-primary" herf="packages.php">See More</a>
        </div>
    </div>

    <div id="blog" class="mb-5" data-aos="fade-up" data-aos-delay="100">
    <?php include_once "blog.php"?>
    </div>
    
    <?php include_once "footer.php"?>
    <script>
        $(document).ready(function () {
        // Fetch packages using AJAX
            $.ajax({
            url: 'fetch_packages.php',
            method: 'GET',
            success: function (data) {
                try{
                    data=JSON.parse(data);
                    console.log(data);
                }catch(error){
                    console.log(error);
                }
                
                let packagesHtml = '';
                console.log("Packages fetched:", data);
                for(let i=0; i<3; i++){
                    packagesHtml += `
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <img class="card-img-top" src="./uploads/${data[i]['img_path']}" alt="Card image cap" style="height:300px;">
                        <div class="card-body d-flex flex-column justify-content-between" style="height:300px;">
                            <h5 class="card-title fw-bold">${data[i]['name']}</h5>
                            <p class="card-text" style="text-align: justify;">${data[i]['des1']}</p>
                            <a href="package_page.php?pid=${data[i]['package_id']}" class="btn btn-primary">See Detail</a>
                        </div>
                        </div>
                    </div>
                    `;
                }
                $('#packages-container').html(packagesHtml);
            },
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
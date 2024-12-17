<?php include_once "navbar.php";?>
<head>
    <link rel="stylesheet" href="../style/packages.css">
</head>

<body>
    <div style="height: 75px;"></div>
    <!-- Carousel -->
    <div id="travelCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1200x300" class="d-block w-100" alt="Travel Image 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x300" class="d-block w-100" alt="Travel Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1200x300" class="d-block w-100" alt="Travel Image 3">
            </div>
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
    <div class="containe mx-5 px-5">
        <!-- Flowchart -->
        <div class="flowchart my-5 p-5" id="flowchart">
            <div style="height: 20px;"></div>
            <div class="circle" data-title="Place 1" data-image="https://via.placeholder.com/300" data-description="Description for Place 1">
                Place 1
            </div>
            <div class="arrow"></div>
            <div class="circle" data-title="Place 2" data-image="https://via.placeholder.com/300" data-description="Description for Place 2">
                Place 2
            </div>
            <div class="arrow"></div>
            <div class="circle" data-title="Place 3" data-image="https://via.placeholder.com/300" data-description="Description for Place 3">
                Place 3
            </div>
            <div class="arrow"></div>
            <div class="circle" data-title="Place 4" data-image="https://via.placeholder.com/300" data-description="Description for Place 4">
                Place 4
            </div>
            <div style="height: 20px;"></div>
        </div>

        <!-- Details -->
        <div class="details ">
            <h3 id="details-title">Place 1</h3>
            <img id="details-image" src="https://via.placeholder.com/300" alt="Place 1">
            <p id="details-description">Description for Place 1.</p>
        </div>
    </div>

    <!-- Add to Cart Section -->
    <div class="containe mx-5 px-5 mt-5 mb-3">
        <div class="row w-100 mt-5">
            <div class="col-md-8">
                <h1>Location</h1>
                <p>
                    description
                </p>
            </div>
            <div class="col-md-4">
                <div class="card mx-auto" style="max-width: 600px;">
                    <img src="../image/bg1.jpg" alt="logo" srcset="" class="img-fluid">
                    <div class="card-body text-center">
                        <div class="mb-2 fs-4">Price : 1000 Rs/-</div>
                        <button class="btn btn-primary" id="add-to-cart-btn">Buy</button>
                    </div>
                </div>
            </div>
        </div>   
    </div>
    <div class="mt-5"></div>
    <?php include_once "footer.php";?>
    <script src="../script/packages.js"></script>
</body>
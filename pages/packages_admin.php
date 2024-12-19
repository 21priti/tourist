<?php include_once "navbar.php" ?>

<body>
    <div class="container my-5 py-5">
        <h1 class="text-center mb-5 fw-bold">Our Packages</h1>
        <div id="packages-container" class="row g-4">

        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Fetch packages using AJAX
            $.ajax({
                url: 'fetch_packages.php', // Ensure this is correct
                method: 'GET',
                success: function (data) {
                    try {
                        data = JSON.parse(data);
                        console.log(data);
                    } catch (error) {
                        console.log(error);
                    }

                    let packagesHtml = '';
                    console.log("Packages fetched:", data);
                    for (let i = 0; i < data.length; i++) {
                        packagesHtml += `
                    <div class="col-md-6">
                        <div class="card shadow-lg border-0">
                            <!-- Package Image -->
                            <img class="card-img-top rounded-top" src="./uploads/${data[i]['img_path']}" alt="Package Image" style="height:400px; object-fit:cover;">

                            <div class="card-body" style="height: auto; padding: 1.5rem;">
                                <h4 class="card-title fw-bold text-primary">${data[i]['name']}</h4>
                                <p class="card-text text-muted" style="text-align: justify;">${data[i]['des1']}</p>
                                
                               
                                <div class="d-flex flex-wrap align-items-center my-3">
                                        <div class="me-4 mb-2">
                                            <span class="text-muted"><i class="fas fa-map-marker-alt text-danger"></i> Starting:</span>
                                            <span class="fw-bold text-dark">${data[i]['starting_place']}</span>
                                        </div>
                                        <div class="me-4 mb-2">
                                            <span class="text-muted"><i class="fas fa-map-marker-check text-success"></i> Ending:</span>
                                            <span class="fw-bold text-dark">${data[i]['ending_place']}</span>
                                        </div>
                                        <div class="ms-4">
                                            <span class="text-muted"><i class="fas fa-bus text-info"></i> Travel By:</span>
                                            <span class="fw-bold text-dark">${data[i]['travel_by']}</span>
                                        </div>
                                    </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <span class="text-muted"><i class="fas fa-clock text-warning"></i> Duration:</span>
                                        <span class="fw-bold text-dark">${data[i]['days']} Days</span>
                                    </div>
                                    <div>
                                        <span class="text-muted"><i class="fas fa-star text-warning"></i> Rating:</span>
                                        <span class="fw-bold text-dark">${data[i]['rating']}/5</span>
                                    </div>
                                </div>
                                <p class="fw-bold text-danger fs-4 mt-4">Price: ₹${data[i]['price']}</p>
                                <a href="package_page.php?pid=${data[i]['package_id']}" class="btn btn-outline-primary w-100 fw-bold">See Details</a>
                                <a href="package_update.php?pid=${data[i]['package_id']}" class="btn btn-outline-primary w-100 fw-bold mt-2">Edit Details</a>
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
    <?php include_once "footer.php";?>
</body>
<?php include_once "navbar.php" ?>
<body>
    <div class="container mt-5 pt-5">
        <h1 class="text-center mb-5">Our Packages</h1>
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
                data=JSON.parse(data);
                let packagesHtml = '';
                console.log("Packages fetched:", data);
                for(let i=0; i<data.length; i++){
                    packagesHtml += `
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">${data[i]['name']}</h5>
                            <p class="card-text">${data[i]['des1']}</p>
                            <p class="fw-bold">Price: ${data[i]['price']} rs</p>
                            <a href="package_page.php?pid=${data[i]['id']}" class="btn btn-primary">See Detail</a>
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
</body>
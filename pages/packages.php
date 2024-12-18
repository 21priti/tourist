<?php include_once "navbar.php" ?>
<body>
    <div class="container my-5 py-5">
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
                try{
                    data=JSON.parse(data);
                    console.log(data);
                }catch(error){
                    console.log(error);
                }
                
                let packagesHtml = '';
                console.log("Packages fetched:", data);
                for(let i=0; i<data.length; i++){
                    packagesHtml += `
                    <div class="col-md-4">
                        <div class="card shadow-sm">
                        <img class="card-img-top" src="./uploads/${data[i]['img_path']}" alt="Card image cap" style="height:300px;">
                        <div class="card-body d-flex flex-column justify-content-between" style="height:400px;">
                            <h5 class="card-title fw-bold">${data[i]['name']}</h5>
                            <p class="card-text">${data[i]['des1']}</p>
                            <p class="fw-bold mt-2">Number of places - ${data[i]['no_places']}</p>
                            <p class="fw-bold fs-4 mt-2 text-danger">Price: ${data[i]['price']} rs</p>
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
    <?php include_once "footer.php";?>
</body>
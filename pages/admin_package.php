<?php include_once "navbar.php"; ?>
<body>
    <div style="height:78px;"></div>
    <div class="d-flex flex-column justify-content-between">
        <div class="row g-5 mt-4 mx-3">
            <div class="col-md-6">
                <div class="bg-warning p-5 text-center rounded-5">
                    <a class="fs-1 text-decoration-none text-dark" href="package_form.php">Add Package</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="bg-success p-5 text-center rounded-5">
                    <a class="fs-1 text-decoration-none text-dark" href="package_update.php">Update Package</a>
                </div>
            </div>
        </div>
        <div class="fixed-bottom mt-5">
        <?php include_once "footer.php";?>
        </div>
    </div>
</body>
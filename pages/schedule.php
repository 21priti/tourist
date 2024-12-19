<?php
include_once "navbar.php";
require_once '../databasefunction/dbfunctions.php';


if (!isset($_SESSION['cid'])) {
    header("Location: login.php");
    exit;
}

$cid = $_SESSION['cid'];

$pids = getUserSubscriptions($cid);


$packages = [];
foreach ($pids as $pid) {
    $package = getPackageDetails($pid);
    if ($package) {
        $packages[] = $package;
    }
}
?>

<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4 fw-bold bg-warning border border-2">Your Purchased Packages</h1>
        <?php if (!empty($packages)): ?>
            <div class="row">
                <?php foreach ($packages as $package): ?>
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><?php echo htmlspecialchars($package['name']); ?></h3>
                                <p class="card-text">
                                    <strong>Price:</strong> <?php echo htmlspecialchars($package['price']); ?> Rs/-<br>
                                    <strong>Description 1:</strong> <?php echo htmlspecialchars($package['des1']); ?><br>
                                    <strong>Description 2:</strong> <?php echo htmlspecialchars($package['des2']); ?><br>
                                    <strong>Description 3:</strong> <?php echo htmlspecialchars($package['des3']); ?><br>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p class="text-center">You have not purchased any packages yet.</p>
            <div class="fixed-bottom mt-5">
            <?php include_once "footer.php"; ?>
            </div>
        <?php endif; ?>
    </div>
    
</body>
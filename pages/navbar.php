<?php
session_start();
$current_page = basename($_SERVER['PHP_SELF']); // Get the current script name
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../style/universal.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="../jq/jquery-3.7.1.js"></script>
</head>

<body style="overflow-x:hidden;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="light">
    <div class="container-fluid">
      <a href="home.php"><i class="fa-brands fa-phoenix-framework fs-1" style="color:rgb(21, 21, 74);"><span class="fs-1 ps-2 fw-bold ">
      Travel</span></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <?php if ((session_status() === PHP_SESSION_NONE) ) { 
                if($_SESSION['admin']===0){
          ?>
            <ul class="navbar-nav mx-auto mb-lg-0 fw-bold">
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'home.php' ? 'active' : '' ?>" href="home.php">
                  <i class="bi bi-house-fill"></i> Home
                </a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'packages.php' ? 'active' : '' ?>" href="packages.php">
                  <i class="fa-solid fa-paper-plane"></i> Packages
                </a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'blog.php' ? 'active' : '' ?>" href="#blog">
                  <i class="fa-solid fa-headset"></i> Review-Query
                </a>
              </li>
            </ul>
        <?php } else { ?>
            <ul class="navbar-nav mx-auto mb-lg-0 fw-bold">
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'home.php' ? 'active' : '' ?>" href="home.php">
                  <i class="bi bi-house-fill"></i> Home
                </a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'packages.php' ? 'active' : '' ?>" href="packages.php">
                  <i class="fa-solid fa-paper-plane"></i> Packages
                </a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">
                  <i class="fa-solid fa-headset"></i> Contact-Us
                </a>
              </li>
            </ul>
        <?php } 
        }else{?>
            <ul class="navbar-nav mx-auto mb-lg-0 fw-bold">
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'home.php' ? 'active' : '' ?>" href="home.php">
                  <i class="bi bi-house-fill"></i> Home
                </a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'packages.php' ? 'active' : '' ?>" href="packages.php">
                  <i class="fa-solid fa-paper-plane"></i> Packages
                </a>
              </li>
              <li class="nav-item px-3">
                <a class="nav-link <?= $current_page == 'contact.php' ? 'active' : '' ?>" href="contact.php">
                  <i class="fa-solid fa-headset"></i> Contact-Us
                </a>
              </li>
            </ul>
        <?php } ?>
        <span class="navbar-text">
          <ul class="navbar-nav">
            <?php if (isset($_SESSION['cid'])) { ?>
            <li class="nav-item dropdown fw-bold">
              <a class="nav-link dropdown-toggle-d-none" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="bi bi-person-fill"></i>
                Profile
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile.php">Dashboard</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
              </ul>
            </li>
            <?php } else { ?>
                <li class="nav-item dropdown fw-bold">
                  <a class="nav-link dropdown-toggle-d-none" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="bi bi-person-fill"></i>
                    Log In/Register
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="register.php">Sign Up</a></li>
                    <li><a class="dropdown-item" href="login.php">Sign In</a></li>
                  </ul>
                </li>
            <?php } ?>
          </ul>
        </span>
      </div>
    </div>
  </nav>
  <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>

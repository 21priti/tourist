<?php
session_start();
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
</head>

<body style="overflow-x:hidden;">
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" data-bs-theme="light">
    <div class="container-fluid">
      <i class="fa-brands fa-phoenix-framework fs-1" style="color:#3647df"></i><span class="fs-1 ps-2 fw-bold">
        Travel</span>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-lg-0 fw-bold">
          <li class="nav-item px-3">
            <a class="nav-link active" aria-current="page" href="home.php"><i class="bi bi-house-fill"></i> Home</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#about"><i class="bi bi-file-person-fill"></i> About</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="contact.php"><i class="bi bi-telephone-fill"></i> Contact-Us</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="packages.php "><i class="bi bi-pin-map-fill"></i> Places</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link" href="#blog"><i class="bi bi-vector-pen"></i> Blog</a>
          </li>
        </ul>


        <span class="navbar-text me-3">
          <ul class="navbar-nav">
            <?php
              if(isset($_SESSION['id'])){
                ?>
            <li class="nav-item dropdown fw-bold">
              <a class="nav-link dropdown-toggle-d-none " href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="bi bi-person-fill"></i>
                Profile
              </a>


              <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="profile.php">Dashboard</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
              </ul>

            </li>
        </span>
        <?php
              }
            
          
              
              else{
                ?>
        <li class="nav-item px-3">
          <a class="nav-link btn bg-primary text-white fw-bold p-2" href="register.php"><i
              class="me-1 fas fa-user-plus"></i> REGISTER</a>
        </li>
        <li class="nav-item px-3">
          <a class="nav-link btn bg-primary text-white fw-bold p-2" href="login.php"><i
              class=" me-1 fas fa-sign-in-alt"></i>LOGIN</a>
        </li>
        <?php
              }
          ?>
      </div>
    </div>
  </nav>
  <!-- <div style="height: 80px;"></div> -->
  <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
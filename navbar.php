<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      nav{
        background: rgba(104, 175, 199, 0.496);
      }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" data-bs-theme="light">
      <div class="container-fluid">
        <img class="navbar-brand rounded-circle" src="./image/logo_travel.png" style=" width:100px;" herf="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto mb-lg-0 fs-5 fw-bold">
            <li class="nav-item px-3">
              
              <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-fill"></i> Home</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link" href="#"><i class="bi bi-file-person-fill"></i> About</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link"><i class="bi bi-telephone-fill"></i> Contact-us</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link"><i class="bi bi-pin-map-fill"></i> Places</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link"><i class="bi bi-vector-pen"></i> Blog</a>
            </li>
          </ul>
          <span class="navbar-text me-5">
            <ul class="navbar-nav">
            <!-- <a href="#" class="btn btn-primary text-light fs-5">Profile</a> -->
            <li class="nav-item dropdown fs-5 fw-bold">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i>
                Profile
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                <li><a class="dropdown-item" href="#">Setting</a></li>
                <li><a class="dropdown-item" href="#">Log Out</a></li>
              </ul>
              </ul>
            </li>
          </span>
        </div>
      </div>
    </nav>
      <script src="./bootstrap/bootstrap.bundle.min.js">
        console.log("hii")
      </script>
</body>
</html>
<?php include_once "navbar.php"; ?>
<head>
    <link rel="stylesheet" href="../style/profile.css">
</head>
<body class="profile-body">
<div class="container">
    <div class="profile-header text-center">
      <div class="profile-pic-container">
        <img src="https://via.placeholder.com/150" alt="Profile Picture" class="profile-pic">
        <i class="bi bi-pencil profile-pic-edit" title="Edit Profile Picture" onclick="document.getElementById('profilePicInput').click();"></i>
        <!-- Hidden file input for uploading profile picture -->
        <input type="file" id="profilePicInput" style="display: none;" onchange="uploadProfilePic(event)">
      </div>
      
      <div class="row mt-5 text-start">
        <h1 class="mt-3 text-center">User Name</h1>
        <div class="col-md-6 offset-md-3">
          <div class="contact-info">
            <form action="save_profile.php" method="POST">
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="johndoe@example.com" readonly>
              </div>
              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <div class="input-group">
                  <input type="text" class="form-control" id="phone" name="phone" value="+1 123 456 7890" readonly>
                  <span class="input-group-text">
                    <i class="bi bi-pencil-square edit-icon" onclick="toggleEditable('phone')" title="Edit Phone"></i>
                  </span>
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" value="********" readonly>
                  <span class="input-group-text">
                    <i class="bi bi-pencil-square edit-icon" onclick="toggleEditable('password')" title="Edit Password"></i>
                  </span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary w-100">Save Changes</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../script/profile.js"></script>
</body>
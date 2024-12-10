<?php include_once "navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
    <div style="height:70px;"></div>
    <div class="card mt-3 w-50 mx-auto bg-light mb-5 pb-3 border border-2 rounded-3 shadow">
        <div class="card-header" style="background-color: rgb(21, 21, 74);">
            <h2 class="text-center fw-bold fs-1 text-light pt-2">Register Here</h2>
        </div>
       
        <div class="card-body">
            <div class="container text-center">
                <form action="register.php" method="post" class="mt-5"  onsubmit="return func1(event)">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <i class="icon fas fa-user"></i>
                                <input type="text" name="fname" placeholder="Enter Your Name" class="fname w-100">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter your Email" class="email w-100">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon fas fa-phone"></i>
                                <input type="text" name="ph-no" placeholder="Enter your phone number" class="ph w-100">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon fas fa-calendar-alt"></i>
                                <input type="date" name="dob" placeholder="Set your dob" id="dt" class="ph w-100">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon-a fas fa-home"></i>
                                <textarea cols="15" rows="5" placeholder="Enter Your address" class="addr w-100" name="addr"></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Set your password" class="w-100">
                            </div>
                        </div>
                       
                        
                        <div class="mt-3">
                            <input class="btn btn-primary w-100 bg-primary text-light" type="submit" name="submit" value="SUBMIT" >
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
</div>
    
   
<script src="../script/register.js"></script>
   <script src="../script/contact.js"></script>
</body>
</html>
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
                <form action="register.php" method="post" class="mt-5" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
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
                            <div class="row">
                                <div class="col-md-3">
                                    GENDER:
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">

                                        <input type="radio" name="gender" value="male">Male
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">

                                        <input type="radio" name="gender" value="female">Female
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">

                                        <input type="radio" name="gender" value="others">Others
                                    </div>
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
                                    <textarea cols="15" rows="5" placeholder="Enter Your address" class="addr w-100"
                                        name="addr"></textarea>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="input-group">
                                    <i class="icon fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Set your password"
                                        class="w-100">
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="input-group">
                                    <i class="icon fas fa-image"></i>
                                    <input type="file" name="image" required>
                                </div>
                            </div>


                            <div class="mt-3">
                                <input class="btn btn-primary w-100 bg-primary text-light" type="submit" name="submit"
                                    value="SUBMIT">
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['submit'])){
            require_once "../databasefunction/dbfunctions.php";
            $name = $_POST['name'];
            $email = $_POST['email'];
            $ph = $_POST['ph-no'];
            $gender = $_POST['gender'];
            $dob = $_POST['dob'];
            $address = $_POST['addr'];
            $password= $_POST['password'];
            $image = $_FILES['image'];
            $new_name=time()."-".$image['name'];
            $upload_path="../databasefunction/user_images/".$new_name;
        
            if(move_uploaded_file($image['tmp_name'],  $upload_path)){
                $res=register($name,$email,$ph,$gender,$dob,$address,$password,$new_name);
                if($res){
                    ?>
                    <script>
                        alert("You can login now");
                        window.location = "login.php";
                    </script>
                    <?php
                } else {
                    ?>
                    <script>
                        alert("something went wrong.");
                        window.location = "register.php";
                    </script>
                    <?php
                }
            }   
        }
    ?>

    <script src="../script/register.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style/register.css">
</head>

<body>
    <?php 
        include_once "navbar.php";
        if(isset($_SESSION['cid'])){
            header("location:logout.php");
        }
    ?>

    <div style="height:70px;"></div>
    <div class="card mt-3 w-50 mx-auto bg-light mb-5 pb-3 border border-2 rounded-3 shadow">
        <div class="card-header" style="background-color: rgb(21, 21, 74);">
            <h2 class="text-center fw-bold fs-1 text-light pt-2">Login Here</h2>
        </div>

        <div class="card-body">
            <div class="container text-center">
                <form action="login.php" method="post" class="">
                    <div class="row">
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter your Email" class="email w-100">
                            </div>
                            <div class="mt-3">
                                <div class="input-group">
                                    <i class="icon fas fa-lock"></i>
                                    <input type="password" name="password" placeholder="Enter your password"
                                        class="w-100">
                                </div>
                                <div class="mt-3">
                                    <input class="btn btn-primary w-100 bg-primary text-light" type="submit"
                                        name="submit" value="SUBMIT">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        require_once "../databasefunction/dbfunctions.php";
        $res=login($email,$password);
        if($res){
            session_start();
            $_SESSION['name'] = $res['name'];
            $_SESSION['id'] = $res['cid'];
            header("location:home.php");
        } else {
            echo "Invalid Emial or Password";
        }
    }
    ?>
</body>

</html>
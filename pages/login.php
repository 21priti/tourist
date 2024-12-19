<?php include_once "navbar.php";?>
<head>
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
    <?php 
        if(isset($_SESSION['cid'])){
            session_destroy();
            header("location:login.php");
        }
    ?>
    <div style="height:70px;"></div>
    <div class="card mt-3 w-50 mx-auto bg-light mb-5 pb-3 border border-2 rounded-3 shadow">
        <div class="card-header" style="background-color: rgb(21, 21, 74);">
            <h2 class="text-center fw-bold fs-1 text-light pt-2">Login Here</h2>
        </div>

        <div class="card-body">
            <div class="container text-center">
                <form method="post" class="">
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
            $_SESSION['name'] = $res['name'];
            $_SESSION['cid'] = $res['cid'];
            $_SESSION['admin']=$res['admin'];
            $_SESSION['email']=$res['email'];
            $_SESSION['phone']=$res['phone'];
            $_SESSION['gender']=$res['gender'];
            $_SESSION['password']=$res['password'];
            $_SESSION['profile_pic']=$res['profile_pic'];
            ?>
                <script>
                    window.location = "home.php";
                </script>
            <?php
            // header("location:home.php");
        } else {
            ?>
                <script>
                    alert("email,password is wrong.");
                </script>
            <?php
        }
    }
    ?>
</body>
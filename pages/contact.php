<?php include_once "navbar.php"; ?>
<head>  
    <title>Contact-us</title>
    <link rel="stylesheet" href="../style/contact.css">
</head>
<body>
    
    <div style="height:70px;"></div>
    <div class="card mt-3 w-50 mx-auto bg-light mb-5 pb-3 border border-2 rounded-3 shadow">
        <div class="card-header" style="background-color: rgb(21, 21, 74);">
            <h2 class="text-center fw-bold fs-1 text-light pt-2">Contact-Us</h2>
        </div>
        <div class="card-body">
            <p class="text-center fs-5">We will get back to you asap! </p>
            <div class="container text-center">
                <form action="contact.php" method="post" class="mt-5" onsubmit="return func1(event)">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <i class="icon fas fa-user"></i>
                                <input type="text" name="fname" placeholder="First Name" class="fname w-100">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="lname" placeholder="Last Name" class="lname w-100">
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
                                <input type="text" name="ph-no" placeholder="Enter your phonenumber" class="ph w-100">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <i class="icon-a fas fa-comment-dots"></i>
                                <textarea cols="15" rows="5" placeholder="Enter Your query" class="addr w-100" name="addr"></textarea>
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
    <div style="height: 1px;"></div>
    <?php include_once "footer.php"?>

   <script src="../script/contact.js"></script>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contact-us</title>
    <link rel="stylesheet" href="../style/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
<?php include_once "navbar.php"; ?>
    <div id="contact" class="container mt-3 mb-5 pt-3 border border-2">
        <h2 class="text-center fw-bold">Contact-Us</h2>
        <p class="text-center fs-5">We will get back to you asap! </p>
       <div class="container text-center">
          
                <form action="contact.html" method="post" class="mt-5" onsubmit="return func1(event)">
                    <div class="row">
                <div class="col-md-6">
                    <div class="input-group">
                <i class="icon fas fa-user"></i>
                    <input type="text" name="fname" placeholder="First Name" class="fname w-100">
                
            </div></div>
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
                    <input type="submit" name="submit" value="SUBMIT" class="w-100 bg-primary mb-3 fs-5 fw-bold">
                </div></div>
            </form>
                
            
           </div>
           </div>
           <div>
           <?php include_once "footer.php"?>
</div>
        
   <script src="../script/contact.js"></script>
    
</body>
</html>
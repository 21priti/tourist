<?php
session_start();
include_once "navbar.php";
require_once "../databasefunction/dbfunctions.php";
if(!isset($_GET['pid'])){
    header("location:package_update.php");
}
$id = $_GET['pid'];
$result = getId($id);
    if(!$result){
        ?>
            <script>
                alert("Invalid ID");
                window.location = "packages.php";
            </script>
        <?php
    }
    $pck = $result->fetch_assoc();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../style/register.css">
</head>
<body>
    <div style="height:70px;"></div>
    <div class="card mt-3 w-50 mx-auto bg-light mb-5 pb-3 border border-2 rounded-3 shadow">
        <div class="card-header" style="background-color: rgb(21, 21, 74);">
            <h2 class="text-center fw-bold fs-1 text-light pt-2">Update Package Information</h2>
        </div>
        <div class="card-body">
            <div class="container text-center">
                <form action="" method="post" class="mt-5" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="package_id" value="<?php echo $pck['package_id'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <input type="text" class="form-control" name="pname" value="<?php echo $pck['name'] ?>"
                                    placeholder="Enter the package location">
                            </div>

                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-list-ol"></i></span>
                                <input type="text" class="form-control" name="package_no"
                                    placeholder="Enter how many places available" value="<?php echo $pck['no_places'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-arrow-circle-up"></i></span>
                                <input type="text" name="sname" placeholder="Enter the starting location"
                                    class="form-control" value="<?php echo $pck['starting_place'] ?>">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-arrow-circle-down"></i></span>
                                <input type="text" name="ename" placeholder="Enter the ending location"
                                    class="form-control" value="<?php echo $pck['ending_place'] ?>">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                <textarea cols="15" rows="5" placeholder="Enter description" class="form-control"
                                    name="des1"><?php echo $pck['des2'] ?></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                <textarea cols="15" rows="5" placeholder="Enter description" class="form-control"
                                    name="des2"><?php echo $pck['des2'] ?></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                <textarea cols="15" rows="5" placeholder="Enter description" class="form-control"
                                    name="des3"><?php echo $pck['des2'] ?></textarea>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                                <input type="text" name="days" placeholder="Enter The days of planning"
                                    class="form-control" value="<?php echo $pck['days'] ?>" >
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-rupee-sign"></i></span>
                                <input type="text" name="price" placeholder="Enter the price" id=""
                                    class="form-control" value="<?php echo $pck['price'] ?>">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"> <i class="fa-solid fa-bus-simple"></i></span>
                                <select name="travelby" class="form-control w-75" value="<?php echo $pck['travel_by'] ?>">        
                                    <option value="select">---SELECT---</option>
                                    <option value="bus" <?php $pck['travel_by'] === "bus"? print "selected" : ""  ?>>BUS</option>
                                    <option value="train" <?php $pck['travel_by'] === "train"? print "selected" : ""  ?>>TRAIN</option>
                                    <option value="flight"  <?php $pck['travel_by'] === "flight"? print "selected" : ""  ?>>FLIGHT</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-star"></i></span>
                                <input type="text" name="rating" placeholder="Enter the rating" id=""
                                    class="form-control" value="<?php echo $pck['rating'] ?>">
                            </div>
                        </div>


                        <div class="mt-3">
                            <input class="btn btn-primary w-100 bg-primary text-light" type="submit" name="submit" value="UPDATE">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit'])){
        require_once "../databasefunction/dbfunctions.php";
        $pname = $_POST['pname'];
        $_SESSION['pname']=$pname;
        $package_no = $_POST['package_no'];
        $sname = $_POST['sname'];
        $ename = $_POST['ename'];
        $des1 = $_POST['des1'];
        $des2 = $_POST['des2'];
        $des3 = $_POST['des3'];
        $days = $_POST['days'];
        $price = $_POST['price'];
        $travelby = $_POST['travelby'];
        $rating = $_POST['rating'];
        $res=update($id,$pname,$package_no,$sname,$ename,$des1,$des2,$des3,$days,$price,$travelby,$rating);
        // if (!empty($_FILES['images']['name'][0])) {
        //     $uploadDir = 'uploads/'; // Directory to store uploaded images
        //     $uploadedFiles = $_FILES['images'];
        //     $success = true;
        //     foreach ($uploadedFiles['name'] as $key => $name) {
        //         $tmpName = $uploadedFiles['tmp_name'][$key];
        //         $uniqueName = time() . '_' . basename($name);
        //         $uploadPath = $uploadDir . $uniqueName;
        //         if (move_uploaded_file($tmpName, $uploadPath)) {
        //             $qry="INSERT INTO picture(package_name,img_path) values(?,?)";
        //             $stmt = $conn->prepare($qry);
        //             $stmt->bind_param("ss",$pname,$uniqueName);
        //             if (!$stmt->execute()) {
        //                 $success = false;
        //                 break;
        //             }
        //         }
        //         else{
        //             $success = false;
        //             break;

        //         }
        //     }
            if($res){
                ?>
    <script>
        alert("Package succesfully updated");
        window.location = "packages_admin.php";
    </script>
    <?php
            } else {
                ?>
                <script>
                    alert("something went wrong.");
                    window.location = "package_form.php";
                </script>
                <?php
            }
        }        
    
    ?>
</body>
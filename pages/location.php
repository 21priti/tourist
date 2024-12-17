<?php
    session_start();
    include_once "navbar.php";
    require_once "../databasefunction/dbfunctions.php";
    $pname=$_SESSION['pname'];
    $data=getPackage($pname);
    if(isset($data)){
        $data=$data->fetch_assoc();
        $number_of_places=$data['no_places'];
        $pid=$data['package_id'];
    
    // echo $pid;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/register.css">
</head>

<body>


    <div style="height:70px;"></div>
    <div class="card mt-3 w-50 mx-auto bg-light mb-5 pb-3 border border-2 rounded-3 shadow">
        <div class="card-header" style="background-color: rgb(21, 21, 74);">
            <h2 class="text-center fw-bold fs-1 text-light pt-2">Enter Details for "
                <?php echo ($pname); ?>"
            </h2>
        </div>
        <div class="card-body">
            <div class="container text-center">

                <form action="location.php" method="post" class="mt-5" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="pname" value="<?php echo ($pname); ?>">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="input-group">
                                <input type="hidden" class="form-control" name="pname"
                                    value="<?php echo ($number_of_places); ?>">
                            </div>
                        </div>
                        <?php for($i=0;$i<$number_of_places;$i++){?>
                        <h2 class="text-center fw-bold fs-4 text-light p-2" style="background-color: rgb(21, 21, 74);">
                            Enter Details for Location
                            <?php echo ($i)+1; ?>
                        </h2>
                        <div class="col-md-12 mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-arrow-circle-up"></i></span>
                                <input type="text" name="lname[]" placeholder="Enter the location name"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-arrow-circle-down"></i></span>
                                <input type="text" name="sequence[]" placeholder="Enter the sequence of the location"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="mt-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                <textarea cols="15" rows="5" placeholder="Enter description" class="form-control"
                                    name="des1[]"></textarea>
                            </div>
                        </div>

                        <div class="mt-3 mb-3">
                            <div class="input-group">
                                <i class="icon fas fa-image"></i>
                                <input type="file" name="image[]" required>
                            </div>
                        </div>



                        <?php
                        
                    }
                    ?>
                        <div class="mt-3">
                            <input class="btn btn-primary w-100 bg-primary text-light" type="submit" name="submit1"
                                value="SUBMIT">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit1'])){
        
        for($i=0;$i<$number_of_places;$i++){
            $location_name=$_POST['lname'][$i];
            $sequence=$_POST['sequence'][$i];
            $des=$_POST['des1'][$i];
            $image = $_FILES['image']['name'][$i];  
            $image_tmp_name = $_FILES['image']['tmp_name'][$i];
            $new_name = time() . "-" . basename($image);
            $upload_path = "./uploads/" . $new_name;
            print_r($_POST);
            if (move_uploaded_file($image_tmp_name, $upload_path)) {
                $res=location($location_name,$pid,$sequence,$des,$new_name);
                if($res){
                    ?>
    <script>
        alert("You can login now");
        window.location = "package_form.php";
    </script>
    <?php
                } else {
                    ?>
    <script>
        alert("something went wrong.");
        window.location = "location.php";
    </script>
    <?php
                }
            }
        }
    }
}
        ?>

</body>
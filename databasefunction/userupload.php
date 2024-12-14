<?php
require_once "dbconnect.php";
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $ph = $_POST['ph-no'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $address = $_POST['addr'];
    $password= $_POST['password'];
    $image = $_FILES['image'];
    // echo "<pre>";
    // print_r($image);
    // echo "</pre>";
    $new_name=time()."-".$image['name'];
    $upload_path="user_images/".$new_name;
    if(move_uploaded_file($image['tmp_name'],  $upload_path)){
        try{
        $qry="INSERT INTO register(name,email,phone,gender,dob,address,password,profile_pic) values(?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($qry);
        $stmt->bind_param("ssssssis", $name, $email,$ph,$gender,$dob,$address,$password,$new_name);
        $res = $stmt->execute();
        if(!$res){
            echo $conn->error;
            return false;
        }
        return $res;
        header("location:home.php");
        
        } catch(Exception $e){
            die($e->getMessage());
        } finally {
            $conn->close();
        }
    }

}
?>
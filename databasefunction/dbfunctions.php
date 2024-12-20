<?php
    require_once "dbconnect.php";
    
    function login($email,$password){
        global $conn;
        try {
            $qry = "SELECT * FROM register WHERE email=? and password=?";
            $stmt = $conn->prepare($qry);
            $stmt->bind_param("ss", $email, $password);
            $res = $stmt->execute();

            if(!$res){
                echo $conn->error;
                return false;
            }
            $res = $stmt->get_result();
            if($res->num_rows >0){
                $result = $res->fetch_assoc();
                return $result;
                
            } else {
                return false;
            }
        } catch (Exception $e) {
            die($e->getMessage());
        } finally{
            $conn->close();
        }
    }
    
    function register($name,$email,$ph,$gender,$dob,$address,$password,$new_name){
        global $conn;
        
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
        
        } catch(Exception $e){
            die($e->getMessage());
        } finally {
            $conn->close();
        }
        
    }
    function package($pname,$package_no,$sname,$ename,$des1,$des2,$des3,$days,$price,$travelby,$rating){
        global $conn;
        try{
            $qry="INSERT INTO package(name,no_places,starting_place,ending_place,des1,des2,des3,days,price,travel_by,rating) values(?,?,?,?,?,?,?,?,?,?,?)";
            $stmt = $conn->prepare($qry);
            $stmt->bind_param("sisssssidsd",$pname,$package_no,$sname,$ename,$des1,$des2,$des3,$days,$price,$travelby,$rating);
            $res = $stmt->execute();
            if(!$res){
                echo $conn->error;
                return false;
            }
            return $res;
            
        } catch(Exception $e){
            die($e->getMessage());
        }
        
    }
    function location($location_name,$package_id,$sequence,$des,$new_name){
        global $conn;
        try{
            $qry="INSERT INTO location(location_name,package_id,image,sequence,description) values(?,?,?,?,?)";
            $stmt = $conn->prepare($qry);
            $stmt->bind_param("sisss", $location_name,$package_id,$new_name,$sequence,$des);
            $res = $stmt->execute();
            if(!$res){
                echo $conn->error;
                return false;
            }
            return $res;
            
        } catch(Exception $e){
            die($e->getMessage());
        } 
        


    }
    function getPackage($pname){
        global $conn;
        try{
            $qry="select package_id,no_places from package where name=? ";
            $stmt = $conn->prepare($qry);
            $stmt->bind_param("s",$pname);
            $res = $stmt->execute();
            $result = $stmt->get_result();
            if($result->num_rows>0){
                
                return $result;
            }
            else{
                return false;
            }
            
        } catch(Exception $e){
            die($e->getMessage());
        } 
        
    }
        
    function getUserSubscriptions($cid) {
        global $conn;
        $query = "SELECT pid FROM subscription WHERE cid = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $cid);
        $stmt->execute();
        $result = $stmt->get_result();
        $pids = [];
        while ($row = $result->fetch_assoc()) {
            $pids[] = $row['pid'];
        }
        return $pids;
    }
    
    function getPackageDetails($pid) {
        global $conn;
        $query = "SELECT name, price, des1, des2, des3 FROM package WHERE package_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $pid);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    
    
    // Fetch images for a package
    function getPackageImages($packageId) {
        global $conn;
        $query = "SELECT img_path FROM picture WHERE package_name = (SELECT name FROM package WHERE package_id = ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $packageId);
        $stmt->execute();
        $result = $stmt->get_result();
        $images = [];
        while ($row = $result->fetch_assoc()) {
            $images[] = $row['img_path'];
        }
        return $images;
    }
    
    // Fetch locations for a package
    function getPackageLocations($packageId) {
        global $conn;
        $query = "SELECT location_name, description, image FROM location WHERE package_id = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $packageId);
        $stmt->execute();
        $result = $stmt->get_result();
        $locations = [];
        while ($row = $result->fetch_assoc()) {
            $locations[] = $row;
        }
        return $locations;
    }
    
    // Add subscription entry
    function addSubscription($cid, $pid) {
        global $conn;
        $query = "INSERT INTO subscription (cid, pid, time) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ii', $cid, $pid);
        return $stmt->execute();
    }
?>
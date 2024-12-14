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
            // } finally {
            //     $conn->close();
            // }
        }
        // function package_image($pname,$unique_name){
        //     global $conn;
        //     try{
        //         $qry="INSERT INTO picture(package_name,img_path) values(?,?)";
        //         $stmt = $conn->prepare($qry);
        //         $stmt->bind_param("ss",$pname,$unique_name);
        //         if (!$stmt->execute()) {
        //             $success = false;
        //             break;
                
        //         }else{
        //             $success = false;
        //             break;
        //         }
        //         if(!$success){
        //             echo $conn->error;
        //             return false;
        //         }
        //         return true;
        //     }catch(Exception $e){
        //             die($e->getMessage());
        //     }finally {
        //         $conn->close();

        //     }
        // }

        
?>

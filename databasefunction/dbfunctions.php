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
    
?>
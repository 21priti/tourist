<?php
require_once '../databasefunction\dbconnect.php';
global $conn;
$query = "SELECT * FROM package";
$stmt = $conn->prepare($query);
$res=$stmt->execute();

if(!$res){
    die($conn->error);
}
$result=$stmt->get_result();
if($result->num_rows>0){
    $data = $result->fetch_all(MYSQLI_ASSOC);   
    echo json_encode($data);
} else {
    echo "No Data Found";
}


?>

<?php
require_once "../databasefunction/dbconnect.php";
global $conn;
$query = "SELECT p.package_id, p.name, p.price, p.des1,p.starting_place,p.ending_place,p.days,p.travel_by, p.rating, p.no_places, (SELECT img_path FROM picture WHERE picture.package_name = p.name LIMIT 1 ) AS img_path FROM package p";
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

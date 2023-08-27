<?php
require("../../connection/connection.php");
header("Content-Type: application/json");

$cid = $_POST['cid'];
$duration = $_POST['duration'];
$rate = $_POST['rate'];
$data = $_POST['data']; 

$msg = null;
$stmt = $conn->prepare("UPDATE `nursery` SET `details` = ? , `duration` = ?, `seed-rate` = ? WHERE `crop-id` = ?");
$stmt->bind_param("sssi", $data, $duration, $rate, $cid);
if ($stmt->execute()) { 
    $msg = "Nursery Data Updated";
    
} else {
    $msg = "Error! " . mysqli_error($conn);
}

$response = array('status' => true, "msg" => $msg);

echo json_encode($response);
?>
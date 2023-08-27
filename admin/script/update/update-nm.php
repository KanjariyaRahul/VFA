<?php
require("../../connection/connection.php");
header("Content-Type: application/json");

$cid = $_POST['cid'];
$time = $_POST['time'];
$rain = $_POST['rain'];
$late = $_POST['late']; 

$msg = null;
$stmt = $conn->prepare("UPDATE `nutrient-management` SET `nm-timely	` = ? , `nm-late` = ?, `nm-rain` = ? WHERE `crop-id` = ?");
$stmt->bind_param("sssi", $time, $late, $rain, $cid);
if ($stmt->execute()) { 
    $msg = "Nutrient management Updated";
    
} else {
    $msg = "Error! " . mysqli_error($conn);
}

$response = array('status' => true, "msg" => $msg);

echo json_encode($response);
?>
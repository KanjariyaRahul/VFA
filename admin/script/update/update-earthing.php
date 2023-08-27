<?php
require("../../connection/connection.php");
header("Content-Type: application/json");

$cid = $_POST['cid'];
$data = $_POST['data']; 

$msg = null;
$stmt = $conn->prepare("UPDATE `earthing-up` SET `earthing-up-details` = ? WHERE `crop-id` = ?");
$stmt->bind_param("si", $data, $cid);
if ($stmt->execute()) { 
    $msg = "Earthing up data Updated";
    
} else {
    $msg = "Error! " . mysqli_error($conn);
}

$response = array('status' => true, "msg" => $msg);

echo json_encode($response);
?>
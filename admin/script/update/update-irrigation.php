<?php
require("../../connection/connection.php");
header("Content-Type: application/json");

$cid = $_POST['cid'];
$data = $_POST['data']; 
$method = $_POST['method'];
$msg = null; 

$stmt = $conn->prepare("UPDATE `irrigation` SET `irrigation-details` = ?, `required-method` = ? WHERE `crop-id` = ?");
$stmt->bind_param("ssi", $data, $method, $cid);
if ($stmt->execute()) { 
    $msg = "Irrigation Details Updated";
    
} else {
    $msg = "Error! " . mysqli_error($conn);
}

$response = array('status' => true, "msg" => $msg);

echo json_encode($response);
?>
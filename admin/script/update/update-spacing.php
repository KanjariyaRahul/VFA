<?php
require("../../connection/connection.php");
header("Content-Type: application/json");

$cid = $_POST['cid'];
$rtr = $_POST['rtr'];
$ptp = $_POST['ptp'];
$pp = $_POST['pp'];

$msg = null;
$stmt = $conn->prepare("UPDATE `spacing-and-plant-population` SET `rtr` = ?, `ptp` = ?, `pp` = ? WHERE `crop-id` = ?");
$stmt->bind_param("dddi", $rtr, $ptp, $pp, $cid);
if ($stmt->execute()) { 
    $msg = "Spacing and plant population Updated";
    
} else {
    $msg = "Error! " . mysqli_error($conn);
}

$response = array('status' => true, "msg" => $msg);

echo json_encode($response);
?>

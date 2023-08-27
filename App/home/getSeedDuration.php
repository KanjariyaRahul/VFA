<?php
require("../connection/conn.php");
header('Content-Type: application/json');
$seed_id = $_GET['sid'];
$result = mysqli_query($con, "SELECT * FROM `seeds` WHERE `id` = $seed_id");
$data = mysqli_fetch_array($result);

$duration = $data['duration'];
$response = array("status" => true, "duration" => $duration);
echo json_encode($response);
?>
        
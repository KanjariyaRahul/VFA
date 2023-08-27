<?php 
    require("../connection/conn.php");
    header("Content-Type: json/application");
    $crop_id = $_POST['crop_id'];
    $sql = "SELECT * FROM `crop-disease` WHERE `crop-id` = $crop_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($row);
?>
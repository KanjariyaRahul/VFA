<?php 
    require("config.php");
    $conn = mysqli_connect($server, $username, $password, $db);
    if(!$conn){
        $response = array("status" => false, "data" => "Insernal server Error");
        echo json_encode($response);
        exit();
    }
?>
<?php 
    header('Content-Type: application/json');
    require("config.php");
    try{
        $conn = mysqli_connect($server, $username, $password, $db);
        // echo json_encode("Connected Succesfully");
    }catch(Exception $e){
        echo json_encode($e->getMessage());
    }
?>
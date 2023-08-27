<?php 
    // header('Content-Type: application/json');
    require("config.php");
    // MySQL query to check if database exist or not 
    // select schema_name from information_schema.schemata where schema_name = 'vfa';
    try{
        $conn = mysqli_connect($server, $username, $password, $db);
        // echo json_encode("Connected Succesfully");

        // Connection using PDO 
        // $pdo = new PDO("mysql:host=$server;dbname=$db", $username, $password);
        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo json_encode($e->getMessage());
    }
?>
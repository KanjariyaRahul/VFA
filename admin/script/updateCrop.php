<?php 
    require("../connection/connection.php");
    header("Content-Type: application/json");
    $id = $_GET['id'];
    $name = $_GET['name'];
    $desc = $_GET['desc'];
    $msg = null;
    $sql = "UPDATE `crop` SET `name` = '$name', `description` = '$desc' WHERE `id` = '$id'";
    if(mysqli_query($conn, $sql)){
        $msg = "Crop Details are updated Successfully";
    }else{
        $msg = "Error! " . mysqli_error($conn);
    }

    $response = array('status' => true, "msg" => $msg);

    echo json_encode($response);

?>
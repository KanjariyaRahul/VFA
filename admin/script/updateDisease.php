<?php 
    require("../connection/connection.php");
    header("Content-Type: application/json");
    $id = $_GET['id'];
    $title = $_GET['title'];
    $desc = $_GET['desc'];
    $sym = $_GET['sym'];

    $msg = null;
    $sql = "UPDATE `crop-disease` SET `title` = '$title', `description` = '$desc', `symptoms` = '$sym' WHERE `id` = '$id'";
    if(mysqli_query($conn, $sql)){
        $msg = "Crop Disease are updated Successfully";
    }else{
        $msg = "Error! " . mysqli_error($conn);
    }

    $response = array('status' => true, "msg" => $msg);

    echo json_encode($response);

?>
<?php 
    require("../connection/connection.php");
    header("Content-Type: application/json");
    $theme = $_POST['theme'];
    $id = $_SESSION['adminId'];
    $sql = "UPDATE `admin` SET `theme` = '$theme' WHERE id = '$id'";
    $msg = null;
    if(mysqli_query($conn, $sql)){
        $msg = "Theme Applied";
        $_SESSION["theme"] = $theme;
    }else{
        $msg = mysqli_error($conn);
    }
    $response = array('status' => true, "msg" => $msg);
?>
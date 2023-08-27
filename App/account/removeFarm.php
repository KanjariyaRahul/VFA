<?php 
    require("../connection/conn.php");
    $id = $_GET['id'];

    $sql = "DELETE FROM `crop-tracking` WHERE `crop-tracking`.`id` = '$id'";

    if(mysqli_query($con, $sql)){
        header("Location: index.php");
    }else{
        header("Location: index.php?msg=".mysqli_error($con));
    }
?>
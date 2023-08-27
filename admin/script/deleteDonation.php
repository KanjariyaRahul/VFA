<?php 
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `donation` WHERE id = '$id'";
    if(mysqli_query($conn, $sql)){
        header("Location: ../view-donation.php?msg=Record Deleted");
    }else{
        header("Location: ../view-donation.php?msg=".mysqli_error($conn));
    }
?>
<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `farmer` WHERE `id` = '$id'";
    try{
        if(mysqli_query($conn, $sql)){
            header("Location: ../manage-farmer.php?msg=Farmer Deleted Succesfully");
        }else{
            header("Location: ../manage-farmer.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-farmer.php?msg=" . $e->getMessage());
    }
?>
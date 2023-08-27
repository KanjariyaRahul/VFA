<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `recent-updates` WHERE `id` = '$id'";
    $img = "SELECT * FROM `recent-updates` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $img);
    $data = mysqli_fetch_assoc($result);
    try{
        if(mysqli_query($conn, $sql) && unlink("../../App/img/upload/recent-update/".$data['image'])){
            header("Location: ../manage-updates.php?msg=Messege Deleted Succesfully");
        }else{
            header("Location: ../manage-updates.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-updates.php?msg=" . $e->getMessage());
    }
?>
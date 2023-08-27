<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `seeds` WHERE `id` = '$id'";
    $img = "SELECT * FROM `seeds` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $img);
    $data = mysqli_fetch_assoc($result);
    try{
        $deleteEvents = "DELETE FROM `crop-event` WHERE `seed-id` = '$id'";
        if(mysqli_query($conn, $deleteEvents)){ 
            if(mysqli_query($conn, $sql) && unlink("../../App/img/upload/seed/".$data['image'])){
                header("Location: ../manage-seed-info.php?msg=Seed Deleted Succesfully");
            }else{
                header("Location: ../manage-seed-info.php?msg=" . mysqli_error($conn));
            }
        }else{
            header("Location: ../manage-seed-info.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-seed-info.php?msg=" . $e->getMessage());
    }
?>
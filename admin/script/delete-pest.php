<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `preventive-measure` WHERE `id` = '$id'";
    $img = "SELECT * FROM `preventive-measure` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $img);
    $data = mysqli_fetch_assoc($result);
    try{
        if(mysqli_query($conn, $sql) && unlink("../../App/img/upload/pest/".$data['image'])){
            header("Location: ../manage-pesticide.php?msg=Pesticide Deleted Succesfully");
        }else{
            header("Location: ../manage-pesticide.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-pesticide.php?msg=" . $e->getMessage());
    }
?>
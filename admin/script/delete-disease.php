<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `crop-disease` WHERE `id` = '$id'";
    $img = "SELECT * FROM `crop-disease` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $img);
    $data = mysqli_fetch_assoc($result);
    try{
        if(mysqli_query($conn, $sql) && unlink("../../App/img/disease/".$data['image'])){
            header("Location: ../manage-disease.php?msg=Disease Deleted Succesfully");
        }else{
            header("Location: ../manage-disease.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-disease.php?msg=" . $e->getMessage());
    }
?>
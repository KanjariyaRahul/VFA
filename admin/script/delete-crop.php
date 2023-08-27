<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    // Deleting all table records that contains Crop id as foreign key 
    mysqli_query($conn, "DELETE FROM `crop-basic-info` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `crop-disease` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `crop-event` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `crop-faq` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `crop-tracking` WHERE `crop_id` = '$id'");
    mysqli_query($conn, "DELETE FROM `earthing-up` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `favourable-climate` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `gap-feeling` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `harvesting` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `irrigation` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `land-preparation` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `nursery` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `nutrient-management` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `root-deep-treatment` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `seeds` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `soil` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `sowing` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `spacing-and-plant-population` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `temperature` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `transplanting` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `water` WHERE `crop-id` = '$id'");
    mysqli_query($conn, "DELETE FROM `yield` WHERE `crop-id` = '$id'");

    $sql = "DELETE FROM `crop` WHERE `id` = '$id'";
    $img = "SELECT * FROM `crop` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $img);
    $data = mysqli_fetch_assoc($result);
    try{
        if(mysqli_query($conn, $sql) && unlink("../../App/img/upload/crop/".$data['image'])){
            header("Location: ../manage-crop.php?msg=Crop Deleted Succesfully");
        }else{
            header("Location: ../manage-crop.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-crop.php?msg=" . $e->getMessage());
    }
?>
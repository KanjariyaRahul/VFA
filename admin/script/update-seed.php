<?php 
    require("../connection/connection.php");
    $id = $_GET['id'];
    $cid = $_GET['cid'];
    $name = $_GET['name'];
    $desc = $_GET['desc'];
    $duration = $_GET['duration'];
    $yield = $_GET['yield'];
    $season = $_GET['season'];

    $sql = "UPDATE `seeds` SET `crop-id` = '$cid', `seed-name` = '$name', `description` = '$desc', `duration` = '$duration', `yield` = '$yield', `season` = '$season' WHERE `seeds`.`id` = '$id';";
    try{
        if(mysqli_query($conn, $sql)){
            header("Location: ../manage-seed-info.php?msg=Seed Details Updated Succesfully");
        }else{
            header("Location: ../manage-seed-info.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-seed-info.php?msg=" . $e->getMessage());
    }
?>
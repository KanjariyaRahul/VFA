<?php
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `news` WHERE `id` = '$id'";
    $img = "SELECT * FROM `news` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $img);
    $data = mysqli_fetch_assoc($result);
    try{
        if(mysqli_query($conn, $sql) && unlink("../../App/img/upload/news/".$data['image'])){
            header("Location: ../manage-news.php?msg=News Deleted Succesfully");
        }else{
            header("Location: ../manage-news.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-news.php?msg=" . $e->getMessage());
    }
?>
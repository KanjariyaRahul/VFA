<?php 
    require("../connection/connection.php");
    $id = $_GET['id'];
    if(isset($_GET['s'])){
        $s = $_GET['s'];
        $sql = "UPDATE `feed-back` SET `status` = '$s' WHERE `id` = '$id';";
        try{
            if(mysqli_query($conn, $sql)){
                header("Location: ../feed-back.php?msg=Status changed successfully");
            }else{
                header("Location: ../feed-back.php?msg=" . mysqli_error($conn));
            }
        }
        catch(Exception $e){
            header("Location: ../feed-back.php?msg=" . $e->getMessage());
        }
    }
    
    if(isset($_GET['d'])){
        $sql = "DELETE FROM `feed-back` WHERE `id` = '$id'";
        try{
            if(mysqli_query($conn, $sql)){
                header("Location: ../feed-back.php?msg=Messege Deleted Succesfully");
            }else{
                header("Location: ../feed-back.php?msg=" . mysqli_error($conn));
            }
        }
        catch(Exception $e){
            header("Location: ../feed-back.php?msg=" . $e->getMessage());
        }
    }
?>
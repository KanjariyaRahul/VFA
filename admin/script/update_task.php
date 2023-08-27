<?php 
    require("../connection/connection.php");
    $id = $_GET['id'];
    if(isset($_GET['s'])){
        $s = $_GET['s'];
        $sql = "UPDATE `task` SET `status` = '$s' WHERE `id` = '$id';";
        try{
            if(mysqli_query($conn, $sql)){
                header("Location: ../view-all-task.php?msg=Status changed successfully");
            }else{
                header("Location: ../view-all-task.php?msg=" . mysqli_error($conn));
            }
        }
        catch(Exception $e){
            header("Location: ../view-all-task.php?msg=" . $e->getMessage());
        }
    }
    
    if(isset($_GET['d'])){
        $sql = "DELETE FROM `task` WHERE `id` = '$id'";
        try{
            if(mysqli_query($conn, $sql)){
                header("Location: ../view-all-task.php?msg=Messege Deleted Succesfully");
            }else{
                header("Location: ../view-all-task.php?msg=" . mysqli_error($conn));
            }
        }
        catch(Exception $e){
            header("Location: ../view-all-task.php?msg=" . $e->getMessage());
        }
    }
?>
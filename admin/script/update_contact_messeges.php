<?php 
    require("../connection/connection.php");
    $id = $_GET['id'];
    if(isset($_GET['s'])){
        $s = $_GET['s'];
        $sql = "UPDATE `contact` SET `status` = '$s' WHERE `id` = '$id';";
        try{
            if(mysqli_query($conn, $sql)){
                header("Location: ../contact-messeges.php?msg=Status changed successfully");
            }else{
                header("Location: ../contact-messeges.php?msg=" . mysqli_error($conn));
            }
        }
        catch(Exception $e){
            header("Location: ../contact-messeges.php?msg=" . $e->getMessage());
        }
    }
    
    if(isset($_GET['d'])){
        $sql = "DELETE FROM `contact` WHERE `id` = '$id'";
        try{
            if(mysqli_query($conn, $sql)){
                header("Location: ../contact-messeges.php?msg=Messege Deleted Succesfully");
            }else{
                header("Location: ../contact-messeges.php?msg=" . mysqli_error($conn));
            }
        }
        catch(Exception $e){
            header("Location: ../contact-messeges.php?msg=" . $e->getMessage());
        }
    }
?>
<?php 
    require("../connection/connection.php");
    $pid = $_GET['pid'];
    $name = $_GET['name'];
    $desc = $_GET['desc'];
    $q = $_GET['q'];
    

    $sql = "UPDATE `preventive-measure` SET `pest-name` = '$name', `description` = '$desc', `quantity` = '$q' WHERE id='$pid'";
    try{
        if(mysqli_query($conn, $sql)){
            header("Location: ../manage-pesticide.php?msg=Pesticides details Updated Succesfully");
        }else{
            header("Location: ../manage-pesticide.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-pesticide.php?msg=" . $e->getMessage());
    }
?>

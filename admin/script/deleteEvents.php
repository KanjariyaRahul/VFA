<?php 
    require("../connection/connection.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM `crop-event` WHERE `id`='$id'";
    if(mysqli_query($conn, $sql)){
        echo "Event Deleted";
        header("Location: ../manage-events.php");
    }else{
        echo "Event Not Deleted" . mysqli_error($conn);
    }
?>
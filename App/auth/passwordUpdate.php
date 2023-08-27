<?php 
    require("../connection/conn.php");
    $hash = $_GET['hash'];
    $user = $_GET['user'];  

    $newPassword = md5($_GET['pass']);

    // dont forget to store password in Hash value
    $sql = "UPDATE `farmer` SET `password` = '$newPassword' WHERE `username` = '$user' AND `mail_hash` = '$hash';";

    if(mysqli_query($con, $sql)){
        if(mysqli_affected_rows($con) == 1){
            ?>
            Your Password was successfully Updated Please Login with your new credentials
            <?php
        }else{
            ?>
            Your password was not Updated please try again
            <?php
        }
    }
?>
<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `sowing`(`crop-id`, `sowing-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `sowing`(`crop-id`, `sowing-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Sowing Details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
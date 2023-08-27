<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `water`(`crop-id`, `water-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `water`(`crop-id`, `water-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Water Details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
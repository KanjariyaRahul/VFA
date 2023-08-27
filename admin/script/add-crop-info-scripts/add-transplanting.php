<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `transplanting`(`crop-id`, `transplanting-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `transplanting`(`crop-id`, `transplanting-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Transplanting Details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
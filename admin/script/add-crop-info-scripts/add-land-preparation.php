<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `land-preparation`(`crop-id`, `land-preparation`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `land-preparation`(`crop-id`, `land-preparation`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Land preparation details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `land-preparation`(`crop-id`, `land-preparation`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `root-deep-treatment`(`crop-id`, `details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Root Deep Treatment details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
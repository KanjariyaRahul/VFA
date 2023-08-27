<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `temperature`(`crop-id`, `temperature-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `temperature`(`crop-id`, `temperature-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Temperature Details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
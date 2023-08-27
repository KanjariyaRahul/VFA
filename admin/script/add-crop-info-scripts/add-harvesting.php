<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `harvesting`(`crop-id`, `harvesting-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `harvesting`(`crop-id`, `harvesting-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Harvesting Details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
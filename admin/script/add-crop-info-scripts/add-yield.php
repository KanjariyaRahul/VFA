<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `yield`(`crop-id`, `yield-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `yield`(`crop-id`, `yield-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Yield Details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    $duration = $_POST['duration'];
    $rate = $_POST['rate'];
    // $sql = "INSERT INTO `land-preparation`(`crop-id`, `land-preparation`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `nursery`(`crop-id`, `details`, `duration`, `seed-rate`) VALUES(?,?,?,?)");
    $sql->bind_param("isss",$cid, $details, $duration, $rate);
    if($sql->execute()){
        ?>
        Nursery details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
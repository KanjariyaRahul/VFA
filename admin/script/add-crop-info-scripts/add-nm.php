<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $time = $_POST['time']; 
    $rain = $_POST['rain'];
    $late = $_POST['late'];
    // $sql = "INSERT INTO `nutrient-management`(`crop-id`, `nutrient-management-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `nutrient-management`(`crop-id`, `nm-timely`,`nm-late`,`nm-rain`) VALUES(?,?,?,?)");
    $sql->bind_param("isss",$cid, $time, $late, $rain);
    if($sql->execute()){
        ?>
        Nutrient management details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
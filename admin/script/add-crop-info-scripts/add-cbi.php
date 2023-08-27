<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $expenses = $_POST['expenses'];
    $income = $_POST['income'];
    $harvest = $_POST['harvest'];
    $sql = $conn->prepare("INSERT INTO `crop-basic-info`(`crop-id`, `expenses`,`income`,`harvest`) VALUES(?,?,?,?)");
    $sql->bind_param("iiii",$cid,$expenses,$income,$harvest);
    if($sql->execute()){
        ?>
        Crop Basic Info inserted
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
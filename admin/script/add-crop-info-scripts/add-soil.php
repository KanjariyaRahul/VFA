<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    $soil = $_POST['soil'];
    // $sql = "INSERT INTO `soil`(`crop-id`, `soil-details`, `req-method`) VALUES('$cid', '$details', '$soil')";
    $sql = $conn->prepare("INSERT INTO `soil`(`crop-id`, `soil-details`, `req-method`) VALUES(?,?,?)");
    $sql->bind_param("iss",$cid, $details,$soil);
    if($sql->execute()){
        ?>
        Soil details added successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
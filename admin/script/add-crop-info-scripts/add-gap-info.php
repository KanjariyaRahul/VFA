<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `gap-feeling`(`crop-id`, `gap-details`) VALUES('$cid', '$details')";
    
    $sql = $conn->prepare("INSERT INTO `gap-feeling`(`crop-id`, `gap-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
        Gap Feeling details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
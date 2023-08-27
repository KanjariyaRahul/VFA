<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    // $sql = "INSERT INTO `earthing-up`(`crop-id`, `earthing-up-details`) VALUES('$cid', '$details')";
    $sql = $conn->prepare("INSERT INTO `earthing-up`(`crop-id`, `earthing-up-details`) VALUES(?,?)");
    $sql->bind_param("is",$cid, $details);
    if($sql->execute()){
        ?>
            Earthing up details Added Successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
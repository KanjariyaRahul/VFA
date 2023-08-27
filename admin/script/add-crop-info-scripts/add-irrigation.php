<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $details = $_POST['details'];
    $method = $_POST['method'];
    // $sql = "INSERT INTO `irrigation`(`crop-id`, `irrigation-details`, `required-method`) VALUES('$cid', '$details', '$method')";
    $sql = $conn->prepare("INSERT INTO `irrigation`(`crop-id`, `irrigation-details`, `required-method`) VALUES(?,?,?)");
    $sql->bind_param("iss",$cid, $details, $method);
    if($sql->execute()){
        ?>
        Irrigation details added successfully
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
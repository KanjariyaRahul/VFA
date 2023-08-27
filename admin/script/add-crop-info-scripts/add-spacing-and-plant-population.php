<?php 
    require("../../connection/connection.php");
    $cid = $_POST['cid'];
    $rtr = $_POST['rtr'];
    $ptp = $_POST['ptp'];
    $pp = $_POST['pp'];
    // $sql = "INSERT INTO `spacing-and-plant-population`(`crop-id`, `rtr`,`ptp`, `pp`) VALUES('$cid', '$rtr','$ptp','$pp')";
    $sql = $conn->prepare("INSERT INTO `spacing-and-plant-population`(`crop-id`, `rtr`,`ptp`, `pp`) VALUES(?,?,?,?)");
    $sql->bind_param("iddd",$cid, $rtr,$ptp,$pp);
    if($sql->execute()){
        ?>
        Spacing and Plant Population Info inserted
        <?php
    }else{
        ?>
        <?=mysqli_error($conn)?>
        <?php
    }
?>
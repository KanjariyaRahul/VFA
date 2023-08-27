<?php
require("../connection/connection.php");

$name = $_GET["title"];
$msg = $_GET["desc"];
try {
    // $sql = "INSERT INTO `contact` (`name`, `mobile`, `msg`) VALUES ('$name', '$mobile', '$msg');";
    $sql = $conn->prepare("INSERT INTO `task` (`title`, `msg`) VALUES(?,?)");
    $sql->bind_param("ss",$name, $msg);
    if($sql->execute()){
        header("Location: ../add-task.php?msg=New Task Added");
    } else {
        header("Location: ../add-task.php?msg=Task was not Added=> ".mysqli_error($conn));
    }
} catch (mysqli_sql_exception $e) {
    header("Location: ../add-task.php?msg=".$e->getMessage());
}

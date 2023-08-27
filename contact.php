<?php
require("./App/connection/conn.php");
header('Content-Type: application/json');

$name = $_GET["name"];
$mobile = $_GET["mobile"];
$msg = $_GET["msg"];
try {
    // $sql = "INSERT INTO `contact` (`name`, `mobile`, `msg`) VALUES ('$name', '$mobile', '$msg');";
    $sql = $con->prepare("INSERT INTO `contact` (`name`, `mobile`, `msg`) VALUES(?,?,?)");
    $sql->bind_param("sss",$name, $mobile, $msg);
    if($sql->execute()){
        $response = array("status" => true, "data" => "🕘 Good news! your concern will be addressed on priority🤩 Thank you for reaching out. 👍 Keep enjoying smart farming with VFA. 🌱 Grow efficient, Grow more!🌱 Thank you for contacting VFA! 👍

        👉 You can also reach out to us by calling on 📱 +91 6353485414 between 09:00 A.M - 09:00 P.M. 👍");
        echo json_encode($response);
    } else {
        $response = array("status" => false, "data" => mysqli_error($con));
        echo json_encode($response);
    }
} catch (mysqli_sql_exception $e) {
    $response = array("status" => false, "data" => "You already Contacted us one time Please wait for a moment our team member will contact you Soon!, Thank you");
    echo json_encode($response);
}

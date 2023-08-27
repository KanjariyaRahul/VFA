<?php
require("../connection/connection.php");
header('Content-Type: application/json');
$username = $_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password';";

// Executing Query 
if ($result = mysqli_query($conn, $sql)) { 
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['adminLogin'] = true;
        $_SESSION['adminId'] = $rows[0]['id'];
        $_SESSION['name'] = $rows[0]['name'];
        $_SESSION['username'] = $rows[0]['username'];
        $_SESSION['password'] = $rows[0]['password'];
        $_SESSION["theme"] = $rows[0]['theme'];
        $_SESSION['profile'] = $rows[0]['image'];
        $sql = "SELECT * FROM `settings`";
        if ($result = mysqli_query($conn, $sql)) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['display-error'] == "true") {
                    $_SESSION['dev-mode'] = true;
                }else{
                    $_SESSION['dev-mode'] = false;
                }
                if ($row['maintenance'] == "true") {
                    $_SESSION['maintenance'] = true;
                }else{
                    $_SESSION['maintenance'] = false; 
                }
                $_SESSION['smtp-host'] = $row['smtp-host'];
                $_SESSION['smtp-username'] = $row['smtp-username'];
                $_SESSION['smtp-password'] = $row['smtp-password'];
                $_SESSION['smtp-port'] = $row['smtp-port'];
                $_SESSION['smtp-from'] = $row['smtp-from'];
                $_SESSION['smtp-from-name'] = $row['smtp-from-name'];
            }
        }
        // header("Location: ../index.php");
        $response = array("status" => "true");
        echo json_encode($response);
    } else {
        $response = array("status" => false, "data" => "Invalid Username or Password");
        echo json_encode($response);
    }
} else {
    $response = array("status" => false, "data" => mysqli_error($conn));
    echo json_encode($response);
}
?>
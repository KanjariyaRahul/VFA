<?php 
    require("../connection/connection.php");
    header("Content-Type: application/json");
    $mode = $_POST['mode'];
    $sql = "UPDATE `settings` SET `display-error` = '$mode' WHERE  id = 1";
    if(mysqli_query($conn, $sql)){
        $_SESSION['dev-mode'] = $mode;
        $response = array("status"=> true, "msg" => "Devloper Mode Turned Toggled");
        echo json_encode($response);
    }
?>
<?php 
    include("../connection/connection.php");
    header("Content-Type: application/json");
    $host = $_POST['host'];
    $smtp_user = $_POST['s-user'];
    $smtp_password = $_POST['s-password'];
    $smtp_port = $_POST['s-port'];
    $smtp_from = $_POST['s-from'];
    $smtp_from_name = $_POST['s-from-name'];

    $response = array('status' => false, "msg" => "Undefined Key");
    try {
        $stmt = $conn->prepare("UPDATE `settings` SET `smtp-host` = ?, `smtp-username` = ?, `smtp-password` = ?, `smtp-port` = ?, `smtp-from` = ?, `smtp-from-name	` = ? WHERE `id` = 1");
    
        $stmt->bind_param("ssssss", $host, $smtp_user, $smtp_password, $smtp_port, $smtp_from, $smtp_from_name);
        if ($stmt->execute()) {
          $msg = 'Settings Saved Succesfully';
          $response = array('status' => true, "msg" => $msg);
        }
      } catch (Exception $e) {
        $msg = $e->getMessage();
        $response = array('status' => false, "msg" => $msg);
    
      }
echo json_encode($response);

?>
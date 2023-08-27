<?php
header('Content-Type: application/json');
require("../connection/connection.php");
    $cid = $_POST["cid"];
    $question = $_POST["question"]; 
    $ans = $_POST["ans"]; 
      try {
        $sql = "INSERT INTO `crop-faq` (cid, question, ans) VALUES ('$cid', '$question', '$ans')";
        // Execute query
        if ($question != null || $ans != null || $cid != null) {
            $result = mysqli_query($conn, $sql);
            if ($result) {
              $msg = 'FAQ Added Succesfully';
              $response = array("status" => true, "data" => $msg);
              echo json_encode($response);
            }
        } else {
          $msg = 'Trying to enter null values';
          $response = array("status" => false, "data" => $msg);
          echo json_encode($response);
        }
    } catch (Exception $e) {
      $msg = $e->getMessage();
      $response = array("status" => false, "data" => $msg);
      echo json_encode($response);
    }
    
?>

<?php
require("../connection/connection.php");
header('Content-Type: application/json');
    $crop_name = $_POST["name"];
    $crop_desc = $_POST["desc"]; 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../App/img/upload/crop/". $filename;
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
      try {
        $sql = "INSERT INTO `crop` (name, description, image) VALUES ('$crop_name', '$crop_desc', '$filename')";
        // Execute query
        if ($crop_name != null || $filename != null) {
            $result = mysqli_query($conn, $sql);
            if ($result) {
              $msg = 'Crop Added Succesfully';
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
  }
  else{
    $msg = 'image not uploaded';
      $response = array("status" => false, "data" => $msg);
      echo json_encode($response);
  }
    
?>

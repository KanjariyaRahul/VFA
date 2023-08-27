<?php
require("../connection/connection.php");
header('Content-Type: application/json');
    $crop_name = $_POST["name"];
    $crop_desc = $_POST["desc"];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../App/img/upload/crop/". $filename;
    try {
        $sql = "INSERT INTO `crop` (name, description, image) VALUES ('$crop_name', '$crop_desc', '$filename')";
        // Execute query
        if ($crop_name != null || $filename != null) {
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // Now let's move the uploaded image into the folder: image
                if (move_uploaded_file($tempname, $folder)) {
                    $msg = '<div class="card bs-toast toast fade show bg-success m-2" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                      <i class="bx bx-bell me-2"></i>
                      <div class="me-auto fw-semibold"><h1> Success </h1></div>
                      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                      New Crop added Successfully
                    </div>
                  </div>';
                    $response = array("status" => true, "data" => $msg);
                    echo json_encode($response);
                }
            }
        } else {
            $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Sorry! </strong> You can not upload null value into Database.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      $response = array("status" => false, "data" => $msg);
      echo json_encode($response);
        }
    } catch (Exception) {
        $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Exception! </strong> Failed to upload Image.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      $response = array("status" => false, "data" => $msg);
      echo json_encode($response);
    }
?>

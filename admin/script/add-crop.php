<?php
require("../connection/connection.php");
header("Content-Type: application/json");
$parentCategory = $_POST["parentCategory"];
$childCategory = $_POST["childCategory"];
$crop_name = $_POST["name"];  
$crop_desc = $_POST["desc"]; 
$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "../../App/img/upload/crop/" . $filename;

$response = array('status' => false, "msg" => "Undefined Key");
// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
  try {
    $stmt = $conn->prepare("INSERT INTO `crop` (name, description, `parent-category`, `child-category`, image) VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss",$crop_name, $crop_desc, $parentCategory, $childCategory, $filename);
    // Execute query 
    // $result = mysqli_query($conn, $sql);
    if ($stmt->execute()) {
      $msg = 'Crop Added Succesfully';
      $response = array('status' => true, "msg" => $msg);
      // echo $msg;
      // header("Location: ../add-new-crop.php?msg=".$msg);

    }
  } catch (Exception $e) {
    $msg = $e->getMessage();
    $response = array('status' => false, "msg" => $msg);
    // echo $msg;
    // header("Location: ../add-new-crop.php?msg=".$msg);

  }
} else {
  $msg = 'image not uploaded';
  // echo $msg;
  // header("Location: ../add-new-crop.php?msg=".$msg);
}

// echo "outside";
echo json_encode($response);
?>
<?php
require("../connection/connection.php");
header("Content-Type: application/json");
$title = $_POST["title"];
$content = $_POST["content"];
$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "../../App/img/upload/blog/" . $filename;

$response = array('status' => false, "msg" => "Undefined Key");

// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
  try {
    $stmt = $conn->prepare("INSERT INTO `blog` (title, content, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $content, $filename);
    if ($stmt->execute()) {
      $msg = 'Blog Published Succesfully';
      $response = array('status' => true, "msg" => $msg);
    }
  } catch (Exception $e) {
    $msg = $e->getMessage();
    $response = array('status' => false, "msg" => $msg);

  }
} else {
  $msg = 'image not uploaded';
}
echo json_encode($response);
?>
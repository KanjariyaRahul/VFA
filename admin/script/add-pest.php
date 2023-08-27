<?php
require("../connection/connection.php");
header("Content-Type: application/json");
$did = $_POST["did"];  
$pest_name = $_POST["name"];  
$pest_desc = $_POST["desc"]; 
$quantity = $_POST["quantity"]; 
$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "../../App/img/upload/pest/" . $filename;

$response = array('status' => false, "msg" => "Undefined Key");
// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
  try {
    $stmt = $conn->prepare("INSERT INTO `preventive-measure` (`disease-id`, `pest-name`, `description`, `quantity`, `image`) VALUES(?,?,?,?,?)");
    $stmt->bind_param("issss", $did, $pest_name, $pest_desc, $quantity, $filename);
    if ($stmt->execute()) {
      $msg = 'Pesticide Added Succesfully';
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
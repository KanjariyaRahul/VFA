<?php
include("../connection/connection.php");
header("Content-Type: application/json");
$id = $_SESSION['adminId'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$filename = $_FILES["profile"]["name"];
$tempname = $_FILES["profile"]["tmp_name"];
$folder = "../../App/img/adminProfile/" . $filename;
$msg = null;
$response = array('status' => false, "msg" => "Undefined Key");
// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
  try {
    $stmt = $conn->prepare("UPDATE `admin` SET `name` = ?, `username` = ?, `password` = ?, `image` = ? WHERE `id` = ?");

    $stmt->bind_param("ssssi", $name, $username, $password, $filename, $id);
    // $result = mysqli_query($conn, $sql);
    if ($stmt->execute()) {
      $msg = 'Settings Saved Succesfully';
      $response = array('status' => true, "msg" => $msg ,"name" => $name, "username"=>$username,"password"=>$password,"file"=>$filename);
      $_SESSION['profile'] = $filename;
      $_SESSION['name'] = $name;
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
    }
  } catch (Exception $e) {
    $msg = $e->getMessage();
    $response = array('status' => true, "msg" => $msg);
  }
} else {
  $msg = 'Image not uploaded';
  $response = array('status' => true, "msg" => $msg);
}
echo json_encode($response);
?>
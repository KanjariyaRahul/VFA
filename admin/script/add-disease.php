<?php
require("../connection/connection.php");

$cid = $_POST['cid'];
$d_name = $_POST['d-title'];
$d_desc = $_POST['d-desc'];
$d_sym = $_POST['d-sym'];
 
$filename = $_FILES['uploadfile']['name'];
$tempname = $_FILES['uploadfile']['tmp_name'];
$folder = "../../App/img/disease/" . $filename;
// Now let's move the uploaded image into the folder: image
if (move_uploaded_file($tempname, $folder)) {
  try {
    $stmt = $conn->prepare("INSERT INTO `crop-disease` (`crop-id`, `title`, `description`, `symptoms`, `image`) VALUES (?,?,?,?,?);");
    // Execute query
    $stmt->bind_param("issss", $cid, $d_name, $d_desc, $d_sym, $filename);
    if ($cid != null || $filename != null) {
      if ($stmt->execute()) {
        echo "Record Inserted";
        header("Location: ../add-crop-disease.php?msg=Disease data Added succesfully");
      }
      else {
        echo "Record not inserted";
        header("Location: ../add-crop-disease.php?msg=" . mysqli_error($conn));
      }
    } 
    else{
        echo "Null values found";
        header("Location: ../add-crop-disease.php?msg=trying to insert null values");
    }
  } catch (Exception $e) {
    echo "Exception: " . $e->getMessage();
    header("Location: ../add-crop-disease.php?msg=" . $e->getMessage());
  }
} else {
  echo "Image not Uploaded";
  header("Location: ../add-crop-disease.php?msg=Image not Uploaded");
}

?>

<!-- 
http://localhost/vfa/admin/script/add-disease.php?cid=5&d-title=sdfsdf&d-desc=sdfdsf&d-sym=sdfsd&d-pest=fsdf&uploadfile=Pebble+People+-+Meditating.png
 -->
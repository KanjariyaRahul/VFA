<?php
require("../connection/connection.php");

    $cid = $_GET['cid'];
    $d_name = $_GET['d-title'];
    $d_desc = $_GET['d-desc'];
    $d_sym = $_GET['d-sym'];
    $d_pest = $_GET['d-pest'];

    $filename = $_FILES['uploadfile']['name'];
    $tempname = $_FILES['uploadfile']['tmp_name'];
    $folder = "../../App/img/disease/". $filename;
    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
      try {
        $sql = "INSERT INTO `crop-disease` (`crop-id`, `title`, `description`, `symptoms`, `solution`, `image`) VALUES ('$cid', '$d_name', '$d_desc', '$d_sym', '$d_pest', '$filename');";
        // Execute query
        if ($crop_name != null || $filename != null) {
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Record Inserted";
                // header("Location: ../php/add-planting-m.php?msg=Disease data Added succesfully&a=true");
            }
        } else {
            echo "Record not inserted";
            // header("Location: ../php/add-planting-m.php?msg=Disease data was not added succesfully&a=false");
        }
    } catch (Exception $e) {
        echo "Exception: " . $e->getMessage();
        // header("Location: ../php/add-planting-m.php?msg=".$e->getMessage()."&a=false");
    }
  }
  else{
    echo "Image not Uploaded";
    // header("Location: ../php/add-planting-m.php?msg=image not uploade&a=false");
  }
    
?>

<!-- 
http://localhost/vfa/admin/script/add-disease.php?cid=5&d-title=sdfsdf&d-desc=sdfdsf&d-sym=sdfsd&d-pest=fsdf&uploadfile=Pebble+People+-+Meditating.png
 -->

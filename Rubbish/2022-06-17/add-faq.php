<?php
require("../connection/connection.php");
$cid = $_POST["cid"];
$question = $_POST["question"];
$ans = $_POST["ans"];
try {
  $sql = "INSERT INTO `crop-faq` (`crop-id`	, `question`, `ans`) VALUES ('$cid', '$question', '$ans')";
  // Execute query
  if ($question != null || $ans != null || $cid != null) {
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "Record Inserted";
      header("Location: ../php/add-crop-faq.php?msg=FAQ Added succesfully&a=true");
    }
  } else {
    echo "You are trying to insert NULL values";
    // header("Location: ../php/add-crop-faq.php?msg=FAQ data Added succesfully&a=false");
  }
} catch (Exception $e) {
  echo $e->getMessage();
  // header("Location: ../php/add-crop-faq.php?msg=".$e->getMessage()."&a=false");5
}
?>

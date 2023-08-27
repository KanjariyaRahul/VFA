<?php
require("../connection/connection.php");
$cid = $_GET["cid"];
$question = $_GET["question"];
$ans = $_GET["ans"];
try {
  $stmt = $conn->prepare("INSERT INTO `crop-faq` (`crop-id`	, `question`, `ans`) VALUES (?,?,?)");
  // Execute query
  $stmt->bind_param("iss",$cid, $question,$ans);
  if ($question != null || $ans != null || $cid != null) {
    if ($stmt->execute()) {
      echo "Record Inserted";
      header("Location: ../add-crop-faq.php?msg=FAQ Added succesfully&a=true");
    }
    else{
      echo mysqli_error($conn);
      header("Location: ../add-crop-faq.php?msg=".mysqli_error($conn));
    }
  } else {
    echo "You are trying to insert NULL values";
    header("Location: ../add-crop-faq.php?msg=Null values Found");
  }
} catch (Exception $e) {
  echo $e->getMessage();
  header("Location: ../add-crop-faq.php?msg=".$e->getMessage()."&a=false");
}
?>

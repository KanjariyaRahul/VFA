<?php
require("../../connection/connection.php");
header("Content-Type: application/json");

$cid = $_POST['cid'];
$expense = $_POST['ex'];
$income = $_POST['in'];
$harvest = $_POST['hr'];
 
// Using MySQLI
// $sql = "UPDATE `crop-basic-info` SET `expenses` = '$expense', `income` = '$income', `harvest` = '$harvest' WHERE `crop-id` = '$cid'";

// UPDATE `crop-basic-info` SET `expenses` = 123, `income` = 456, `harvest` = 789 WHERE `crop-id` = 1
// if (mysqli_query($conn, $sql)) {     
//     $msg = "Crop Basic Info updated";
     

// } else {
//     $msg = "Error! " . mysqli_error($conn);
// }


// Using PDO
$msg = null;
$stmt = $conn->prepare("UPDATE `crop-basic-info` SET `expenses` = ?, `income` = ?, `harvest` = ? WHERE `crop-id` = ?");
$stmt->bind_param("iiii", $expense, $income, $harvest, $cid);
if ($stmt->execute()) { 
    $msg = "Crop Basic Info updated";
    $para = "cid: " . $cid . ", " . "Expenses: " . $expense . ", " . "Income: " . $income . ", " . "Harvest: " . $harvest; 
    
} else {
    $msg = "Error! " . mysqli_error($conn);
}

// -----------------------
// $msg = null;
// $stmt = $conn->prepare("UPDATE 'crop-basic-info' SET expenses = ?, income = ?, harvest = ? WHERE `crop-id` = ?");
// $stmt->bind_param("iiii", $expense, $income, $harvest, $cid);
// $r = $stmt->execute(array($expense, $income, $harvest, $cid));
// if ($r) {     
//     $msg = "Crop Basic Info updated";
// } else {
//     $msg = "Error! " . mysqli_error($conn);
// }


$response = array('status' => true, "msg" => $msg , "para" => $para);

echo json_encode($response);
?>

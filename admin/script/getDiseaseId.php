<?php
include("../connection/connection.php");
$id = $_POST['cid'];
$sql = "SELECT * FROM `crop-disease` WHERE `crop-id` = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) <= 0) {
    echo "<option selected>No disease Data Found for selected Crop</option>";
} else {
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $title = $row['title'];
        echo "<option value='$id'>$title</option>";
    }
}
?>
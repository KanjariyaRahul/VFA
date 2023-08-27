<?php
require("../connection/connection.php");
$id = $_GET['id'];
$sql = "SELECT * FROM `seeds` WHERE `crop-id` = '$id'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if ($rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>
        <option value="<?= $row['id'] ?>"><?= $row['seed-name'] ?></option>
    <?php }
} else {
    ?>
    <option value="NaN">No Seeds Found for Selected Crop</option>
<?php
}
?>
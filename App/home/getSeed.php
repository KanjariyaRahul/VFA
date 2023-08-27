<?php
require("../connection/conn.php");
$crop_id = $_GET['crop_id'];
$result = mysqli_query($con, "SELECT * FROM `seeds` WHERE `crop-id` = $crop_id");
$rows = mysqli_num_rows($result);
$first = true;
if ($rows > 0) {
    while ($data = mysqli_fetch_array($result)) {
?>
        <option value="<?= $data['id'] ?>" <?php
                                            if ($first) {
                                                echo "selected";
                                            }
                                            $first = false;
                                            ?>><?= $data['seed-name'] ?></option>
    <?php
    }
} else {
    ?>
    <option value="null" selected>No Seeds Found for this Crop</option>
<?php
}
?>
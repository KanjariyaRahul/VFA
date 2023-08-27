<?php
require("../connection/conn.php");
$user = $_GET['user'];
$sql = "SELECT * FROM `farmer` WHERE `username` = '$user'";
if ($result = mysqli_query($con, $sql)) {
    $valid = mysqli_num_rows($result);

?>
    <?php
    if ($valid > 0) {
    ?>
        <p style="color: red; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;">
            <span class="material-icons-sharp">
                check_circle_outline
            </span>
            User with same name already Exist
        </p>
    <?php
    } else {
    ?>
        <p style="color: limegreen; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;">
            <span class="material-icons-sharp">
                check_circle_outline
            </span>
            username verified
            <input type="hidden" value="ok" id="userStatus">
        </p>
    <?php
    }
} else {
    ?>
    <?= mysqli_error($con) ?>
<?php
}
?>
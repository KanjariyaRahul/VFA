<?php
require("../connection/conn.php");
$mail = $_GET['mail'];
$sql = "SELECT * FROM `farmer` WHERE `email` = '$mail'";
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
            Email Already registered
        </p>

    <?php
    } else {
    ?>
        <p style="color: limegreen; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;">
            <span class="material-icons-sharp">
                check_circle_outline
            </span>
            Email verified
            <input type="hidden" value="ok" id="emailStatus">
        </p>
    <?php
    }
} else {
    ?>
    <?= mysqli_error($con) ?>
<?php
}
?>
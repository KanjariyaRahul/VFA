<?php
require("../connection/conn.php");
$mno = $_GET['mno'];
$sql = "SELECT * FROM `farmer` WHERE `mobile` = '$mno'";
if ($result = mysqli_query($con, $sql)) {
    $valid = mysqli_num_rows($result);
    if (strlen($mno) != 10) {
?>
        <p style="color: red; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;">
            <span class="material-icons-sharp">
                check_circle_outline
            </span>
            Please Enter Valid Mobile No.
        </p>
        <?php
    } else {
        if ($valid > 0) {
        ?>
            <p style="color: red; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;">
                <span class="material-icons-sharp">
                    check_circle_outline
                </span>
                Mobile Number Already registered
            </p>
        <?php
        } else {
        ?>
            <p style="color: limegreen; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;">
                <span class="material-icons-sharp">
                    check_circle_outline
                </span>
                mobile Number verified
                <input type="hidden" value="ok" id="mnoStatus">
            </p>
    <?php
        }
    }
} else {
    ?>
    <?= mysqli_error($con) ?>
<?php
}
?>
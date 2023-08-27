<?php
require("../connection/connection.php");
$cid = $_GET['cid'];
$result = mysqli_query($conn, "SELECT * FROM `crop-faq` WHERE `crop-id` = $cid");
$row = mysqli_num_rows($result);
if ($row > 0) {
    while ($data = mysqli_fetch_array($result)) {
?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?= $data['question'] ?>
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body"><?= $data['ans'] ?></div>
            </div>
        </div>
    <?php
    }
} else {
    ?>
    <h2>No FAQs Found for Selected Crop</h2>
<?php
}
?>
<?php
require("../connection/connection.php");
$cid = $_GET['cid'];
$result = mysqli_query($conn, "SELECT * FROM seeds WHERE `crop-id` = $cid");
$row = mysqli_num_rows($result);
if ($row > 0) {
    while ($data = mysqli_fetch_array($result)) {
?>
        <div class="col mb-2">
            <div class="card" id="<?= $data['id'] ?>" onclick="getEvent(this.id)">
                <img src="../App/img/upload/seed/<?= $data['image'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $data['seed-name'] ?></h5>
                    <p class="card-text"><?= $data['description'] ?></p>
                    <p class="card-text"><small class="text-muted">Yield : <?= $data['duration'] ?></small></p>
                    <p class="card-text"><small class="text-muted">Duration : <?= $data['yield'] ?></small></p>
                    <p class="card-text"><small class="text-muted">Season : <?= $data['season'] ?></small></p>
                </div>
            </div> 
        </div>
    <?php
    }
} else {
    ?>
    <div class="col mb-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">No Seed Found For selected Crop</h5>
            </div>
            <div class="card-footer">
                <button class="btn btn-outline-primary" onclick="$('#select-crop').toggle()">Go Back</button>
            </div>
        </div>
    </div>
<?php
}
?>
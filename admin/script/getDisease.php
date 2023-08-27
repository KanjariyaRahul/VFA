<?php
require("../connection/connection.php");
$cid = $_GET['cid'];
$result = mysqli_query($conn, "SELECT * FROM `crop-disease` WHERE `crop-id` = $cid");
$row = mysqli_num_rows($result);
if ($row > 0) {
    while ($data = mysqli_fetch_array($result)) {
?>
        <div class="col mb-2">
            <div class="card" id="<?= $data['id'] ?>">
                <img src="../App/img/disease/<?= $data['image'] ?>" class="card-img-top">
                <div class="card-body">
                    <h5 id="title-<?= $data['id'] ?>" class="card-title"><?= $data['title'] ?></h5>
                    <p id="desc-<?= $data['id'] ?>" class="card-text"><?= $data['description'] ?></p>
                    <p id="sym-<?= $data['id'] ?>" class="card-text"><b>Symptoms : </b><?= $data['symptoms'] ?></p>
                </div>
                <div class="card-footer">
                    <button class="btn btn-outline-primary m-1" id="up-<?= $data['id'] ?>" onclick="updateDiseaseDetails(this.id);">Update</button>
                    <button class="btn btn-outline-primary m-1" style="display: none;" id="save-<?= $data['id'] ?>" onclick="saveDetails(this.id)">Save Details</button>
                    <a href="./script/delete-disease.php?id=<?= $data['id'] ?>" class="btn btn-outline-danger">Delete</a>
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
                <h5 class="card-title">No Disease Found For selected Crop</h5>
            </div>
            <div class="card-footer">
                <button class="btn btn-outline-primary" onclick="$('#select-crop').toggle()">Go Back</button>
            </div>
        </div>
    </div>
<?php
}
?>
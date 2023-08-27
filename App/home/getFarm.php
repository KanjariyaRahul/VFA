<?php
require("../connection/conn.php");
$fid = $_GET['farmer-id'];

$sql = "SELECT * FROM `crop-tracking` WHERE `farmer_id` = '$fid'";

$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_assoc($result)) {
?>
    <?php
    $cropid = $row['crop_id'];
    $cNameSql = "SELECT name FROM `crop` WHERE `id` = $cropid;";
    $cResult = mysqli_query($con, $cNameSql);
    $cropName = mysqli_fetch_assoc($cResult);
    ?>
    <a href="farm-detail.php?cid=<?=$cropid?>&id=<?= $row['id'] ?>&cropName=<?= $cropName['name'] ?>&sowingDate=<?= $row['sowing_date'] ?>&seedId=<?= $row['seed-id'] ?>" class="farm-card-item">
        <div class='card fard-card' style='cursor: pointer; margin-bottom:10px;'>
            <div class='middle'>
                <input type="hidden" class="sowing-date" value="<?= $row['sowing_date'] ?>" />
                <?php
                $seedid = $row['seed-id'];
                $duSQL = "SELECT duration FROM `seeds` WHERE `id` = $seedid;";
                $duResult = mysqli_query($con, $duSQL);
                $duration = mysqli_fetch_assoc($duResult);
                ?>
                <input type="hidden" class="duration" value="<?= $duration['duration'] ?>">
                <!-- <span class='material-icons-sharp'>auto_graph</span> -->
                <img src="../img/plant.png" alt="growing plant" style="width: 60px !important;">
                <div class='left' style='width: 100%;margin: 0.8rem;'>

                    <h2 style="color: var(--color-primary);"><?= $cropName['name'] ?></h2>
                    <h1 id="<?= generateId() ?>" class="stage">Current Stage of Plant</h1>
                </div>
                <div class='progress'>
                    <svg class="radial-progress" viewBox="0 0 80 80">
                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                        <circle id="<?= generateId() ?>" class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 140;"></circle>
                        <text id="<?= generateId() ?>" class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">82%</text>
                    </svg>
                </div>
            </div>
        </div>
    </a>
<?php
}
function generateId()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
?>
<?php
require("../connection/conn.php");
$fid = $_GET['fid'];
$sql = "SELECT * FROM `crop-tracking` WHERE `farmer_id` = $fid";
try {
    $result = mysqli_query($con, $sql);
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
?>
            <div class="card">
                <a href="removeFarm.php?id=<?= $row['id'] ?>" class="material-icons-sharp" style="text-align: right; width: 100%;">
                    delete
                </a>
                <?php
                $cropid = $row['crop_id'];
                $cNameSql = "SELECT name FROM `crop` WHERE `id` = $cropid;";
                $cResult = mysqli_query($con, $cNameSql);
                $cropName = mysqli_fetch_assoc($cResult);
                ?>
                <h1><?= $cropName['name'] ?> Farm</h1>
                <?php
                $seedid = $row['seed-id'];
                $sNameSql = "SELECT * FROM `seeds` WHERE `id` = $seedid;";
                $sResult = mysqli_query($con, $sNameSql);
                $seedName = mysqli_fetch_assoc($sResult);
                ?>
                <p>Seed Name: <b><?= $seedName['seed-name'] ?></b></p>
                <p>Farm Area: <b><?= $row['farm_area'] ?></b> Acre</p>
                <p>Sowing Date: <b><?php
                                        $a = explode(" ", $row['sowing_date']);
                                        echo $a[0];
                                    ?></b></p>
                <p>Soil Type: <b><?= $row['soil'] ?></b></p>
                <p>Irrigation Method: <b><?= $row['water'] ?></b></p>
                <!-- <button type="button" class="btn">Edit Farm Details</button> -->
            </div>
<?php
        }
    } else {
        print mysqli_error($con);
    }
} catch (Exception $e) {
    print $e->getMessage();
}
?>
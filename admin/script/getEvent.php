<?php
require("../connection/connection.php");
$sid = $_GET['sid'];
$result = mysqli_query($conn, "SELECT * FROM `crop-event` WHERE `seed-id` = $sid");
$row = mysqli_num_rows($result);
if ($row > 0) {
    while ($data = mysqli_fetch_array($result)) {
?>
        <?php
        $eventid = $data['id'];
        $cropid = $data['crop-id'];
        $cNameSql = "SELECT name FROM `crop` WHERE `id` = $cropid;";
        $cResult = mysqli_query($conn, $cNameSql);
        $cropName = mysqli_fetch_assoc($cResult);
        ?>
        <tr>
        <td><?= $cropName['name'] ?></td>
        <?php
        $seedid = $data['seed-id'];
        $sNameSql = "SELECT * FROM `seeds` WHERE `id` = $seedid;";
        $sResult = mysqli_query($conn, $sNameSql);
        $seedName = mysqli_fetch_assoc($sResult);
        ?>
        <td><?= $seedName['seed-name'] ?></td>
        <td><?= $data['title'] ?></td> 
        <td><?= $data['description'] ?></td>
        <td><?= $data['day-after-sowing'] ?></td>
        <td style="text-align: center;">
            <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                    <a class="dropdown-item" href="./script/deleteEvents.php?id=<?=$eventid?>"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
            </div>
        </td>
        </tr>
    <?php
    }
} else {
    ?>
    <h2>No Events Found for this crop</h2>
<?php
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Crop Events</title>
    <?php
    include("./include/header.php");
    ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- sidemenu -->
        <?php
        include("./include/navbar.php");
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div class="text-primary" id="content">
                <!-- Top nav menu -->
                <?php
                include("./include/topnav.php");
                if (isset($_GET['msg'])) {
                ?>
                    <script>
                        alertify.warning("<?= $_GET['msg'] ?>");
                    </script>
                <?php
                }
                ?>
                <!-- Update Notification Modal Ends Here -->

                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <form method="get" action="./script/add-event.php">
                                <label class="form-label">Select Crop</label>
                                <select class="form-select" name="cid" id="cid" required="" onchange="getSeed()">
                                    <?php
                                    $sql = "SELECT * FROM `crop`";
                                    $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                    <?php } ?>
                                </select>
                                <label class="form-label">Select Seed</label>
                                <select name="sid" id="sid" class="form-select">
                                    <option value="NaN" selected>Select Crop to Get Seed info</option>
                                </select>
                                <label class="form-label">Enter Event Title</label>
                                <input class="form-control" type="text" maxlength="255" required="" name="e-title">
                                <label class="form-label">Enter Event Description</label>
                                <textarea class="form-control" maxlength="255" required="" name="e-desc"></textarea>
                                <label class="form-label">Enter Fire Day: </label>
                                <input class="form-control" type="number" maxlength="255" required="" name="fire-day">
                                <button class="btn btn-primary mt-2" type="submit">Add Crop Event</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VFA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php include("./include/scripts.php"); ?>
    <script>
        getSeed();
        function getSeed() {
            cid = $("#cid").val();
            $.get({
                url: "./script/getEventSeed.php?id=" + cid,
                success: (response) => {
                    $("#sid").html(response);
                },
                error: (response) => {
                    $("#sid").html(response);
                }
            })
        }
    </script>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Crop Data - VFA</title>
    <?php
    include("./include/header.php");
    ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Top nav menu -->
        <?php
        include("./include/navbar.php");
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- Top nav menu -->
                <?php
                include("./include/topnav.php");
                ?>
                <div class="container-fluid">

                    <h1 class="text-primary">Select crop to update</h1>
                    <select class="form-control" id="cid" onchange="getCropData()">
                        <option value="null">Select Crop</option>
                        <?php
                        $sql = "SELECT * FROM `crop`";
                        $first = true;
                        if ($result = mysqli_query($conn, $sql)) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                        <?php
                            }
                        } else {
                            echo mysqli_error($conn);
                        }
                        ?>
                    </select>
                    <hr><br>
                    <section class="update-section" id="update-crop-data-section">

                    </section>

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
        function getCropData() {
            let cid = $("#cid").val();
            $.ajax({
                method: 'POST',
                url: './script/getUpdateCropData.php',
                data: { cid: cid },
                success: function(response) {
                    $("#update-crop-data-section").html(response);
                },
                error: function(response) {
                    alertify.alert("Ajax Error!", "Something Went Wrong");
                }
            });
        }

        function updateCBI() {
            let cid = $("#cid").val();
            let expenses = $("#ex").text();
            // console.log("Expenses: " + expenses);
            let income = $("#in").text();
            // console.log("Income: " + income);
            let harvest = $("#hr").text();
            // console.log("Harvest: " + harvest);
            $.post({
                url: "./script/update/update-cbi.php",
                data: {
                    "cid": cid,
                    "ex": expenses,
                    "in": income,
                    "hr": harvest
                },
                success: function(response) {
                    alertify.warning(response.msg);
                },
                error: function(response) {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response);
                }
            })
        }

        function updateSpacingandPlantDetails() {
            let cid = $("#cid").val();
            let rtr = $("#rtr").text();
            let ptp = $("#ptp").text();
            let pp = $("#pp").text();
            $.post({
                url: "./script/update/update-spacing.php",
                data: {
                    "cid": cid,
                    "rtr": rtr,
                    "ptp": ptp,
                    "pp": pp
                },
                success: function(response) {
                    alertify.warning(response.msg);
                },
                error: function(response) {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response);
                }
            })
        }

        function updateNursery(){
            let cid = $("#cid").val();
            let duration = $("#n-duration").text();
            let rate = $("#n-seed-rate").text();
            let details = $("#nursery-details").text();
            $.post({
                url: "./script/update/update-nursery.php",
                data: {
                    "cid": cid,
                    "duration": duration,
                    "rate": rate,
                    "data": details
                },
                success: function(response) {
                    alertify.warning(response.msg);
                },
                error: function(response) {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response);
                }
            })
        }

        function updateNutrientManagement(){
            let cid = $("#cid").val();
            let time = $("#nm-time").text();
            let rain = $("#nm-rain").text();
            let late = $("#nm-late").text();
            $.post({
                url: "./script/update/update-nursery.php",
                data: {
                    "cid": cid,
                    "duration": duration,
                    "rate": rate,
                    "data": details
                },
                success: function(response) {
                    alertify.warning(response.msg);
                },
                error: function(response) {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response);
                }
            })
        }

        function updateClimate() {
            let cid = $("#cid").val();
            let data = $("#climate").html();
            $.post({
                url: "./script/update/update-climate.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response);
                }
            })
        }

        function updateTemperature() {
            let cid = $("#cid").val();
            let data = $("#temperature").html();
            $.post({
                url: "./script/update/update-temperature.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateLandPreparation() {
            let cid = $("#cid").val();
            let data = $("#land-preparation").html();
            $.post({
                url: "./script/update/update-land.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateRootDipTreatment() {
            let cid = $("#cid").val();
            let data = $("#root-dip").html();
            $.post({
                url: "./script/update/update-root.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateEarthingUp() {
            let cid = $("#cid").val();
            let data = $("#earthing-up").html();
            $.post({
                url: "./script/update/update-earthing.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateGapFeeling() {
            let cid = $("#cid").val();
            let data = $("#gap").html();
            $.post({
                url: "./script/update/update-gap.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateSowing() {
            let cid = $("#cid").val();
            let data = $("#sowing").html();
            $.post({
                url: "./script/update/update-sowing.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateTransplanting() {
            let cid = $("#cid").val();
            let data = $("#transplanting").html();
            $.post({
                url: "./script/update/update-transplanting.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateIrrigation() {
            let cid = $("#cid").val();
            let data = $("#irrigation").html();
            let method = $("#irrigation").html();
            $.post({
                url: "./script/update/update-irrigation.php",
                data: {
                    "cid": cid,
                    "data": data,
                    "method": method
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateSoil() {
            let cid = $("#cid").val();
            let data = $("#soil-details").html();
            let method = $("#red-soil").html();
            $.post({
                url: "./script/update/update-soil.php",
                data: {
                    "cid": cid,
                    "data": data,
                    "method": method
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateHarvesting() {
            let cid = $("#cid").val();
            let data = $("#harvesting").html();
            $.post({
                url: "./script/update/update-harvesting.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }

        function updateYield() {
            let cid = $("#cid").val();
            let data = $("#yield").html();
            $.post({
                url: "./script/update/update-yield.php",
                data: {
                    "cid": cid,
                    "data": data
                },
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.alert("Ajax Error!", "Something Went Wrong -> " + response.responseText);
                    console.log(response)
                }
            })
        }
    </script>
</body>

</html>
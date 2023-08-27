<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Crop Information</title>
    <?php
    include "./include/header.php";
    ?>
    <style>
        .add-form {
            display: none;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- sidemenu -->
        <?php
        include "./include/navbar.php";
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- Top nav menu -->
                <?php
                include "./include/topnav.php";
                if (isset($_GET['msg'])) {
                ?>
                    <script>
                        alertify.warning("<?= $_GET['msg'] ?>");
                    </script>
                <?php
                }
                ?>
                <!-- Add New Crop Form -->
                <div class="container-fluid mb-2 data-forms w-100">
                    <!-- Select Crop section -->
                    <div class="card p-2 shadow m-2">
                        <div class="mb-2">
                            <label class="form-label">Select Crop</label>
                            <select class="form-select" id="cid" name="cid" required="">
                                <?php
                                $sql = "SELECT * FROM `crop`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                    <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <!-- Button Group -->
                    <div class="card shadow m-2 p-2">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <span onclick="$('#cbi').toggle()" class="m-1 btn btn-primary ">Add Basic Information</span>
                                    <span onclick="$('#temperature').toggle()" class="m-1 btn btn-primary ">Add Temperatur</span>
                                    <span onclick="$('#climate').toggle()" class="m-1 btn btn-primary ">Add Climate</span>
                                    <span onclick="$('#land-prepare').toggle()" class="m-1 btn btn-primary">Add land preparation info</span>
                                    <span onclick="$('#root-deep').toggle()" class="m-1 btn btn-primary">Add root deep treatment info</span>
                                    <span onclick="$('#nurp').toggle()" class="m-1 btn btn-primary">Add Nursery Preparation info</span>
                                </div>
                                <div class="col">
                                    <span onclick="$('#water').toggle()" class="m-1 btn btn-primary">Add Water</span>
                                    <span onclick="$('#soil').toggle()" class="m-1 btn btn-primary">Add Soil</span>
                                    <span onclick="$('#yield').toggle()" class="m-1 btn btn-primary">Add yield</span>
                                    <span onclick="$('#irrigation').toggle()" class="m-1 btn btn-primary">Add Irrigation</span>
                                    <span onclick="$('#harvesting').toggle()" class="m-1 btn btn-primary">Add Harvesting</span>
                                    <span onclick="$('#spacing-and-plant').toggle()" class="m-1 btn btn-primary">Add Spacing and Plant population info</span>

                                </div>
                                <div class="col">
                                    <span onclick="$('#sowing').toggle()" class="m-1 btn btn-primary">Add Sowing</span>
                                    <span onclick="$('#gap').toggle()" class="m-1 btn btn-primary">Add gap feeling info</span>
                                    <span onclick="$('#nutrients').toggle()" class="m-1 btn btn-primary">Add nutrientss</span>
                                    <span onclick="$('#transplantig').toggle()" class="m-1 btn btn-primary">Add Transplanting</span>
                                    <span onclick="$('#earthing-up').toggle()" class="m-1 btn btn-primary">Add earthing up info</span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Crop Basic Information -->
                    <div class="card shadow m-2 p-2 add-form" id="cbi">
                        <h2>Crop Basic Information</h2>
                        <hr>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter Expenses</label>
                                <input class="form-control" id="cbi-expenses" type="number"></input>
                            </div>
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter Income</label>
                                <input class="form-control" id="cbi-income" type="number"></input>
                            </div>
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter Harvesting</label>
                                <input class="form-control" id="cbi-harvest" type="number"></input>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#cbi').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addCBI()">Publish</button>
                        </div>
                    </div>

                    <!-- Climate Details -->
                    <div class="card shadow m-2 p-2 add-form" id="climate">
                        <h2>Favourable Climate</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="climate-data" class="form-control" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Enter Climate Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="climate-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#climate').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#climate-data-li').append('<li>'+$('#climate-data').val()+'</li>'); $('textarea').val('')">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addClimate()">Publish</button>
                        </div>
                    </div>

                    <!-- Root Deep treatment -->
                    <div class="card shadow m-2 p-2 add-form" id="root-deep">
                        <h2>Root Deep Treatment</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="root-deep-data" class="form-control" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Enter Root Deep Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="root-deep-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#root-deep').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#root-deep-data-li').append('<li>'+$('#root-deep-data').val()+'</li>'); $('textarea').val('')">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addRootDeep()">Publish</button>
                        </div>
                    </div>

                    <!-- Enter Nursury Details -->
                    <div class="card shadow m-2 p-2 add-form" id="nurp">
                        <h2>Nursery Details</h2>
                        <hr>
                        <div class="form-floating">
                            <!-- details -->
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter nursery Details</label>
                                <textarea id="nurp-data" class="form-control" style="height: 100px"></textarea>
                            </div>
                            <!-- Duration -->
                            <div class="mb-2">
                                <label for="duration">Enter Duration Detail</label>
                                <input class="form-control" id="duration" type="number"></input>
                            </div>
                            <!-- Seed Rate -->
                            <div class="mb-2">
                                <label for="seed-rate">Enter Seed Rate Info</label>
                                <input class="form-control" id="seed-rate" type="number"></input>
                            </div>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="nurp-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#nurp').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#nurp-data-li').append('<li>'+$('#nurp-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addNursery()">Publish</button>
                        </div>
                    </div>

                    <!-- Temperatur Details -->
                    <div class="card shadow m-2 p-2 add-form" id="temperature">
                        <h2>Temperatur Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="temperature-data" class="form-control" style="height: 100px"></textarea>
                            <label for="temperature-data">Enter Temperatur Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="temperature-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#temperature').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#temperature-data-li').append('<li>'+$('#temperature-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addTemperatur()">Publish</button>
                        </div>
                    </div>

                    <!-- Water Details -->
                    <div class="card shadow m-2 p-2 add-form" id="water">
                        <h2>Water Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="water-data" class="form-control" style="height: 100px"></textarea>
                            <label for="water-data">Enter Water Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="water-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#water').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#water-data-li').append('<li>'+$('#water-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addWater()">Publish</button>
                        </div>
                    </div>

                    <!-- Soil Details -->
                    <div class="card shadow m-2 p-2 add-form" id="soil">
                        <h2>Soil Details</h2>
                        <hr>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="soil-data">Enter Soil Details</label>
                                <textarea id="soil-data" class="form-control" style="height: 100px"></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="req-soil">Enter Required Soil</label>
                                <input type="text" class="form-control" id="req-soil">
                            </div>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="soil-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#soil').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#soil-data-li').append('<li>'+$('#soil-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addSoil()">Publish</button>
                        </div>
                    </div>

                    <!-- Sowing Details -->
                    <div class="card shadow m-2 p-2 add-form" id="sowing">
                        <h2>Sowing Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="sowing-data" class="form-control" style="height: 100px"></textarea>
                            <label for="sowing-data">Enter Sowing Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="sowing-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#sowing').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#sowing-data-li').append('<li>'+$('#sowing-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addSowing()">Publish</button>
                        </div>
                    </div>

                    <!-- Transplanting Details -->
                    <div class="card shadow m-2 p-2 add-form" id="transplantig">
                        <h2>Transplanting Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="transplanting-data" class="form-control" style="height: 100px"></textarea>
                            <label for="transplanting-data">Enter Transplanting Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="transplanting-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#transplantig').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#transplanting-data-li').append('<li>'+$('#transplanting-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addTransplanting()">Publish</button>
                        </div>
                    </div>

                    <!-- nutrients Details -->
                    <div class="card shadow m-2 p-2 add-form" id="nutrients">
                        <h2>nutrients Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="nm-time" class="form-control" style="height: 100px"></textarea>
                            <label for="m-time">Enter Nm Timely</label>
                        </div>
                        <div class="form-floating">
                            <textarea id="nm-late" class="form-control" style="height: 100px"></textarea>
                            <label for="nm-late">Enter Nm late</label>
                        </div>
                        <div class="form-floating">
                            <textarea id="nm-rain" class="form-control" style="height: 100px"></textarea>
                            <label for="nm-rain">Enter Nm Rain</label>
                        </div>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#nutrients').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addNutrients()">Publish</button>
                        </div>
                    </div>

                    <!-- Irrigation Details -->
                    <div class="card shadow m-2 p-2 add-form" id="irrigation">
                        <h2>Irrigation Details</h2>
                        <hr>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="irrigation-data">Enter Irrigation Details</label>
                                <textarea id="irrigation-data" class="form-control" style="height: 100px"></textarea>
                            </div>
                            <div class="mb-2">
                                <label for="req-irrigation">Enter Required Irrigation Method</label>
                                <input type="text" class="form-control" id="req-irrigation">
                            </div>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="irrigation-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#irrigation').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#irrigation-data-li').append('<li>'+$('#irrigation-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addIrrigation()">Publish</button>
                        </div>
                    </div>

                    <!-- Yield Details -->
                    <div class="card shadow m-2 p-2 add-form" id="yield">
                        <h2>Yield Details</h2>
                        <hr>
                        <div class="form-floating data-list">
                            <textarea id="yield-data" class="form-control" style="height: 100px"></textarea>
                            <label for="yield-data">Enter Yield Details</label>
                        </div>
                        <hr>
                        <ul class="text-success" id="yield-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#yield').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#yield-data-li').append('<li>'+$('#yield-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addYield()">Publish</button>
                        </div>
                    </div>

                    <!-- Harvesting Details -->
                    <div class="card shadow m-2 p-2 add-form" id="harvesting">
                        <h2>Harvesting Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="harvesting-data" class="form-control" style="height: 100px"></textarea>
                            <label for="harvesting-data">Enter Harvesting Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="harvesting-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#harvesting').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#harvesting-data-li').append('<li>'+$('#harvesting-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addHarvesting()">Publish</button>
                        </div>
                    </div>

                    <!-- gap feeling Details -->
                    <div class="card shadow m-2 p-2 add-form" id="gap">
                        <h2>Gap feeling details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="gap-feeling-data" class="form-control" style="height: 100px"></textarea>
                            <label for="gap-feeling-data">Enter gap feeling details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="gap-feeling-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#gap').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#gap-feeling-data-li').append('<li>'+$('#gap-feeling-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addGapFeeling()">Publish</button>
                        </div>
                    </div>

                    <!-- Land preparation details -->
                    <div class="card shadow m-2 p-2 add-form" id="land-prepare">
                        <h2>Land Preparation Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="land-preparation-data" class="form-control" style="height: 100px"></textarea>
                            <label for="land-preparation-data">Enter land preparation details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="land-preparation-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#land-prepare').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#land-preparation-data-li').append('<li>'+$('#land-preparation-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addLandPreparation()">Publish</button>
                        </div>
                    </div>

                    <!-- Earthing up Details -->
                    <div class="card shadow m-2 p-2 add-form" id="earthing-up">
                        <h2>Earthing up Details</h2>
                        <hr>
                        <div class="form-floating">
                            <textarea id="earthing-up-data" class="form-control" style="height: 100px"></textarea>
                            <label for="earthing-up-data">Enter Earhting Up Details</label>
                        </div>
                        <hr>
                        <ul class="text-success data-list" id="earthing-up-data-li"></ul>
                        <hr>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#harvesting').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-warning float-end m-1" type="button" onclick="$('#earthing-up-data-li').append('<li>'+$('#earthing-up-data').val()+'</li>'); $('textarea').val('');">Add List</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addEarthingUp()">Publish</button>
                        </div>
                    </div>

                    <!-- Spacing and Plant Population -->
                    <div class="card shadow m-2 p-2 add-form" id="spacing-and-plant">
                        <h2>Spacing and Plant population Details</h2>
                        <hr>
                        <div class="form-floating">
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter Row to Row</label>
                                <input class="form-control" id="sap-rtr" type="number"></input>
                            </div>
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter Plant to Plant</label>
                                <input class="form-control" id="sap-ptp" type="number"></input>
                            </div>
                            <div class="mb-2">
                                <label for="floatingTextarea2">Enter Plant Population</label>
                                <input class="form-control" id="sap-pp" type="number"></input>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn-outline-danger" onclick="$('#spacing-and-plant').hide()">Close form</button>
                            <button onclick="resetData()" type="button" class="d-inline btn btn-secondary m-1">Clear Form</button>
                            <button class="d-inline btn btn-primary float-end m-1" type="button" onclick="addSpacingAndPlantPopulation()">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center mt-2 my-auto copyright"><span>Copyright © VFA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php include("./include/scripts.php"); ?>

    <script>
        // Functions List to Add crop Details
        function addCBI() {
            let cid = $("#cid").val();
            let expenses = $("#cbi-expenses").val();
            let income = $("#cbi-income").val();
            let harvest = $("#cbi-harvest").val();
            $.post({
                url: "./script/add-crop-info-scripts/add-cbi.php",
                data: {
                    "cid": cid,
                    "expenses": expenses,
                    "income": income,
                    "harvest": harvest
                },
                success: (response) => {
                    alertify.warning(response);
                    resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }

        function addRootDeep() {
            let cid = $("#cid").val();
            let details = $("#root-deep-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-root-deep.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#root-deep-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }

        function addNursery() {
            let cid = $("#cid").val();
            let details = $("#nurp-data-li").html();
            let duration = $("#duration").val();
            let rate = $("#seed-rate").val();
            $.post({
                url: "./script/add-crop-info-scripts/add-nurp.php",
                data: {
                    "cid": cid,
                    "details": details,
                    "duration": duration,
                    "rate": rate
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#nurp-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }

        function addClimate() {
            let cid = $("#cid").val();
            let details = $("#climate-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-climate.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#climate-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }

        function addTemperatur() {
            let cid = $("#cid").val();
            let details = $("#temperature-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-temperature.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#temperature-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addWater() {
            let cid = $("#cid").val();
            let details = $("#water-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-water.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#water-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addSoil() {
            let cid = $("#cid").val();
            let details = $("#soil-data-li").html();
            let soil = $("#req-soil").val();
            $.post({
                url: "./script/add-crop-info-scripts/add-soil.php",
                data: {
                    "cid": cid,
                    "details": details,
                    "soil": soil
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#req-soil").val("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addNutrients() {
            let cid = $("#cid").val();
            let time = $("#nm-time").val();
            console.log(time);
            let rain = $("#nm-rain").val();
            let late = $("#nm-late").val();
            $.post({
                url: "./script/add-crop-info-scripts/add-nm.php",
                data: {
                    "cid": cid,
                    "time": time,
                    "rain": rain,
                    "late": late
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#nutrients-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addSowing() {
            let cid = $("#cid").val();
            let details = $("#sowing-data-li").html();

            $.post({
                url: "./script/add-crop-info-scripts/add-sowing.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#sowing-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addTransplanting() {
            let cid = $("#cid").val();
            let details = $("#transplanting-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-transplanting.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#transplanting-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addIrrigation() {
            let cid = $("#cid").val();
            let details = $("#irrigation-data-li").html();
            let method = $("#req-irrigation").val();
            $.post({
                url: "./script/add-crop-info-scripts/add-irrigation.php",
                data: {
                    "cid": cid,
                    "details": details,
                    "method": method
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#irrigation-data-li").html("");
                    $("#req-irrigation").val("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addHarvesting() {
            let cid = $("#cid").val();
            let details = $("#harvesting-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-harvesting.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#harvesting-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addYield() {
            let cid = $("#cid").val();
            let details = $("#yield-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-yield.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#yield-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addSpacingAndPlantPopulation() {
            let cid = $("#cid").val();
            let sap_rtr = $("#sap-rtr").val();
            let sap_ptp = $("#sap-ptp").val();
            let sap_pp = $("#sap-pp").val();
            $.post({
                url: "./script/add-crop-info-scripts/add-spacing-and-plant-population.php",
                data: {
                    "cid": cid,
                    "rtr": sap_rtr,
                    "ptp": sap_ptp,
                    "pp": sap_pp
                },
                success: (response) => {
                    alertify.warning(response);
                    resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }

        function addEarthingUp() {
            let cid = $("#cid").val();
            let details = $("#earthing-up-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-earthing-up.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#earthing-up-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }

        function addGapFeeling() {
            let cid = $("#cid").val();
            let details = $("#gap-feeling-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-gap-info.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#gap-feeling-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })

        }

        function addLandPreparation() {
            let cid = $("#cid").val();
            let details = $("#land-preparation-data-li").html();
            $.post({
                url: "./script/add-crop-info-scripts/add-land-preparation.php",
                data: {
                    "cid": cid,
                    "details": details
                },
                success: (response) => {
                    alertify.warning(response);
                    $("#land-preparation-data-li").html("");
                    // resetData();
                },
                error: (response) => {
                    alert(response);
                }
            })
        }


        // Function Reset Form Values
        function resetData() {
            $("input").val("");
            $("textarea").val("");
            $(".data-list").html("");
            // alertify.warning("Form Cleared");
        }

        // Adding list on pressing Enter
        // $("textarea").keypress(function(e) {
        //     if (e.which === 13 && !e.shiftKey) {
        //         e.preventDefault();
        //         alert("Enter is Pressed");
        //     }
        // });
    </script>
</body>

</html>
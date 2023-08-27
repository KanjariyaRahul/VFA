<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Events - VFA</title>
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
                if (isset($_GET['msg'])) {
                ?>
                    <script>
                        alertify.warning("<?= $_GET['msg'] ?>");
                    </script>
                <?php
                }
                ?>
                <!-- Update Notification Modal Ends Here -->

                <div class="container-fluid" id="select-crop">
                    <center>
                        <h2 id="title-text">Select Crop</h2>
                    </center>
                    <div class="container">
                        <div class="row row-cols-3">
                            <?php
                            $result = mysqli_query($conn, "SELECT * FROM crop");
                            while ($data = mysqli_fetch_array($result)) {
                            ?>
                                <div class="col mb-2">
                                    <div class="card" id="<?= $data['id'] ?>" onclick="getSeed(this.id)">
                                        <img src="../App/img/upload/crop/<?= $data['image'] ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $data['name'] ?></h5>
                                            <p class="card-text"><?= $data['description'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="select-seed" style="display: none;">
                    <center>
                        <h2 id="title-text">Select Seeds</h2>
                    </center>
                    <div class="container">
                        <div class="row row-cols-3" id="seed-cards">
                            
                        </div>
                    </div>
                </div>

                <div class="container-fluid" id="event" style="display: none;">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md text-primary m-0 fw-bold">Event Info</h4>
                                <div class="col-md">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                        <label class="form-label">
                                            <input type="search" class="form-control table-filter" data-table="farmer-filter" placeholder="Search" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table">
                                <table class="table my-0 farmer-filter" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Crop Name</th>
                                            <th>Seed Name</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Event Execute Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tdata">

                                    </tbody>
                                </table>
                            </div>
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
        function getSeed(crop_id) {
            $.get({
                url: "./script/getSeed.php?cid=" + crop_id,
                success: (response) => {
                    $("#select-crop").css("display", "none");
                    $("#select-seed").css("display", "block");
                    $("#seed-cards").html(response);
                },
                error: (response) => {
                    $("#seed-cards").html(response);
                }
            })
        }


        function getEvent(sid) {
            $.get({
                url: "./script/getEvent.php?sid=" + sid,
                success: (response) => {
                    $("#select-row-data").css("display", "none");
                    $("#event").css("display", "block");
                    $("#tdata").html(response);
                }
            })
        }
    </script>
</body>

</html>
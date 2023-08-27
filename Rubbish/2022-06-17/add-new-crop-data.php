<!DOCTYPE html>
<html>

<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VFA_AdminPanel</title>
    <?php
    require("./connection/connection.php");
        include("./include/header.php");
    ?>
</head>

<body>
    <div id="wrapper">
        <!-- sidemenu -->
        <?php
            include("./include/navbar.php");
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- Top nav menu -->
                <?php
                    include("./include/topnav.php");
                    if(isset($_GET['msg'])){
                        echo "<div class='alert alert-success' role='alert'>".$_GET['msg']."</div>";
                    }
                 ?>
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-body">
                            <div></div>
                            <form class="text-primary" method="get" action="./script/crop-info.php"><label
                                    class="form-label">Select Crop</label><select class="form-select" name="cid"
                                    required="">
                                    <?php
                          $sql = "SELECT * FROM `crop`";
                          $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                          <?php } ?>
                                </select> 
                                <h3 class="text-center mt-2">Expected<br></h3><label class="form-label">Expected
                                    Expenses</label><textarea class="form-control" required=""
                                    name="ex-exp"></textarea><label class="form-label">Expected Harvest</label><textarea
                                    class="form-control" required="" name="ex-harvest"></textarea><label
                                    class="form-label">Expected Income</label><textarea class="form-control" required=""
                                    name="ex-inc"></textarea>
                                <h3 class="text-center mt-2">Favourable<br></h3><label class="form-label">Favourable
                                    Climate</label><textarea class="form-control" required=""
                                    name="fav-cli"></textarea><label class="form-label">Favourable
                                    Temperature</label><textarea class="form-control" required=""
                                    name="fav-temp"></textarea><label class="form-label">Favourable
                                    Water</label><textarea class="form-control" required="" name="fav-water"></textarea>
                                <h3 class="text-center mt-2">Required</h3><label class="form-label">Required Soil
                                    Type</label><textarea class="form-control" required=""
                                    name="rq-soil-type"></textarea><label class="form-label">Required Soil
                                    PH</label><textarea class="form-control" name="rq-soil-ph"></textarea>
                                <h3 class="text-center mt-2">Sowing</h3><label class="form-label">Enter sowing
                                    info</label><textarea class="form-control" required="" name="sow-info"></textarea>
                                <h3 class="text-center mt-2">Land Preparation</h3><label class="form-label">Enter Land
                                    Preparation info</label><textarea class="form-control" required=""
                                    name="lp"></textarea>
                                <h3 class="text-center mt-2">Spacing &amp; Pant Population</h3><label
                                    class="form-label">Enter Spacing and Pant population details&nbsp;</label><textarea
                                    class="form-control" required="" name="sppc"></textarea>
                                <h3 class="text-center mt-2">Root Deep Treatment</h3><label class="form-label">Enter root
                                    deep treatment info</label><textarea class="form-control" name="rdt"></textarea>
                                <h3 class="text-center mt-2">Transplanting</h3><label class="form-label">Enter transplanting
                                    info</label><textarea class="form-control" name="transplant"></textarea>
                                <h3 class="text-center mt-2">Nutrient Management</h3><label class="form-label">For Irrigated
                                    Timely Sowing</label><textarea class="form-control"
                                    name="nm-timely-sow"></textarea><label class="form-label">For Irrigated Late
                                    Sowing<br></label><textarea class="form-control"
                                    name="nm-late-sow"></textarea><label class="form-label">For Rainfed
                                    Sowing</label><textarea class="form-control" name="nm-rain-sow"></textarea>
                                <h3 class="text-center mt-2">Irrigation</h3><label class="form-label">Irrigation
                                    info</label><textarea class="form-control" required="" name="irrigation"></textarea>
                                <h3 class="text-center mt-2">Harvesting info</h3><label class="form-label">Harvesting
                                    info</label><textarea class="form-control" required="" name="h-detail"></textarea>
                                <h3 class="text-center mt-2">Yield</h3><label class="form-label">Yield Info</label><textarea
                                    class="form-control" required="" name="yield"></textarea>
                            <button class="btn btn-primary mt-2" type="submit">Add Crop</button>
                            </form>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
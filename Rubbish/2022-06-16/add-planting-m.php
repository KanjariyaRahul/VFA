<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<!-- Header -->
<?php
require("../connection/connection.php");
include("../include/header.php");
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- SideMenu -->
            <?php
            include("../include/sidebar.php");
            ?>

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <?php
                include("../include/navbar.php");
                ?>

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <!-- Basic Layout -->
                            <div class="col-xxl">
                                <div class="card mb-4">
                                    <div class="card-header d-flex align-items-center justify-content-between">
                                        <h5 class="mb-0">Add Crop Information</h5>
                                        <small class="text-muted float-end">Default label</small>
                                    </div>
                                    <div class="card-body">
                                        <form method="POST" onsubmit="return false;" id="crop-info-form">
                                            <div class="row mb-3">
                                                <label for="exampleFormControlSelect1" class="form-label">Select Crop</label>
                                                <select name="cid" class="mb-3 form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                                                    <option value="null" selected>Select Crop</option>
                                                    <?php
                                                    $sql = "SELECT * FROM `crop`";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                    ?>
                                                        <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">Seed Name</label>
                                                <div class="col-sm-10 mb-3">
                                                    <textarea id="basic-default-message" class="form-control" placeholder="Pesticide Information"></textarea>
                                                </div>
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">Seed Duration</label>
                                                <div class="col-sm-10 mb-3">
                                                    <textarea id="basic-default-message" class="form-control" placeholder="Pesticide Information"></textarea>
                                                </div>
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">seed Special Details</label>
                                                <div class="col-sm-10 mb-3">
                                                    <textarea id="basic-default-message" class="form-control" placeholder="Pesticide Information"></textarea>
                                                </div>
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">seed Yield</label>
                                                <div class="col-sm-10 mb-3">
                                                    <textarea id="basic-default-message" class="form-control" placeholder="Pesticide Information"></textarea>
                                                </div>
                                                <label class="col-sm-2 col-form-label" for="basic-default-message">seed Season</label>
                                                <div class="col-sm-10 mb-3">
                                                    <textarea id="basic-default-message" class="form-control" placeholder="Pesticide Information"></textarea>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <!-- Footer -->
                                    <?php
                                    include("../include/footer.php");
                                    ?>
                                    <div class="content-backdrop fade"></div>
                                </div>
                                <!-- Content wrapper -->
                            </div>
                        </div>

                        <!-- Overlay -->
                        <div class="layout-overlay layout-menu-toggle"></div>
                    </div>

                    <!-- Core JS -->
                    <?php
                    include("../include/corejs.php");
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VFA_AdminPanel</title>
    <?php 
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
            <div class="text-primary" id="content">
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
                            <form class="text-primary" method="post" enctype="multipart/form-data" action="./script/add-crop.php">
                                <label class="form-label">Enter Crop Name</label>
                                <input class="form-control" type="text" required="" name="name" maxlength="255">
                                <label class="form-label">Enter Crop Description</label>
                                <textarea class="form-control" type="text" required="" name="desc" maxlength="500"> </textarea>
                                <label class="form-label">Upload Crop Image</label>
                                <input class="form-control" type="file" required="" accept="image/*" name="uploadfile">
                                <button class="btn btn-primary mt-2" type="submit">Add Crop</button>
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
    <div id="wrapper-1"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div id="wrapper-2"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
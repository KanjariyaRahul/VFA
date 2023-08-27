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
                            <form class="text-primary" method="get"><label class="form-label">Select Crop</label><select class="form-select" name="cid" required="">
                                    <optgroup label="This is a group">
                                        <option value="12" selected="">This is item 1</option>
                                        <option value="13">This is item 2</option>
                                        <option value="14">This is item 3</option>
                                    </optgroup>
                                </select><label class="form-label">Enter Question</label><input class="form-control" type="text" required="" maxlength="255" name="question"><label class="form-label">Enter Answer</label><textarea class="form-control" required="" maxlength="500" name="ans"></textarea><button class="btn btn-primary" type="button">Add FAQ</button></form>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
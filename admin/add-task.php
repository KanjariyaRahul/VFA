<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add New Task - VFA</title>
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

                <div class="container-fluid">
                    <form action="./script/add-taskd.php">
                        <div class="card">
                            <div class="card-header">
                                <h2>Add New Task</h2>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Enter Task Title</label>
                                    <input type="text" class="form-control" id="title" name="title">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Enter Task Details</label>
                                    <textarea class="form-control" id="desc" name="desc"></textarea>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </div>
                    </form>


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

</html>
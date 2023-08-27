<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Crop - VFA</title>
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
                <!-- Update Notification Modal -->
                <?php
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
                    <div class="row row-cols-1 row-cols-md-4 g-2">
                        <?php
                        $sql = "SELECT * FROM `crop`";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <div class="col">
                                <div class="card">
                                    <img src="../App/img/upload/crop/<?= $row['image'] ?>" class="img-fluid rounded-start" alt="">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title" id="name-<?= $row['id'] ?>"><?= $row['name'] ?></h5>
                                    <p class="card-text" id="desc-<?= $row['id'] ?>"><?= $row['description'] ?></p>
                                </div>
                                <div class="card-footer d-flex justify-content-end">
                                    <button class="btn btn-outline-primary m-1" id="up-<?= $row['id'] ?>" onclick="updateCropDetails(this.id);">Update</button>
                                    <button class="btn btn-outline-primary m-1" style="display: none;" id="save-<?= $row['id'] ?>" onclick="saveDetails(this.id)">Save Details</button>
                                    <a href="./script/delete-crop.php?id=<?= $row['id'] ?>" class="btn btn-outline-danger m-1">Delete</a>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
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
	function updateCropDetails(btn_id) {
            $("#" + btn_id).hide();
            let id = btn_id.split("-");
            $("#save-" + id[1]).show();
            // Getting Parent Elements 
            let p1 = $("#" + btn_id).parent();
            let p2 = p1.parent();
            // Getting Child Elements 
            let c1 = p2.children(".card-body");
            let c2 = c1.children();
            // console.log(c2[0]);
            c2.addClass("border border-dark p-2")

            // Making Elements Editable 
            c2[0].setAttribute("contenteditable", "true");
            c2[1].setAttribute("contenteditable", "true");
        }

        function saveDetails(btn_id) {
            $("#" + btn_id).hide();
            let id = btn_id.split("-");
            $("#up-" + id[1]).show();

            // Updating Value Using Ajax

            let name = $("#name-" + id[1]).text();
            let desc = $("#desc-" + id[1]).text();

            $.get({
                url: "./script/updateCrop.php?id=" + id[1] + "&name=" + name + "&desc=" + desc,
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.error(response.responseText);
                }
            })

            // Getting Parent Elements 
            let p1 = $("#" + btn_id).parent();
            let p2 = p1.parent();
            // Getting Child Elements 
            let c1 = p2.children(".card-body");
            let c2 = c1.children();
            // console.log(c2[0]);
            c2.removeClass("border border-dark p-2")

            // Making Elements Editable 
            c2[0].setAttribute("contenteditable", "false");
            c2[1].setAttribute("contenteditable", "false");
        }
    </script>
</body>

</html>

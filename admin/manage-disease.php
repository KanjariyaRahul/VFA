<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Disease - VFA</title>
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
                                        <div class="card" id="<?= $data['id'] ?>" onclick="getDisease(this.id)">
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
                    <div class="container-fluid" id="disease-section" style="display: none;">
                        <center>
                            <h2 id="title-text">Disease Info</h2>
                        </center>
                        <div class="container">
                            <div class="row row-cols-3" id="disease">

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
        function getDisease(crop_id) {
            $.get({
                url: "./script/getDisease.php?cid=" + crop_id,
                success: (response) => {
                    $("#select-crop").css("display", "none");
                    $("#disease-section").css("display", "block");
                    $("#disease").html(response);
                },
                error: (response) => {
                    $("#seed-cards").html(response);
                }
            })
        }

        function updateDiseaseDetails(btn_id) {
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
            c2[2].setAttribute("contenteditable", "true");
            c2[3].setAttribute("contenteditable", "true");
        }

        function saveDetails(btn_id) {
            $("#" + btn_id).hide();
            let id = btn_id.split("-");
            $("#up-" + id[1]).show();

            // Updating Value Using Ajax

            let title = $("#title-" + id[1]).text();
            let desc = $("#desc-" + id[1]).text();
            let sym = $("#sym-" + id[1]).text();
            let solution = $("#solution-" + id[1]).text();

            $.get({
                url: "./script/updateDisease.php?id=" + id[1] + "&title=" + title + "&desc=" + desc + "&sym=" + sym + "&solution=" + solution,
                success: (response) => {
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.warning(response.responseText);
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
            c2[2].setAttribute("contenteditable", "false");
            c2[3].setAttribute("contenteditable", "false");
        }
    </script>
</body>

</html>
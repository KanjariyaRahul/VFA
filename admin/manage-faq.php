<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage FAQs - VFA</title>
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
                    <center>
                        <h2 id="title-text">Select Crop</h2>
                    </center>
                    <select onchange="getFaq();" class="form-select" aria-label="Default select example" name="crop-name" id="crop-name">
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM crop");
                        while ($data = mysqli_fetch_array($result)) {
                        ?>
                            <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>

                    <div class="shadow-sm mt-4">

                        <div id="faq" class="accordion accordion-flush" id="accordionFlushExample">

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
        function getFaq() {
            let cid = $("#crop-name").val();
            // alert("seed id" + sid);
            $.get({
                url: "./script/getFaq.php?cid=" + cid,
                success: (response) => {
                    $("#faq").html(response);
                },
                error: (response)=>{
                    $("#faq").html(response);
                }
            })
        }
    </script>
</body>

</html>
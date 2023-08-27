<?php
require "../connection/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include '../include/base-css.php'; ?>
    <link rel="stylesheet" href="../css/krishi-book.css">
    <!-- Loading CSS -->
    <style>
       
        .tabs{
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: center;
            padding: 0.2rem;
            margin-bottom: 10px;
            height: 80px;              
        }

        .tab-item{
            cursor: pointer;
            margin: 5px;
            width: 50%;
            text-align: center;
            border-bottom: 2px solid var(--color-primary);
        }

        .tab-item:hover{
            border-bottom: 2px solid var(--color-danger);
        }
    </style>
</head>

<body>
    <div id="loading">
        <div class="loading-wrapper">
            <div class="lds-dual-ring">
                Loading...
            </div>
        </div>
    </div>
    <div class="container">
        <?php include '../include/sidebar.php'; ?>
        <main>
            <div class="main-top-card" style="background:white; height: 80px; padding-left: 30px; display: flex; align-items: center;">
                <h1>Krishi Book</h1>
            </div>

            <!-- select-crop-section start-->
            <div class="select-crop-section">
                <div class="crop-gallary">
                    <?php
                    $result = mysqli_query($con, "SELECT * FROM crop");
                    while ($data = mysqli_fetch_array($result)) {
                    ?>
                        <div class="crop-item" onClick="reply_click(this.id)" id="<?= $data["id"] ?>">
                            <img class="lozad" src="../img/upload/crop/<?= $data["image"] ?>" alt="crop-image">
                            <h2 id="crop-name"><?= $data["name"] ?></h2>
                        </div>
                    <?php } ?>
                    <form onsubmit="return false;" method="POST">
                        <input type="hidden" name="crop-id" id="crop-id" value="null">
                    </form>
                </div>
            </div>
            <!-- select-crop-section Ends -->

            <!-- Tab Navigation Menu -->
            <section class="select-dieses" style="margin-left: 10px; margin-right: 10px; display:none;">
                    <div class="tabs">
                        <!-- Toogling Horizontal Tab menu -->
                        <div onclick="$('.dg').toggle();$('.ci').toggle();" class="tab-item">Disease</div>
                        <div onclick="$('.ci').toggle();$('.dg').toggle();" class="tab-item">Crop Details</div>
                    </div>
                    <div class="dg disease-gallary"></div>
                    <div class="ci" id="crop-info" style="display: none;"></div>
            </section>
            <!-- Getting Crop Data Ends Here -->
        </main>
        <?php include '../include/right-section.php'; ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        // Getting Selected Crop Id
        function reply_click(clicked_id) {
            $("#crop-id").val(clicked_id);
            $(".select-crop-section").css("display", "none");
            getDiseaseInfo(clicked_id);
            $(".select-dieses").css("display", "block");
        }

        function getDiseaseInfo(id) {
            console.log("selected Crop Id was : " + id);
            // Getting Data From Database
            $.post({
                url: "getDisease.php",
                data: {
                    "crop_id": id
                },
                success: (response) => {
                    console.log(response.length);
                    // let array = response.parse();
                    if (response.length == 0) {
                        console.log("No Data Found For this crop");
                        $(".disease-gallary").text("No Disease Found for Selected Crop");
                    } else {
                        response.forEach(element => {
                            console.log(element.title);
                            $(".disease-gallary").append('<div style="cursor:pointer;" onclick="window.location.href=\'diseaseInfo.php?id=' + element.id + '\'" class="d-item"> <img class="lozad" src="../img/disease/' + element.image + '" alt="Disease Picture Demo"></div>');
                        });
                    }
                    getCropInfo(id);
                },
                error: (response) => {
                    console.log(response);
                }
            })
        }

        function getCropInfo(id) {
            $.post({
                url: "getCropInfo.php",
                data: {
                    "crop_id": id
                },
                success: (response) => {
                    console.log("Crop Data Recived Succesfully");
                    $("#crop-info").html(response);

                },
                error: (response) => {
                    console.log(response);
                }
            })
        }
    </script>
</body>

</html>
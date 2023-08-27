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
        .post-module {
            position: relative;
            z-index: 1;
            display: block;
            background: #FFFFFF;
            min-width: 270px;
            margin-top: 2.5%;
            border-radius: var(border-radius-3);
            height: 470px;
            box-shadow: none;
            transition: all 0.3s linear 0s;
        }

        .post-module:hover,
        .hover {
            box-shadow: none;
        }

        .post-module:hover .thumbnail img,
        .hover .thumbnail img {
            transform: scale(1.1);
            opacity: 0.6;
        }

        .post-module .thumbnail {
            background: #000000;
            height: 400px;
            overflow: hidden;
        }

        .post-module .thumbnail img {
            display: block;
            width: 120%;
            transition: all 0.3s linear 0s;
        }

        .post-module .post-content {
            position: absolute;
            bottom: 0;
            background: #FFFFFF;
            width: 100%;
            padding: 30px;
            box-sizing: border-box;
            transition: all 0.3s cubic-bezier(0.37, 0.75, 0.61, 1.05) 0s;
        }

        .post-module .post-content .title {
            margin: 0;
            padding: 0 0 10px;
            color: #333333;
            font-size: 26px;
            font-weight: 700;
        }

        .post-module .post-content .sub_title {
            margin: 0;
            padding: 0 0 20px;
            color: var(--color-success);
            font-size: 20px;
            font-weight: 400;
        }

        .post-module .post-content .description {
            display: none;
            color: #666666;
            font-size: 14px;
            line-height: 1.8em;
        }

        .hover .post-content .description {
            display: block !important;
            height: auto !important;
            opacity: 1 !important;
        }

        .pest-card {
            display: grid;
            grid-template-columns: 50% 50%;
        }

        @media only screen and (max-width:500px) {
            .pest-card {
                grid-template-columns: 1fr;
            }
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
                <h1>Disease Info</h1>
            </div>
            <!-- Post-->
            <div class="post-module card" style="padding: 0;">
                <!-- Thumbnail-->
                <?php
                $id = $_GET['id'];
                $sql = "SELECT * FROM `crop-disease` WHERE id='$id'";
                $result = mysqli_query($con, $sql);
                $row = mysqli_fetch_assoc($result);
                ?>
                <div class="thumbnail">
                    <img src="../img/disease/<?=$row['image']?>" />
                </div>
                <!-- Post Content-->
                <div class="post-content">
                    <h1 class="title"><?= $row['title'] ?></h1>
                    <h2 class="sub_title"><?= $row['description'] ?></h2>
                    <div class="description">
                        <h2 style="margin-bottom: 10px;">Symptoms</h2>
                        <hr style="margin-bottom: 10px;">
                        <?= $row['symptoms'] ?>
                    </div>
                </div>
            </div>
            <div class="card">
                <h1 style="margin-bottom: 10px;">Pesticide Information</h1>
                <hr style="margin-bottom: 10px;">
                <div class="card">
                    <?php
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `preventive-measure` WHERE `disease-id`='$id'";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result) <= 0) {
                        echo "<h2> No Pesticides Found for this disease </h2>";
                    }
                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <div class="pest-card">
                            <div>
                                <h2><?= $row['pest-name'] ?></h2>
                                <p><?= $row['description'] ?></p>
                                <h2>Quantity</h2>
                                <p><?= $row['quantity'] ?></p>
                            </div>
                            <div style="display: flex; align-items: center; justify-content: center;">
                                <img style="width: 180px;" src="../img/upload/pest/<?= $row['image'] ?>" alt="something">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </main>
        <?php include '../include/right-section.php'; ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        $('.post-module').hover(function() {
            $(this).find('.description').stop().animate({
                height: "toggle",
                opacity: "toggle"
            }, 300);
        });
    </script>
</body>

</html>
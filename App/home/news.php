<?php
require("../connection/conn.php");
if(!isset($_GET['id'])){
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/home.css">
    <style>
        .loading-wrapper {
            position: relative;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
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
        <?php include('../include/sidebar.php'); ?>
        <main>
            <div class="main-top-card" style="background:white; height: 80px; padding-left: 30px; display: flex; align-items: center;">
                <h1>News</h1>
            </div>
            <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM `news` WHERE id = '$id'";
            $row = mysqli_fetch_assoc(mysqli_query($con, $sql));
            ?>
            <div class="card" style="margin-top: 1rem">
                <h2 style="margin-bottom: 0.8rem;"><?=$row['heading']?></h2>
                <hr><br>
                <img src="../img/upload/news/<?=$row['image']?>" alt="<?=$row['image']?>">
                <br>
                <p><?=$row['news']?></p>
            </div>
            <div class="card">
                    <h2>Read Other Farming News</h2>
                    <hr><br>
                    <!-- krishi smachar card -->
                    <div class="karishi-samachar-card scroll-snap-container">
                        <?php
                        $sql = "SELECT * FROM `news`;";
                        $result = mysqli_query($con, $sql);
                        $i=0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if($i>=3){
                                continue;
                            }
                            $i++;
                        ?>
                            <div class="scroll-snap-child">
                                <img src="../img/upload/news/<?= $row['image'] ?>" alt="krishi-smachar-news thumbnail">
                                <div style="padding: 5px;">
                                    <h3>
                                        <?= $row['heading'] ?>
                                    </h3>
                                    <p class="text-fade" id="<?= md5($row['time-stamp']) ?>">
                                        <?= $row['news'] ?>
                                    </p>
                                    <div style="display: flex; justify-content:space-between; align-items:center;">
                                        <div>
                                            <span style="background-color: transparent; color:grey; font-size:medium;">
                                                <?php
                                                $date = explode(" ", $row['time-stamp']);
                                                echo $date[0];
                                                ?>
                                            </span>
                                        </div>
                                        <div style="display: flex; align-items: center; ">
                                            <a href="./news.php?id=<?=$row['id']?>" class="read-more-btn">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>

    <script src="../js/index.js"></script>
    <script>

    </script>
</body>

</html>
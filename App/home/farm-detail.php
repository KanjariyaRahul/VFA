<?php
require("../connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/farm-detail.css">
    <link rel="stylesheet" href="../css/faq.css">
    <?php include('../include/base-css.php'); ?>
    <style>
        .w-card {
            position: relative;
        }

        .ribbon {
            /* adjust the below to control the shape */
            --d: -15px;
            --g: 20px;
            --c: var(--color-primary);
            position: absolute;
            top: 0;
            right: 0;
            transform: translate(29.29%, -100%) rotate(45deg);
            /* 29.29% = 100%*(1 - cos(45deg)) */
            color: #fff;
            text-align: center;
            width: 100px;
            box-shadow: 0px 4px 5px rgba(0, 0, 0, 0.3);

            transform-origin: bottom left;
            padding: 5px 0 calc(var(--d) + 5px);
            background:
                linear-gradient(135deg, transparent var(--g), var(--c) calc(var(--g) - 0.3px)) left,
                linear-gradient(-135deg, transparent var(--g), var(--c) calc(var(--g) - 0.3px)) right;
            clip-path: polygon(0 0, 100% 0, 100% 100%, calc(100% - var(--d)) calc(100% - var(--d)), var(--d) calc(100% - var(--d)), 0 100%)
        }

        .ribbon-success {
            background: var(--color-success) !important;
        }

        .slider {
            padding: 0.5rem;
            width: 95%;
            background: var(--color-success) !important;
            border: none !important;
            margin: 0 auto;
        }

        .ui-slider-handle {
            border-radius: 1rem;
            background-color: var(--color-warning) !important;
            padding: 0.7rem !important;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include('../include/sidebar.php');
        ?>
        <main>
            <div class="main-top-card" style="margin-bottom: 2%; background:white; height: 80px; padding-left: 30px; display: flex; align-items: center;">
                <h1>Farm Details</h1>
            </div>

            <div class="card" style="margin-bottom: 10px;">
                <h1 style="color: var(--color-primary)">Currently ongoing Activity</h1>
                <div class="w-card">
                    <div class="ribbon" style="background: linear-gradient(135deg, transparent var(--g), #ff7600 calc(var(--g) - 0.3px)) left, linear-gradient(-135deg, transparent var(--g), #12d30f calc(var(--g) - 0.3px)) right;">ongoing</div>
                    <div class="top" id="current-top">
                        <span class="info">Activity alert : No Activities</span>
                        <span class="activity-date"></span>
                    </div>
                    <div class="middle" id="current-middle">
                        <img src="../img/upload/crop/coriander.jpg" style="box-shadow: var(--box-shadow);" alt="Activity Image">
                        <div>
                            <h2><?= $_GET['cropName'] ?></h2>
                            <h3>Sowing Date: <?= $str[0] = explode(" ", $_GET['sowingDate']) ?></h3>
                        </div>
                    </div>
                    <div class="footer" id="current-footer">
                        <details>
                            <p>
                                <strong><?= $_GET['cropName'] ?></strong> does't have any activity to show you <br>
                                <strong>Next Upcoming Activity date: </strong> unknown
                            </p>
                        </details>
                        <!-- <a href="allEvents.php?sid=&sowingDate=">Check All Events</a> -->
                    </div>
                </div>
            </div>

            <!-- Weather Based Activities -->
            <div class="card" style="margin-bottom: 10px;">
                <h2 style="text-align: center;">Field Activities</h2>
                <!-- Events Card Start from here -->
                <?php
                $sid = $_GET['seedId'];
                $eventSql = "SELECT * FROM `crop-event` WHERE `seed-id` = '$sid'";
                if ($result = mysqli_query($con, $eventSql)) {
                    $today = time(); 
                    $fireDate = null;
                    $str = explode(" " , $_GET['sowingDate']);
                    // echo $str[0];
                    $sowingDate = date("d-m-Y", strtotime($str[0]));
                    $eventCount = mysqli_num_rows($result);
                    if ($eventCount > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row['day-after-sowing'] >= 0) {
                                $fireDate = date('d-m-Y', strtotime($sowingDate . ' + ' . $row['day-after-sowing'] . ' days'));
                            } else {
                                $fireDate = date('d-m-Y', strtotime($sowingDate . ' ' . $row['day-after-sowing'] . ' days'));
                            }

                            $fireUnix = date(strtotime($fireDate));
                            // echo "Today" . $today;
                            // echo "<br>Fire: " . $fireUnix;
                            if ($today < $fireUnix) {
                ?>
                                <div class="w-card">
                                    <div class="ribbon">Upcoming</div>
                                    <div class="top">
                                        <span class="info">Activity alert : <?= $row['title'] ?></span>
                                        <span class="activity-date"><?= $fireDate ?></span>
                                    </div>
                                    <div class="middle">
                                        <img src="../img/upload/crop/coriander.jpg" alt="Activity Image">
                                        <div>
                                            <h2><?= $_GET['cropName'] ?></h2>
                                            <h3>Sowing Date: <?= $sowingDate ?></h3>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <details>
                                            <p><?= $row['description'] ?></p>
                                        </details>
                                        <a href="allEvents.php?sid=<?= $row['seed-id'] ?>&sowingDate=<?= $_GET['sowingDate'] ?>">Check All Events</a>
                                    </div>
                                </div>
                            <?php
                            } else if ($today > $fireUnix) {
                            ?>
                                <div class="w-card">
                                    <div class="ribbon ribbon-success">Done</div>
                                    <div class="top">
                                        <span class="info">Activity alert : <?= $row['title'] ?></span>
                                        <span class="activity-date"><?= $fireDate ?></span>
                                    </div>
                                    <div class="middle">
                                        <img src="../img/upload/crop/coriander.jpg" alt="Activity Image">
                                        <div>
                                            <h2><?= $_GET['cropName'] ?></h2>
                                            <h3>Sowing Date: <?= $sowingDate ?></h3>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <details>
                                            <p><?= $row['description'] ?></p>
                                        </details>
                                        <a href="allEvents.php?sid=<?= $row['seed-id'] ?>&sowingDate=<?= $_GET['sowingDate'] ?>">Check All Events</a>
                                    </div>
                                </div>
                <?php
                            }
                        }
                    } else {
                        echo "NO Events found for this Crop";
                    }
                } else {
                    echo mysqli_error($con);
                }
                ?>
                <!-- Events Card Ends Here -->
            </div>
            <!-- Weather Based Activities Ends Here -->
            <!-- Profit calculator Card -->
            <div class="card">
                <h2>If for 1 Acre <strong style="color: var(--color-primary);"><?= $_GET['cropName'] ?></strong> farm, your farm income is</h2>
                <div class="range-card">
                    <div id="slider" class="slider" onclick="vfaIncomeCalculation()"></div>
                    <div style="display: flex; flex-wrap: nowrap; flex-direction: row; align-items: center; justify-content: space-around; ">
                        <h2>&#8377; 50,000</h2>
                        <h2>&#8377; 1,00,000</h2>
                        <h2>&#8377; 1,50,000</h2>
                    </div>
                    <div class="range">
                        <h2>
                            Then with VFA it can be
                        </h2>
                        <h1 id="incomeCanBe">&#8377; 30,000</h1>
                    </div>
                </div>
            </div>
            <!-- Profit Calculator Card Ends Here -->

            <!-- FAQ Card  -->
            <div class="card">
                <center>
                    <h2>FAQs</h2>
                </center>
                <div class="faq">
                    <!-- Inside PHP Block -->
                    <?php
                    $cropId = $_GET['cid'];
                    $faqSQL = "SELECT * FROM `crop-faq` WHERE `crop-id` = '$cropId'";

                    if ($result = mysqli_query($con, $faqSQL)) {
                        $rowCount = mysqli_num_rows($result);
                        if ($rowCount > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                <button class="accordion"><?= $row['question'] ?></button>
                                <div class="panel">
                                    <p><?= $row['ans'] ?></p>
                                </div>
                            <?php

                            }
                        } else {
                            ?><button class="accordion">No Question</button>
                            <div class="panel">
                                <p>No FAQs Found for this Crop</p>
                            </div>
                    <?php
                        }
                    } else {
                        echo "Crop FAQs Error: " . mysqli_error($con);
                    }
                    ?>
                    <!-- PHP Block Ends Here -->
                </div>
            </div>
            <!-- FAQ Card Ends Here -->
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script src="../js/moment.js"></script>

    <script>
        // Getting only one card for Ongoing
        let doneCard = $(".ribbon-success").parent();
        // console.log(doneCard.length);
        if (doneCard.length) {
            var last = doneCard[doneCard.length - 1];
            let child = last.children;
            let topC = child[1].innerHTML;
            let middle = child[2].innerHTML;
            let footer = child[3].innerHTML;
            $("#current-top").html(topC);
            $("#current-middle").html(middle);
            $("#current-footer").html(footer);
        }
    </script>

    <!-- FAQ Card Script -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <!-- FAQ Card Scipt Ends Here -->

    <script>
        // Farm Detail Farm Income Slider
        $(function() {
            $("#slider").slider({
                min: 50000,
                max: 150000,
                slide: function() {
                    let a = $("#slider").slider("value");
                    add = a * 0.25;
                    a = a + add;
                    $("#incomeCanBe").html("&#8377; " + parseInt(a));
                },
            });
        });
        // Farm Income Slider Ends Here
    </script>
</body>

</html>
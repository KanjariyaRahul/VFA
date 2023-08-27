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
        @charset "UTF-8";

        .wrapper {
            border: 1px solid #CCC;
            background-color: #FFF;
        }

        .StepProgress {
            position: relative;
            padding-left: 45px;
            list-style: none;
        }

        .StepProgress::before {
            display: inline-block;
            content: '';
            position: absolute;
            top: 0;
            left: 15px;
            width: 10px;
            height: 100%;
            border-left: 2px solid #CCC;
        }

        .StepProgress-item {
            position: relative;
            counter-increment: list;
        }

        .StepProgress-item:not(:last-child) {
            padding-bottom: 20px;
        }

        .StepProgress-item::before {
            display: inline-block;
            content: '';
            position: absolute;
            left: -30px;
            height: 100%;
            width: 10px;
        }

        .StepProgress-item::after {
            content: '';
            display: inline-block;
            position: absolute;
            top: 0;
            left: -37px;
            width: 12px;
            height: 12px;
            border: 2px solid #CCC;
            border-radius: 50%;
            background-color: #FFF;
        }

        .StepProgress-item.is-done::before {
            border-left: 2px solid green;
        }

        .StepProgress-item.is-done::after {
            content: "✔";
            font-size: 10px;
            color: #FFF;
            text-align: center;
            border: 2px solid green;
            background-color: green;
        }

        .StepProgress-item.current::before {
            border-left: 2px solid green;
        }

        .StepProgress-item.current::after {
            content: counter(list);
            padding-top: 1px;
            width: 19px;
            height: 18px;
            top: -4px;
            left: -40px;
            font-size: 14px;
            text-align: center;
            color: green;
            border: 2px solid green;
            background-color: white;
        }

        .StepProgress strong {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        include('../include/sidebar.php');
        ?>
        <main>
            <div class="main-top-card" style="margin-bottom:2%; background:white; height: 80px; padding-left: 30px; display: flex; align-items: center;">
                <h1>All Events</h1>
            </div>
            <div class="wrapper card">
                <ul class="StepProgress">
                    <?php
                    $sid = $_GET['sid'];
                    $eventSql = "SELECT * FROM `crop-event` WHERE `seed-id` = '$sid'";
                    if ($result = mysqli_query($con, $eventSql)) {
                        $today = time();
                        $fireDate = null;
                        $sowingDate = date("d-m-Y", strtotime($_GET['sowingDate']));
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
                                    <li class="StepProgress-item current"><strong><?= $row['title'] ?></strong><?= $row['title'] ?></li>
                                    <!-- 
                                    Class Name: 
                                        current (Used to display Current onGoing Event)
                                        is-done (used to display completed Task)
                                 -->
                                <?php
                                } else if ($today > $fireUnix) {
                                ?>
                                    <li class="StepProgress-item is-done"><strong><?= $row['title'] ?></strong><?= $row['title'] ?></li>
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
                </ul>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
        <script src="../js/index.js"></script>
    </div>
</body>

</html>
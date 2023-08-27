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
    <?php include('../include/base-css.php'); ?>
    <style>
        .card {
            box-shadow: var(--box-shadow);
            border-radius: 1rem;
            padding: 0.5rem;
            overflow: hidden;
            background-color: var(--color-light);
            width: 98%;
            margin: 0 auto;
            margin-bottom: 5px;
        }

        .w-card {
            box-shadow: var(--box-shadow);
            border-radius: 1rem;
            padding: 0.5rem;
            overflow: hidden;
            background-color: white;
            width: 98%;
            margin: 0 auto;
            margin-bottom: 5px;
        }

        .w-card>.top {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
        }

        .top>.info {
            width: 70%;
            height: 20%;
            padding: 0.5rem;
            background-color: rgb(247, 80, 80);
            color: white;
            border-top-left-radius: 1rem;
            border-bottom-right-radius: 1rem;
            overflow: hidden;
        }

        .middle,
        .p-card {
            display: flex;
            justify-content: flex-start;
        }

        .middle>img {
            width: 130px;
            border-radius: 1rem;
            margin: 10px;
        }

        .middle>div {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .middle>div>h2 {
            width: 100%;
        }

        .activity-date {
            width: 30%;
            text-align: center;
        }

        .p-card>img {
            width: 130px;
            border-radius: 1rem;
            margin: 10px;
        }

        .rangeslider,
        input[type=range] {
            max-width: 400px;
        }

        .rangeslider__ruler {
            cursor: pointer;
            font-size: 0.7em;
            margin: 20px 3px 0 3px;
            position: relative;
            top: 100%;
            text-align: justify;
        }

        .rangeslider__ruler:after {
            content: "";
            display: inline-block;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Farm Details</h1>

            <!-- Weather Based Activities -->
            <div class="card">
                <h2 style="text-align: center;">Weather based Activities</h2>
                <!-- Activity Card Start from here -->
                <div class="w-card">
                    <div class="top">
                        <span class="info">Activity alert : [Some Messege]</span>
                        <span class="activity-date">14-sept-2002</span>
                    </div>
                    <div class="middle">
                        <img src="../img//carousel-image04.jpg" alt="Activity Image">
                        <div>
                            <h2>Crop Name</h2>
                            <h3>Sowing Date: 14/09/2002</h3>
                        </div>
                    </div>
                    <div class="footer">
                        <details>
                            <summary>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eos delectus
                                veritatis pariatur molestiae maxime praesentium laborum tenetur repellat velit!
                            </summary>
                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
                                international pavilions, award-winning fireworks and seasonal special events.</p>
                        </details>
                    </div>
                </div>
                <!-- Activity Card Ends Here -->
                <div class="w-card">
                    <div class="top">
                        <span class="info">Activity alert : [Some Messege]</span>
                        <span class="activity-date">14-sept-2002</span>
                    </div>
                    <div class="middle">
                        <img src="../img//carousel-image04.jpg" alt="Activity Image">
                        <div>
                            <h2>Crop Name</h2>
                            <h3>Sowing Date: 14/09/2002</h3>
                        </div>
                    </div>
                    <div class="footer">
                        <details>
                            <summary>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eos delectus
                                veritatis pariatur molestiae maxime praesentium laborum tenetur repellat velit!
                            </summary>
                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
                                international pavilions, award-winning fireworks and seasonal special events.</p>
                        </details>
                    </div>
                </div>
            </div>
            <!-- Weather Based Activities Ends Here -->
            <!-- Profit calculator Card -->
            <div class="card">
                <div class="p-card">
                    <img src="../img/crop-info/soil.jpg" alt="Crop Image">
                    <h3>If for 1 Acre [CROP_NAME] farm, your farm income is</h3>
                </div>
                <input type="range" min="0" max="4" step="0.5">
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
        <script src="../js/index.js"></script>
        <!-- Range Slider Script -->
        <script>
            var $r = $('input[type="range"]');
            var $ruler = $('<div class="rangeslider__ruler" />');

            // Initialize
            $r.rangeslider({
                polyfill: false,
                onInit: function () {
                    $ruler[0].innerHTML = getRulerRange(this.min, this.max, this.step);
                    this.$range.prepend($ruler);
                }
            });

            function getRulerRange(min, max, step) {
                var range = '';
                var i = 0;

                while (i <= max) {
                    range += i + ' ';
                    i = i + step;
                }
                return range;
            }
        </script>
    </div>
</body>

</html>
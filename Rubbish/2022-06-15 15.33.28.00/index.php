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
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/weather.css">
    <link rel="stylesheet" href="weather-icons-wind.min.css">
    <link rel="stylesheet" href="weather-icons.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Weather</h1>
            <div class="card">
                <div class="top">
                    <h3>
                        <span class="material-icons-sharp">
                            location_on
                        </span>
                        <span class="location" style="color: white;font-size: large;">Location</span>
                    </h3>
                    &nbsp;&nbsp;&nbsp;
                    <p id="date" style="color: white; text-align:right; width:100%;">Time</p>
                </div>
                <div class="body">
                    <div>
                        <h1>
                            <span style="font-size: 4rem; text-align:center;" id="temp">0</span>
                            <sup>
                                <span class="material-icons-sharp" style="font-size: medium;">
                                    radio_button_unchecked
                                </span>
                            </sup>
                        </h1>
                        <h3 id="desc">Mostly Cloudy</h3>
                        <div style="font-weight: 600;">
                            <span>Day <span id="max">MAX_Temp</span><sup style="font-size: xx-small; color:var(--color-primary);">&#x2103;</sup></span>
                            <span>Night <span id="min">MIN_Temp</span><sup style="font-size: xx-small; color:var(--color-primary);">&#x2103;</sup></span>
                        </div>
                    </div>
                    <div class="large-icon">
                        <span class="wi wi-rain" style="font-size: 5rem;"></span>
                    </div>
                </div>
            </div>

            <h2 style="text-align: center;">Weather Today in <span class="location">Location</span></h2>
            <div class="today-weather">
                <div class="grid-item">
                    <span>
                        <span class="wi wi-rain"></span>
                    </span>
                    <h3>Rain</h3>
                    <span id="rain">No Data :(</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-celsius"></span>
                    </span>
                    <h3>Feels Like</h3>
                    <span id="feel">0000</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-wind-direction"></span>
                    </span>
                    <h3>Wind Direction</h3>
                    <span id="dd">0000</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-windy"></span>
                    </span>
                    <h3>Wind Speed</h3>
                    <span id="sd">0000</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-sunrise"></span>
                    </span>
                    <h3>Sun Rise</h3>
                    <span id="srd">0000</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-sunset"></span>
                    </span>
                    <h3>Sunset</h3>
                    <span id="ssd">0000</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-small-craft-advisory"></span>
                    </span>
                    <h3>Visibility</h3>
                    <span id="vd">0000</span>
                </div>
                <div class="grid-item">
                    <span><span class="wi wi-barometer"></span>
                    </span>
                    <h3>Pressure</h3>
                    <span id="pd">0000</span>
                </div>
                <div class="grid-item">
                    <span>
                        <span class="wi wi-humidity"></span>
                    </span>
                    <h3>Humanity</h3>
                    <span id="hd">0000</span>
                </div>
            </div>

        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script src="weather-report.js"></script>
    <script>
        $('.sun-animation').css('width', '70%');
        $('.sun-symbol-path').css('-webkit-transform', 'rotateZ(25deg)');
    </script>
</body>

</html>
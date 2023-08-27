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
    <link rel="stylesheet" href="../css/settings.css">
    <style>
        table {
            width: 100%;
        }

        .left{
            padding: 0.2rem;
            text-align: end;
        }
        td>select,input{
            outline: none;
            border: none;
            padding: 0.5rem;
            width: 100%;
            background-color: var(--color-info-light);
        }

        .location{
            display: none;
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
                <h1>Settings</h1>
            </div>
            <div class="menu card" style="margin-top: 15px;">
                <table>
                    <tr>
                        <td><label for="language">Language:</label></td>
                        <td class="left">
                            <select name="language" id="language">
                                <option class="item" value="eng">English</option>
                                <option class="item" value="gu">Gujarati</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>PINCODE</td>
                        <td class="left">
                            <input type="text" placeholder=" Enter Area Code" id="zipcode" onkeydown="test();">
                        </td>
                    </tr>
                    <tr class="location">
                        <td>
                            <label for="village">Village</label>
                        </td>
                        <td class="left">
                            <select id="village">
                            </select>
                        </td>
                    </tr>
                    <tr class="location" >
                        <td><label for="province">Taluko</label></td>
                        <td class="left"><span id="province">PROVINCE_NAME</span></td>
                    </tr>
                    <tr class="location" >
                        <td><label for="district">District</label></td>
                        <td class="left"><span id="district">DISTRICT_NAME</span></td>
                    </tr>
                    <tr class="location" >
                        <td><label for="state">State</label></td>
                        <td class="left"><span id="state">STATE_NAME</span></td>
                    </tr>
                    <tr class="location" >
                        <td>
                            <span> </span>
                        </td>
                        <td class="left">
                            <button onclick="saveLocation()">Save Location Info</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="noti">Notification Updates: </label>
                        </td>
                        <td class="left">
                            <label class="switch">
                                <input id="noti" type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="noti">Weather Updates: </label>
                        </td>
                        <td class="left">
                            <label class="switch">
                                <input id="weather_noti" type="checkbox" checked>
                                <span class="slider round"></span>
                            </label>
                        </td>
                    </tr>
                </table>
                <br>
                <button onclick="saveSettings();" class="btn"><span class="btnspan">Save Settings</span></button>
            </div>
            <br>
            <footer>
                <a title="Terms & Conditions" href="../terms/" class="sidebarA" id="terms">
                    <span class="material-icons-sharp">
                        gavel
                    </span>
                    <h4>Terms & Conditions</h4>
                </a>
                <a title="Privacy Policy" href="../policy/" class="sidebarA" id="policy">
                    <span class="material-icons-sharp">
                        policy
                    </span>
                    <h4>Privacy Policy</h4>
                </a>
            </footer>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script src="location.js"></script>

    <!-- Save settings Script -->
    <script>
        let lang = localStorage.getItem("user_lang");
        let noti_up = localStorage.getItem("notification_updates");
        let weather_up = localStorage.getItem("weather_updates");

        if (lang && noti_up && weather_up) {
            $("#language").val(localStorage.getItem("user_lang"));
            console.log("Noti: " + noti_up + " \nWeather up: " + weather_up)
            if (noti_up == "true") {
                document.getElementById('noti').checked = true;
            } else {
                document.getElementById('noti').checked = false;
            }
            if (weather_up == "true") {
                document.getElementById('weather_noti').checked = true;
            } else {
                document.getElementById('weather_noti').checked = false;
            }
        }

        function saveSettings() {
            localStorage.setItem("user_lang", $("#language").val());
            let notification_updates = document.getElementById('noti');
            if (notification_updates.checked) {
                localStorage.setItem("notification_updates", true);
            } else {
                localStorage.setItem("notification_updates", false);
            }
            let weather_updates = document.getElementById('weather_noti');
            if (weather_updates.checked) {
                localStorage.setItem("weather_updates", true);
            } else {
                localStorage.setItem("weather_updates", false);
            }
            console.log("Settings Saved Succesfully");
        }
    </script>
</body>

</html>
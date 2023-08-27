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
        .menu {
            padding: 1rem;
        }

        .menu>div {
            margin: 0.5rem;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
        }


        .menu>div>select,
        input {
            width: 75%;
            padding: 0.5rem;
            font-size: medium;
            outline: none;
            border: none;
        }

        .menu>div>span {
            width: 75%;
            font-size: medium;
            padding: 0.5rem;
            margin: 0.2rem;
            background-color: white;
            color: black;
        }

        .zip {
            display: flex;
            justify-content: space-between;
            width: 75%;
        }

        button {
            outline: none;
            border: none;
            background-color: white;
            color: black;
            padding: 0.5rem;
            margin-right: 5px;
            border-radius: 5px;
            box-shadow: var(--box-shadow);
        }

        button:hover {
            background-color: var(--color-primary);
            color: white;
            transition: all 500ms ease;
        }

        .item {
            padding: 1rem;
            margin: 0.5rem;
            min-height: 100px;
        }

        label {
            font-size: larger;
        }

        .btn {
            background-image: linear-gradient(135deg, #008aff, #86d472);
            border-radius: 6px;
            box-sizing: border-box;
            color: black;
            display: block;
            height: 50px;
            font-size: 1.4em;
            font-weight: 600;
            padding: 4px;
            position: relative;
            text-decoration: none;
            width: 90%;
            margin: 0 auto;
            z-index: 2;
        }

        .btn:hover {
            color: #ffffff;
        }

        .btn .btnspan {
            align-items: center;
            background: white;
            border-radius: 6px;
            display: flex;
            justify-content: center;
            height: 100%;
            transition: background 0.5s ease;
            width: 100%;
        }

        .btn:hover .btnspan {
            background: transparent;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Settings</h1>
            <div class="menu">
                <div>
                    <label for="language">Language: </label>
                    <select name="language" id="language">
                        <option class="item" value="eng">English</option>
                        <option class="item" value="hi">Hindi</option>
                        <option class="item" value="gu">Gujarati</option>
                    </select>
                </div>
                <div>
                    <label for="area">Area Type:</label>
                    <select name="areatype" id="area">
                        <option class="item" value="ac">Acre</option>
                        <option class="item" value="hc">Hacter</option>
                        <option class="item" value="bi">Bigha</option>
                        <option class="item" value="gaj">Gaj</option>
                        <option class="item" value="sqm">Square meter</option>
                        <option class="item" value="sqf">Square Feet</option>
                        <option class="item" value="sqy">Square yard</option>
                    </select>
                </div>
                <!-- Set Location  -->
                <div>
                    <label for="village">Enter Location</label>
                    <div class="zip">
                        <input type="text" placeholder="Enter your Local ZIPCODE" id="zipcode" onkeydown="test();">
                        <button type="button" onclick="getZipLocation();">
                            <span class="material-icons-sharp">
                                search
                            </span>
                        </button>
                    </div>
                </div>
                <!-- Location Area -->
                <div class="location" style="display: none;">
                    <label for="village">Village</label>
                    <span id="village">VILLAGE_NAME</span>
                </div>
                <div class="location" style="display: none;">
                    <label for="province">Taluko</label>
                    <span id="province">PROVINCE_NAME</span>
                </div>
                <div class="location" style="display: none;">
                    <label for="district">District</label>
                    <span id="district">DISTRICT_NAME</span>
                </div>
                <div class="location" style="display: none;">
                    <label for="state">State</label>
                    <span id="state">STATE_NAME</span>
                </div>
                <div>
                    <label for="noti">Get Daily Notification Updates: </label>
                    <label class="switch">
                        <input id="noti" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <label for="noti">Get Daily Weather Updates: </label>
                    <label class="switch">
                        <input id="noti" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <a class="btn" href="/"><span class="btnspan">Save Settings</span></a>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script src="location.js"></script>
</body>

</html>
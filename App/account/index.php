<?php
require('../connection/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/account.css">
    <?php include('../include/base-css.php'); ?>
    <style>
        .btn {
            display: block;
            margin: 0% auto;
            border: none;
            padding: 1rem;
            color: white;
            font-size: large;
            border-radius: 0.6rem;
            cursor: pointer;
            background-color: var(--color-info-light);
            color: var(--color-primary-variant);
        }

        .btn:hover{
            background-color: var(--color-primary);
            color: white;
            transition: all 300ms ease;
        }

        .card>a:hover {
            color: var(--color-danger);
            transition: 500ms all ease;
            cursor: pointer;
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
        <?php
        include('../include/sidebar.php');
        if (isset($_GET['msg'])) {
        ?>
            <script>
                alertify.message("<?= $_GET['msg'] ?>");
            </script>
        <?php
        }
        ?>
        <main>
            <div class="main-top-card" style="background:white; height: 80px; padding-left: 30px; display: flex; align-items: center;">
                <h1>Account</h1>
            </div>
            <!-- Profile information -->
            <div class="profile-box card" id="profile-box">
                <div class="nav">
                    <h2>My Profile</h2>
                    <h2 style="cursor:pointer;" onclick="show_edit_box()">Edit Profile</h2>
                </div>
                <div class="middle">
                    <img src="../img/default-user.png" alt="profile-image">
                    <h2 id="farmerName">Farmer Name</h2>
                    <div>
                        <!-- <span class="material-icons-sharp" style="color: green;">
                            whatsapp
                        </span> -->
                        <span id="farmerMobile">+91 xxxxxxxxx</span>
                    </div>
                </div>
            </div>

            <!-- Your Current Crop -->
            <div class="crop" id="crop">

            </div>

            <!-- Edit Profile Box -->
            <div class="edit-profile" id="edit-profile-box">
                <div class="top">
                    <span class="material-icons-sharp back-btn" style="margin-right: 5px; cursor:pointer;" onclick="show_profile()">keyboard_backspace</span>
                    <h2>Edit Profile</h2>
                </div>
                <div class="edit-profile-body">
                    <form onsubmit="return false;" method="post" id="edit-form">
                        <input type="hidden" name="farmer-id" id="farmer-id" value="">
                        <input type="text" name="farmer-name" id="farmer-name" placeholder="Name">
                        <input type="text" readonly name="farmer-username" id="farmer-username" placeholder="User name">
                        <input type="tel" readonly name="farmer-mobile" id="farmer-mobile" placeholder="Mobile No">
                        <input type="email" name="farmer-mail" id="farmer-mail" placeholder="Email">
                        <input type="text" name="farmer-state" id="farmer-state" placeholder="State">
                        <input type="text" name="farmer-district" id="farmer-district" placeholder="District">
                        <input type="text" name="farmer-taluka" id="farmer-taluka" placeholder="Taluka">
                        <input type="text" name="farmer-village" id="farmer-village" placeholder="Village">
                        <input type="text" name="farmer-code" id="farmer-code" placeholder="Area Pincode">
                        <button class="btn" onclick="updateProfile();"> Update Profile </button>
                    </form>
                </div>
            </div>
            <!-- Edit Profile Box Ends Here -->
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        // Getting Farmers Name and Mobile no from Javascript Session 
        $("#farmerName").text(sessionStorage.getItem("farmerName"));
        $("#farmerMobile").html("+91 <b>" + sessionStorage.getItem("farmerMno") + "</b>");

        function show_profile() {
            document.getElementById('profile-box').style.display = 'block';
            document.getElementById('crop').style.display = 'block';
            document.getElementById('edit-profile-box').style.display = 'none';
            $("#logout").css("display", "block");
        }

        function show_edit_box() {
            // Editing Profile 
            document.getElementById('profile-box').style.display = 'none';
            document.getElementById('crop').style.display = 'none';
            document.getElementById('edit-profile-box').style.display = 'block';

            // Edit Box Input Value Place holder 
            if (sessionStorage.getItem("farmerName") != "") {
                $("#farmer-name").attr("value", sessionStorage.getItem("farmerName"));
            } else {
                $("#farmer-name").attr("placeholder", "Enter Name");
            }

            if (sessionStorage.getItem("farmerUsername") != "null") {
                $("#farmer-username").attr("value", sessionStorage.getItem("farmerUsername"));
            } else {
                $("#farmer-username").attr("placeholder", "Enter Username");
            }

            if (sessionStorage.getItem("farmerMno") != "null") {
                $("#farmer-mobile").attr("value", sessionStorage.getItem("farmerMno"));
            } else {
                $("#farmer-mobile").attr("placeholder", "Enter Mobileno");
            }

            if (sessionStorage.getItem("farmerEmail") != "null") {
                $("#farmer-mail").attr("value", sessionStorage.getItem("farmerEmail"));
            } else {
                $("#farmer-mail").attr("placeholder", "Enter Email");
            }

            if (sessionStorage.getItem("farmerState") != "null") {
                $("#farmer-state").attr("value", sessionStorage.getItem("farmerState"));
            } else {
                $("#farmer-state").attr("placeholder", "Enter State");
            }

            if (sessionStorage.getItem("farmerDistrict") != "null") {
                $("#farmer-district").attr("value", sessionStorage.getItem("farmerDistrict"));
            } else {
                $("#farmer-district").attr("placeholder", "Enter District");
            }

            if (sessionStorage.getItem("farmerTaluko") != "null") {
                $("#farmer-taluka").attr("value", sessionStorage.getItem("farmerTaluko"));
            } else {
                $("#farmer-taluka").attr("placeholder", "Enter Taluko");
            }

            if (sessionStorage.getItem("farmerVillage") != "null") {
                $("#farmer-village").attr("value", sessionStorage.getItem("farmerVillage"));
            } else {
                $("#farmer-village").attr("placeholder", "Enter Village");
            }

            if (sessionStorage.getItem("farmerPincode") != "null") {
                $("#farmer-code").attr("value", sessionStorage.getItem("farmerPincode"));
            } else {
                $("#farmer-code").attr("placeholder", "Enter pincode");
            }
        }

        // Logging Out 
        $("#logout").click(() => {
            let see = confirm("Are you sure you want to Logout?");
            if (see) {
                sessionStorage.clear();
                window.location.href = "../../index.html";
            } else {
                console.log("Logout Canceled by user");
            }
        })

        // Updating Profile 
        function updateProfile() {
            // Sending Farmer id for Updating records 
            $("#farmer-id").val(sessionStorage.getItem("farmerId")); // Don't modify this value 

            // Performing AJAX Request
            if (confirm("Are you Sure you want to Update your Profile? ")) {
                $.post({
                    url: "edit.php",
                    data: $("#edit-form").serialize(),
                    success: (Response) => {
                        console.log(Response);
                        if (Response.status) {
                            show_profile();
                            alertify.warning(Response.msg);
                            console.log(Response); // Debugging 
                            sessionStorage.setItem("userLoggedin", Response.status);
                            sessionStorage.setItem("farmerId", Response.data[0]["id"]);
                            sessionStorage.setItem("farmerName", Response.data[0]["name"]);
                            sessionStorage.setItem("farmerMno", Response.data[0]["mobile"]);
                            sessionStorage.setItem("farmerUsername", Response.data[0]["username"]);
                            sessionStorage.setItem("farmerEmail", Response.data[0]["email"]);
                            sessionStorage.setItem("farmerState", Response.data[0]["state"]);
                            sessionStorage.setItem("farmerDistrict", Response.data[0]["district"]);
                            sessionStorage.setItem("farmerTaluko", Response.data[0]["taluka"]);
                            sessionStorage.setItem("farmerVillage", Response.data[0]["village"]);
                            sessionStorage.setItem("farmerPincode", Response.data[0]["pincode"]);
                        }
                    },
                    error: (Response) => {
                        console.log(Response);
                    }
                })
            }
        }
    </script>

    <!-- Get Farm Script -->
    <script>
        let fid = sessionStorage.getItem("farmerId");
        $.get({
            url: "getFarm.php?fid=" + fid,
            success: (response) => {
                $("#crop").html(response);
            },
            error: (response) => {
                $("#crop").html(response);
            }
        })
    </script>
</body>

</html>
<?php 
    if(!isset($_GET['hash']) && !isset($_GET['user'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/alertify.min.css">
    <title>VFA -Password Reset</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/alertify.min.js"></script>
    <style>
        * {
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
        }

        body {
            background-color: #EFFFFD;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 1rem;
        }

        .container {
            width: 60vw;
            height: 90vh;
            padding: 0.5rem;
            background-color: #FFF;
            box-shadow:
                2.8px 2.8px 2.2px rgba(0, 0, 0, 0.02),
                6.7px 6.7px 5.3px rgba(0, 0, 0, 0.028),
                12.5px 12.5px 10px rgba(0, 0, 0, 0.035),
                22.3px 22.3px 17.9px rgba(0, 0, 0, 0.042),
                41.8px 41.8px 33.4px rgba(0, 0, 0, 0.05),
                100px 100px 80px rgba(0, 0, 0, 0.07);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .right>img {
            width: 60%;
            margin: 0 auto;
            display: block;
        }

        .right {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        input {
            width: 100%;
            padding: 1rem;
            border: none;
            margin: 0.5rem;
            border-bottom: 1px solid #85F4FF;
            outline: none;
        }

        .bn632-hover {
            width: auto;
            padding: 0.5rem;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 20px;
            height: 55px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:hover {
            background-position: 100% 0;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .bn632-hover:focus {
            outline: none;
        }

        .bn632-hover.bn22 {
            background-image: linear-gradient(to right,
                    #0ba360,
                    #3cba92,
                    #30dd8a,
                    #2bb673);
            box-shadow: 0 4px 15px 0 rgba(23, 168, 108, 0.75);
        }
        center>h2{
                font-size: 3rem;
                color: orange; 
                margin-top: 5px;
            }

        @media only screen and (max-width: 700px) {
            .container {
                width: 100%;
                height: 100vh;
                flex-direction: column;
            }
            center>h2{
                font-size: 2rem;
            }

            .right{
                flex-direction: column;
            }

            .right>img{
                width: 80vw;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <center>
            <h2>VFA Passwrod Reset</h2>
        </center>
        <div class="right">
            <img src="https://i.postimg.cc/qq8TLTzM/Tiny-people-carrying-key-to-open-padlock.jpg" alt="password reset image">
            <div >
                <input type="hidden" id="hash" value="<?=$_GET['hash']?>">
                <input type="hidden" id="user" value="<?=$_GET['user']?>">
                <input id="Password" type="text" placeholder="Enter New Password">
                <input id="cPassword" type="text" placeholder="Confirm New Password">
                <button class="bn632-hover bn22" type="button" onclick="changePassword()">Change Password</button>
            </div>
        </div>
    </div>
    <script>
        function changePassword() {
            let pass = $("#Password").val();
            let cPass = $("#cPassword").val();
            let hash = $("#hash").val();
            let user = $("#user").val();

            if (pass == cPass) {
                alertify.confirm("Change Confirmation!", "Are you sure you want to change your password, This activity can not be undo", function() {
                    // sending ajax request to update password 
                    $.get({
                        url: "passwordUpdate.php?hash=" + hash + "&user=" + user + "&pass=" + pass,
                        success: (response) => {
                            alertify.alert("VFA -AI Farming Technology",response);
                            window.location.href = "index.php";
                        },
                        error: (response) => {
                            alertify.alert(response);
                        }
                    })
                }, function() {
                    alertify.alert("VFA -AI Farming Technology","Password Changed canceled by user");
                    window.location.href = "index.php";
                })
            } else {
                alertify.alert("Not Matched", "New Password and confirm password are not same");
            }
        }
    </script>
</body>

</html>
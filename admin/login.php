<?php
session_start();
if (isset($_GET['lg'])) {
    session_destroy();
}
// echo $_SESSION['adminLogin'];
if (isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - VFA</title>
    <meta name="description" content="VFA is a farming technology platform where we work with farmers directly. We at VFA follow our mission of bridging the gap between technology and agriculture in India with a vision to reach out to maximum Indian farmers.">
    <link rel="shortcut icon" href="https://i.postimg.cc/Y0TNZw1n/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Features-Large-Icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg d-lg-flex o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image" style="background-image: url(&quot;assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-lg-flex flex-column p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Boss!</h4>
                                    </div>
                                    <form class="user" id="login" method="POST" onsubmit="return false;">
                                        <div class="mb-3">
                                            <input name="username" class="form-control form-control-user" type="text" id="user" placeholder="Enter username">
                                        </div>
                                        <div class="mb-3">
                                            <input name="password" class="form-control form-control-user" type="password" id="pass" placeholder="Password">
                                        </div>
                                        <!-- <button class="btn btn-primary" type="submit">Login</button> -->
                                    </form>
                                    <button class="btn btn-primary" type="button" onclick="login();">Login</button>


                                    <div id="alert" class="alert alert-danger mt-2 h-auto w-auto" role="alert" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("./include/scripts.php"); ?>
    <!-- login Script -->
    <script>
        // Getting Login Details from Database 
        function login() {
            let username = $("#user").val();
            let password = $("#pass").val();
            $.post({
                url: "./script/login.php",
                data: {
                    "username": username,
                    "password": password
                },
                success: function(response) {
                    if (response.status == "true") {
                        // console.log(response.data[0].name);
                        window.location.href = "index.php";
                    } else {
                        console.log("Login Failed");
                        $("#alert").css("display", "block");
                        $("#alert").html("Invalid UserName or Password");
                    }
                },
                error: function(data) {
                    console.error(data.responseText);
                    $("#alert").css("display", "block");
                    $("#alert").html(data.responseText);
                }
            })
        }
    </script>
</body>

</html>
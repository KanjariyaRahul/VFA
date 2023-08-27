<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Login/Register</title>
    <link rel="stylesheet" href="../css/authenticate.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/alertify.min.css">
    <script src="../js/alertify.min.js"></script>
    <style>
        .displayBadge {
            margin-top: 5px;
            display: none;
            text-align: center;
            padding: 0.5rem;
            border-radius: 0.5rem;
            color: white;
            transition: all 300ms ease;
        }

        /* Loading Screen CSS */
        #loading {
            display: none;
        }

        .loading-wrapper {
            position: fixed;
            top: 0%;
            left: 0%;
            width: 100vw;
            height: 100vh;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex !important;
            justify-content: center;
            z-index: 9999999999;
            align-items: center;
            display: none;
        }

        .lds-dual-ring {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: absolute;
            width: 50vw;
            height: 200px;
            margin: 0 auto;
            box-shadow: var(--box-shadow);
            padding: 2rem;
            background-color: #fff;
            border-radius: 1rem;
        }

        .lds-dual-ring::before {
            content: " ";
            display: block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 6px solid #fff;
            border-color: limegreen transparent lightgreen transparent;
            animation: lds-dual-ring 800ms ease infinite;
        }

        @keyframes lds-dual-ring {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

    <!-- If Farmer Already Logged In redirect to App Home Page -->
    <?php
    include("../connection/conn.php");
    if (isset($_GET['so']) && $_GET['so'] == true) {
        session_destroy();
    }
    if (isset($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn'] == true) {
        header("Location: ../home");
    }
    ?>
</head>

<body>
    <div id="loading">
        <div class="loading-wrapper">
            <div class="lds-dual-ring">
                Loading...
            </div>
        </div>
    </div>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <form autocomplete="off" method="post" id="register-form" onsubmit="return false;" class="form sign-up">
                        <div class="input-group">
                            <i class='material-icons-sharp'>sentiment_satisfied_alt</i>
                            <input type="text" placeholder="Name" name="f-name" id="fname">
                        </div>
                        <div class="input-group">
                            <i class='material-icons-sharp'>phone_enabled</i>
                            <input type="tel" placeholder="Mobile No" name="f-mobileno" id="fmobile" onkeyup="mobileValidation()">
                            <span id="mobileValid"></span>
                        </div>
                        <div class="input-group">
                            <i class='material-icons-sharp'>email</i>
                            <input onkeyup="emailValidation()" type="email" placeholder="Email" name="f-email" id="fmail">
                            <span id="emailValid"></span>
                        </div>
                        <div class="input-group">
                            <i class='material-icons-sharp'>person</i>
                            <input onkeyup="userValidation()" type="text" placeholder="Username" name="f-username" id="fusername">
                            <span id="userValid"></span>
                        </div>
                        <div class="input-group">
                            <i class="material-icons-sharp" onclick="passwordToggle('password', this.id)" id="rpass-icon" style="cursor: pointer;">
                                visibility
                            </i>
                            <input onkeyup="StrengthChecker(this.value);" type="password" placeholder="Password" id="password">
                            <span id="StrengthDisp" class="badge displayBadge">Weak</span>
                        </div>
                        <div class="input-group">
                            <i class="material-icons-sharp" onclick="passwordToggle('cpassword', this.id)" id="cpass-icon" style="cursor: pointer;">
                                visibility
                            </i>
                            <input  type="password" placeholder="Confirm password" name="f-password" id="cpassword">
                        </div>
                        <button id="regBtn" type="submit" onclick="register();">
                            Sign up
                        </button>
                        <p>
                            <span>
                                Already have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign in here
                            </b>
                        </p>
                    </form>
                </div>
            </div>
            <!-- END SIGN UP -->

            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <form autocomplete="off" class="form sign-in" method="post" onsubmit="return false;" id="login-form">
                        <div class="input-group">
                            <i class="material-icons-sharp" style="cursor: pointer;">
                                person
                            </i>
                            <input type="text" placeholder="Username" name="f-username">
                        </div>
                        <div class="input-group">
                            <i class="material-icons-sharp" onclick="passwordToggle('l-pass', this.id)" style="cursor: pointer;" id="lpass-icon">
                                visibility
                            </i>
                            <input type="password" placeholder="Password" name="f-password" id="l-pass">
                        </div>
                        <button type="submit" onclick="login();">
                            Sign in
                        </button>
                        <p>
                            <b>
                                <a href="forgot-password.htm" style="color: tomato;">Forgot password?</a>
                            </b>
                        </p>
                        <p>
                            <span>
                                Don't have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign up here
                            </b>
                        </p>
                    </form>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->

        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Welcome to VFA
                    </h2>

                </div>
                <div class="img sign-in">

                </div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">

                </div>
                <div class="text sign-up">
                    <h2>
                        Join with VFA
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->

    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <!-- Animation Design Script  -->
    <script>
        let container = document.getElementById('container')

        toggle = () => {
            container.classList.toggle('sign-up')
            container.classList.toggle('sign-in')
        }

        setTimeout(() => {
            <?php
            if (isset($_GET['s']) && $_GET['s'] == "signup") {
                echo "container.classList.add('sign-up')";
            } else {
                echo "container.classList.add('sign-in')";
            }
            ?>
        }, 200)
    </script>

    <!-- Ajax Script -->
    <script>
        // Login Ajax Request  
        function login() {
            // Ajax Loading Scree
            $(document).ajaxStart(function() {
                $("#loading").show();
            });
            $(document).ajaxStop(function() {
                $("#loading").hide();
            });
            $.post({
                url: 'login.php',
                data: $("#login-form").serialize(),
                success: async function(response) {
                    // console.log(response); // Debugging 
                    await setUserInfo(response);



                    // If username or password are not valid show this notification
                    if (response.status == false) {
                        console.warn("Invalid Username or Password");
                        alertify.alert("Error! " + response.data);
                    }
                },
                error: function(data) {
                    console.error(data.responseText);
                    alertify.alert("500 | Internal server Error");
                }
            });
        }

        // Registration AJax Request 
        function register() {
            let name = $("#fname").val();
            let mobile = $("#fmobile").val();
            let email = $("#fmail").val();
            let username = $("#fusername").val();
            let pass = $("#password").val();
            let cpass = $("#cpassword").val();

            // Ajax Loading Scree
            $(document).ajaxStart(function() {
                $("#loading").show();
            });
            $(document).ajaxStop(function() {
                $("#loading").hide();
            });
            if (pass == cpass) {
                alertify.confirm("VFA Terms & Policy", "By Registring with VFA you Agree to Our Policy",
                    function() {
                        // alertify.warning("You are registered")
                        $.get({
                            url: "register.php",
                            data: {
                                "f-name": name,
                                "f-mobileno": mno,
                                "f-email": email,
                                "f-username": username,
                                "f-password": pass
                            },
                            success: async function(response) {
                                // console.log(response);
                                await setUserInfo(response);
                                console.log(response[0]['status']);
                                if (response.status == false) {
                                    alertify.alert("VFA -AI Farming Technology", +response.data);
                                }
                            },
                            error: (response) => {
                                console.log(response);
                            }
                        })
                    },
                    function() {
                        alertify.error('Please Agree to our Terms & Policy to Signup');
                    });
            } else {
                alertify.alert("VFA -AI Farming Technology", "Error! Password and Confirm Password are not Same!");
            }
        }

        function setUserInfo(r) {
            console.log(r);
            sessionStorage.setItem("userLoggedin", r.data['status']);
            sessionStorage.setItem("farmerId", r.data[0]["id"]);
            sessionStorage.setItem("farmerName", r.data[0]["name"]);
            sessionStorage.setItem("farmerMno", r.data[0]["mobile"]);
            sessionStorage.setItem("farmerUsername", r.data[0]["username"]);
            sessionStorage.setItem("farmerEmail", r.data[0]["email"]);
            sessionStorage.setItem("farmerState", r.data[0]["state"]);
            sessionStorage.setItem("farmerDistrict", r.data[0]["district"]);
            sessionStorage.setItem("farmerTaluko", r.data[0]["taluka"]);
            sessionStorage.setItem("farmerVillage", r.data[0]["village"]);
            sessionStorage.setItem("farmerPincode", r.data[0]["pincode"]);
            if (r.status == true) {
                window.location.href = "../home";
            }
        }


        function passwordToggle(id ,ic_id) {
            var x = document.getElementById(id);
            var icon = document.getElementById(ic_id);
            if (x.type == "password") {
                x.type = "text";
                icon.innerText = "visibility_off";
            } else {
                x.type = "password";
                icon.innerText = "visibility";
            }
        }


        function StrengthChecker(pass) {
            let strongPassword = new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})')
            let mediumPassword = new RegExp('(?=.*[a-z])(?=.*[0-9])(?=.{6,})');
            $("#StrengthDisp").css("display", "block")
            if (strongPassword.test(pass)) {
                $("#StrengthDisp").css("backgroundColor", "#03fcb1")
                $("#StrengthDisp").text("Strong");
            } else if (mediumPassword.test(pass)) {
                // alert("Medium Password");
                $("#StrengthDisp").css("backgroundColor", "#fcdb03")
                $("#StrengthDisp").text('Medium');
            } else {
                $("#StrengthDisp").css("backgroundColor", "#f04d88")
                $("#StrengthDisp").text('weak')
            }
        }

        function mobileValidation() {
            mno = $("#fmobile").val();
            $.post({
                url: "getMobile.php?mno=" + mno,
                success: (response) => {
                    $("#mobileValid").html(response);
                    if ($("#mnoStatus").val() == "ok" && $("#emailStatus").val() == "ok" && $("#userStatus").val() == "ok") {
                        $("#regBtn").removeAttr("disabled");
                    } else {
                        $("#regBtn").attr("disabled", true);
                    }
                }
            })
        }

        function emailValidation() {
            email = $("#fmail").val();
            let emailParts = email.split("@");
            // console.log(emailParts[1]);
            if (emailParts[1] == "gmail.com" || emailParts[1] == "yahoo.com") {
                $.post({
                    url: "getEmail.php?mail=" + email,
                    success: (response) => {
                        $("#emailValid").html(response);
                        if ($("#mnoStatus").val() == "ok" && $("#emailStatus").val() == "ok" && $("#userStatus").val() == "ok") {
                            $("#regBtn").removeAttr("disabled");
                        } else {
                            $("#regBtn").attr("disabled", true);
                        }
                    }
                })

            } else {
                $("#emailValid").html(`<p style="color: red; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;"> <span class="material-icons-sharp"> check_circle_outline </span> Please Enter Valid Email </p>`);
                $("#regBtn").attr("disabled", true);
            }
        }

        function userValidation() {
            user = $("#fusername").val();
            if (user.includes("!") || user.includes("@") || user.includes("#") || user.includes("$") || user.includes("%") || user.includes("^") || user.includes("&") || user.includes("*") || user.includes("(") || user.includes(")") || user.includes("-") || user.includes("+") || user.includes("[") || user.includes("]") || user.includes("{") || user.includes("}") || user.includes(";") || user.includes(":") || user.includes("'") || user.includes("\"") || user.includes("\\") || user.includes("|") || user.includes("/") || user.includes(",") || user.includes(".") || user.includes("?") || user.includes("`") || user.includes("~")) {
                $("#userValid").html(`<p style="color: red; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;"> <span class="material-icons-sharp"> check_circle_outline </span> Usernames can contain only contains (a-z), (0-9) and (_); </p>`);
                $("#regBtn").attr("disabled", true);
            } else if (user == "") {
                $("#userValid").html(`<p style="color: red; display: flex;flex-direction: row;flex-wrap: nowrap;align-content: center;justify-content: flex-start;align-items: center;"> <span class="material-icons-sharp"> check_circle_outline </span> Usernames can not be Blank </p>`);
                $("#regBtn").attr("disabled", true);
            } else {
                $.post({
                    url: "getUser.php?user=" + user,
                    success: (response) => {
                        $("#userValid").html(response);
                        if ($("#mnoStatus").val() == "ok" && $("#emailStatus").val() == "ok" && $("#userStatus").val() == "ok") {
                            $("#regBtn").removeAttr("disabled");
                        } else {
                            $("#regBtn").attr("disabled", true);
                        }
                    }
                })
            }

        }
    </script>
</body>

</html>
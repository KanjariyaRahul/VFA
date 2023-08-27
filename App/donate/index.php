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
    <?php include('../include/base-css.php'); ?>
    <style>
        h1 {
            text-align: center;
        }

        h2 {
            margin: 0;
        }

        #multi-step-form-container {
            margin-top: 5rem;
        }

        .text-center {
            text-align: center;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .pl-0 {
            padding-left: 0;
        }

        .button {
            padding: 0.7rem 1.5rem;
            border: 1px solid #4361ee;
            background-color: #4361ee;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn {
            border: 1px solid #0e9594;
            background-color: #0e9594;
        }

        .mt-3 {
            margin-top: 2rem;
        }

        .d-none {
            display: none;
        }

        .form-step {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            padding: 3rem;
        }

        .font-normal {
            font-weight: normal;
        }

        ul.form-stepper {
            counter-reset: section;
            margin-bottom: 3rem;
        }

        ul.form-stepper .form-stepper-circle {
            position: relative;
        }

        ul.form-stepper .form-stepper-circle span {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateY(-50%) translateX(-50%);
        }

        .form-stepper-horizontal {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        ul.form-stepper>li:not(:last-of-type) {
            margin-bottom: 0.625rem;
            -webkit-transition: margin-bottom 0.4s;
            -o-transition: margin-bottom 0.4s;
            transition: margin-bottom 0.4s;
        }

        .form-stepper-horizontal>li:not(:last-of-type) {
            margin-bottom: 0 !important;
        }

        .form-stepper-horizontal li {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            -webkit-box-align: start;
            -ms-flex-align: start;
            align-items: start;
            -webkit-transition: 0.5s;
            transition: 0.5s;
        }

        .form-stepper-horizontal li:not(:last-child):after {
            position: relative;
            -webkit-box-flex: 1;
            -ms-flex: 1;
            flex: 1;
            height: 1px;
            content: "";
            top: 32%;
        }

        .form-stepper-horizontal li:after {
            background-color: #dee2e6;
        }

        .form-stepper-horizontal li.form-stepper-completed:after {
            background-color: #4da3ff;
        }

        .form-stepper-horizontal li:last-child {
            flex: unset;
        }

        ul.form-stepper li a .form-stepper-circle {
            display: inline-block;
            width: 40px;
            height: 40px;
            margin-right: 0;
            line-height: 1.7rem;
            text-align: center;
            background: rgba(0, 0, 0, 0.38);
            border-radius: 50%;
        }

        .form-stepper .form-stepper-active .form-stepper-circle {
            background-color: #4361ee !important;
            color: #fff;
        }

        .form-stepper .form-stepper-active .label {
            color: #4361ee !important;
        }

        .form-stepper .form-stepper-active .form-stepper-circle:hover {
            background-color: #4361ee !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-unfinished .form-stepper-circle {
            background-color: #f8f7ff;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle {
            background-color: #0e9594 !important;
            color: #fff;
        }

        .form-stepper .form-stepper-completed .label {
            color: #0e9594 !important;
        }

        .form-stepper .form-stepper-completed .form-stepper-circle:hover {
            background-color: #0e9594 !important;
            color: #fff !important;
        }

        .form-stepper .form-stepper-active span.text-muted {
            color: #fff !important;
        }

        .form-stepper .form-stepper-completed span.text-muted {
            color: #fff !important;
        }

        .form-stepper .label {
            font-size: 1rem;
            margin-top: 0.5rem;
        }

        .form-stepper a {
            cursor: default;
        }

        /* Input Element CSS */
        input,
        select {
            outline: none;
            border: none;
            color: var(--color-primary);
            border-bottom: 2px solid var(--color-primary);
            width: 100%;
            padding: 1rem;
            /* border-radius: var(--card-border-radius); */
        }

        input::placeholder {
            color: gray;
        }

        option {
            padding: 0.8rem;
            color: var(--color-primary);
        }


        /* Confirm Payment BTN */
        .bn632-hover {
            width: 160px;
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

        .bn632-hover.bn26 {
            background-image: linear-gradient(to right, #25aae1, #4481eb, #04befe, #3f86ed);
            box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
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
                <h1>Donate</h1>
            </div>
            <!-- Content Goes Here -->

            <div class="card" style="margin-top: 15px;">
                <div>
                    <h1>A Better Home for Indian Farmer</h1>
                    <div id="multi-step-form-container">
                        <!-- Form Steps / Progress Bar -->
                        <ul class="form-stepper form-stepper-horizontal text-center mx-auto pl-0">
                            <!-- Step 1 -->
                            <li class="form-stepper-active text-center form-stepper-list" step="1">
                                <a class="mx-2">
                                    <span class="form-stepper-circle">
                                        <span>1</span>
                                    </span>
                                    <div class="label">BASIC INFO</div>
                                </a>
                            </li>
                            <!-- Step 2 -->
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="2">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>2</span>
                                    </span>
                                    <div class="label text-muted">PAYMENT METHOD</div>
                                </a>
                            </li>
                            <!-- Step 3 -->
                            <li class="form-stepper-unfinished text-center form-stepper-list" step="3">
                                <a class="mx-2">
                                    <span class="form-stepper-circle text-muted">
                                        <span>3</span>
                                    </span>
                                    <div class="label text-muted">CONFIRM PAYMENT</div>
                                </a>
                            </li>
                        </ul>
                        <!-- Step Wise Form Content -->
                        <form id="userAccountSetupForm" name="userAccountSetupForm" enctype="multipart/form-data" method="POST" onsubmit="return false;">
                            <!-- Step 1 Content -->
                            <section id="step-1" class="form-step">
                                <h2 class="font-normal">Basic Information</h2>
                                <!-- Step 1 input fields -->
                                <div class="mt-3">
                                    <input id="b-name" type="text" placeholder="Enter your Name">
                                </div>
                                <div class="mt-3">
                                    <input id="b-mail" type="text" placeholder="Enter your Email">
                                </div>
                                <div class="mt-3">
                                    <input id="b-address" type="text" placeholder="Enter your Address">
                                </div>
                                <div class="mt-3">
                                    <script>
                                        $('#b-name').attr('id');
                                    </script>
                                    <button onclick="DonationBlankFieldChecker($('#b-name').attr('id'), $('#b-mail').attr('id'), $('#b-address').attr('id'))" class="button btn-navigate-form-step" type="button" step_number="2">Next</button>
                                </div>
                            </section>
                            <!-- Step 2 Content, default hidden on page load. -->
                            <section id="step-2" class="form-step d-none">
                                <!-- Step 2 input fields -->
                                <div class="mt-3">
                                    <input id="amount" type="text" placeholder="Enter Amout" onkeyup="$('#cAmount').text(this.value)">
                                </div>
                                <div class="mt-3">
                                    <input id="cardnumber" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Card Number" name="cardnumber">
                                </div>
                                <div class="mt-3">
                                    <input id="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Expiration (mm/yy)" name="expdate">
                                </div>
                                <div class="mt-3">
                                    <input id="securitycode" type="text" pattern="[0-9]*" inputmode="numeric" placeholder="Security Code">
                                </div>
                                <div class="mt-3">
                                    <button class="button btn-navigate-form-step" type="button" step_number="1">Prev</button>
                                    <button class="button btn-navigate-form-step" type="button" step_number="3">Next</button>
                                </div>
                            </section>
                            <!-- Step 3 Content, default hidden on page load. -->
                            <section id="step-3" class="form-step d-none">
                                <h2 class="font-normal"></h2>
                                <!-- Step 3 input fields -->
                                <div class="mt-3">
                                    <center>
                                        <h2>Please confirm your contribution of</h2>
                                    </center>
                                    <h1>&#8377; <span id="cAmount">100</span></h1>
                                    <center>
                                        <button onclick="makeDonation()" class="bn632-hover bn26">Confirm Payment</button>
                                    </center>
                                </div>
                                <div class="mt-3">
                                    <button class="button btn-navigate-form-step" type="button" step_number="2">Prev</button>
                                </div>
                            </section>
                            <span style="color: var(--color-warning);"><strong style="color: var(--color-danger);">Note: </strong>Currently we are not accepting any donation (Development Period)</span>
                        </form>
                    </div>
                </div>
            </div>

        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>

    <script>
        // Make Donation Script 
        function makeDonation() {
            let fid = sessionStorage.getItem("farmerId");
            let name = $("#b-name").val();
            let mail = $("#b-mail").val();
            let address = $("#b-address").val();
            let amount = $("#amount").val();
            let cardNumber = $("#cardnumber").val();
            let transactionId = name + mail + cardNumber + Math.random();
            let long = localStorage.getItem("longitude");
            let lat = localStorage.getItem("latitude");
            let location = localStorage.getItem("District");
            let Ip = localStorage.getItem("user_Ip");

            // Browser Detection
            var browserName = (function(agent) {
                switch (true) {
                    case agent.indexOf("edge") > -1:
                        return "MS Edge";
                    case agent.indexOf("edg/") > -1:
                        return "Edge ( chromium based)";
                    case agent.indexOf("opr") > -1 && !!window.opr:
                        return "Opera";
                    case agent.indexOf("chrome") > -1 && !!window.chrome:
                        return "Chrome";
                    case agent.indexOf("trident") > -1:
                        return "MS IE";
                    case agent.indexOf("firefox") > -1:
                        return "Mozilla Firefox";
                    case agent.indexOf("safari") > -1:
                        return "Safari";
                    default:
                        return "other";
                }
            })(window.navigator.userAgent.toLowerCase());

            $.post({
                url: "./makeDonation.php",
                data: {
                    "fid": fid,
                    "name": name,
                    "mail": mail,
                    "address": address,
                    "amount": amount,
                    "cardNumber": cardNumber,
                    "transactionId": transactionId,
                    "browser": browserName,
                    "location": location,
                    "long": long,
                    "lat": lat,
                    "ip": Ip
                },
                success: (response) => {
                    alertify.alert("Payment Recived", response);
                },
                error: (response) => {
                    console.log(response)
                }
            })
        }
    </script>

    <!-- Muti step form Script -->
    <script>
        const navigateToFormStep = (stepNumber) => {
            document.querySelectorAll(".form-step").forEach((formStepElement) => {
                formStepElement.classList.add("d-none");
            });
            document.querySelectorAll(".form-stepper-list").forEach((formStepHeader) => {
                formStepHeader.classList.add("form-stepper-unfinished");
                formStepHeader.classList.remove("form-stepper-active", "form-stepper-completed");
            });
            document.querySelector("#step-" + stepNumber).classList.remove("d-none");
            const formStepCircle = document.querySelector('li[step="' + stepNumber + '"]');
            formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-completed");
            formStepCircle.classList.add("form-stepper-active");
            for (let index = 0; index < stepNumber; index++) {
                const formStepCircle = document.querySelector('li[step="' + index + '"]');
                if (formStepCircle) {
                    formStepCircle.classList.remove("form-stepper-unfinished", "form-stepper-active");
                    formStepCircle.classList.add("form-stepper-completed");
                }
            }
        };
        document.querySelectorAll(".btn-navigate-form-step").forEach((formNavigationBtn) => {
            formNavigationBtn.addEventListener("click", () => {
                const stepNumber = parseInt(formNavigationBtn.getAttribute("step_number"));
                navigateToFormStep(stepNumber);
            });
        });
    </script>
</body>

</html>
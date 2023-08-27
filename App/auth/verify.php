<?php
require("../connection/conn.php");
$hash = $_GET['hash'];
$user = $_GET['user']; 

$sql = "UPDATE `farmer` SET `email-status` = 'verified' WHERE `username` = '$user' AND `mail_hash` = '$hash'";
if (mysqli_query($con, $sql)) {
    $rowcount = mysqli_affected_rows($con);
    if ($rowcount == 1) { 
?>
        <!DOCTYPE html>
        <html>

        <head>
            <title></title>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <style type="text/css">
                @media screen {
                    @font-face {
                        font-family: 'Montserrat';
                        font-style: normal;
                        font-weight: 400;
                        src: local('Montserrat'), local('Montserrat'), url(https://fonts.google.com/share?selection.family=Montserrat:ital,wght@1,200);
                    }

                    @font-face {
                        font-family: 'Montserrat';
                        font-style: normal;
                        font-weight: 700;
                        src: local('Montserrat Bold'), local('Montserrat-Bold'), url(https://fonts.google.com/share?selection.family=Montserrat%20Subrayada:wght@700%7CMontserrat:ital,wght@1,200);
                    }

                    /* fallback */
                    @font-face {
                        font-family: 'Material Icons Sharp';
                        font-style: normal;
                        font-weight: 400;
                        src: url('../css/fonts/fonts.woff2') format('woff2');
                    }

                    .material-icons-sharp {
                        font-family: 'Material Icons Sharp';
                        font-weight: normal;
                        font-style: normal;
                        font-size: 24px;
                        line-height: 1;
                        letter-spacing: normal;
                        text-transform: none;
                        display: inline-block;
                        white-space: nowrap;
                        word-wrap: normal;
                        direction: ltr;
                        -webkit-font-feature-settings: 'liga';
                        font-feature-settings: 'liga';
                        -webkit-font-smoothing: antialiased;
                    }


                    /* CLIENT-SPECIFIC STYLES */
                    body,
                    table,
                    td,
                    a {
                        -webkit-text-size-adjust: 100%;
                        -ms-text-size-adjust: 100%;
                    }

                    table,
                    td {
                        mso-table-lspace: 0pt;
                        mso-table-rspace: 0pt;
                    }

                    img {
                        -ms-interpolation-mode: bicubic;
                    }

                    /* RESET STYLES */
                    img {
                        border: 0;
                        height: auto;
                        line-height: 100%;
                        outline: none;
                        text-decoration: none;
                    }

                    table {
                        border-collapse: collapse !important;
                    }

                    body {
                        height: 100% !important;
                        margin: 0 !important;
                        padding: 0 !important;
                        width: 100% !important;
                    }

                    /* iOS BLUE LINKS */
                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: none !important;
                        font-size: inherit !important;
                        font-family: inherit !important;
                        font-weight: inherit !important;
                        line-height: inherit !important;
                    }

                    /* MOBILE STYLES */
                    @media screen and (max-width:600px) {
                        h1 {
                            font-size: 32px !important;
                            line-height: 32px !important;
                        }
                    }

                    /* ANDROID CENTER FIX */
                    div[style*="margin: 16px 0;"] {
                        margin: 0 !important;
                    }
                }
            </style>
            <style>
                .success-checkmark {
                    width: 80px;
                    height: 115px;
                    margin: 0 auto;
                }

                .success-checkmark .check-icon {
                    width: 80px;
                    height: 80px;
                    position: relative;
                    border-radius: 50%;
                    box-sizing: content-box;
                    border: 4px solid #4CAF50;
                }

                .success-checkmark .check-icon::before {
                    top: 3px;
                    left: -2px;
                    width: 30px;
                    transform-origin: 100% 50%;
                    border-radius: 100px 0 0 100px;
                }

                .success-checkmark .check-icon::after {
                    top: 0;
                    left: 30px;
                    width: 60px;
                    transform-origin: 0 50%;
                    border-radius: 0 100px 100px 0;
                    animation: rotate-circle 4.25s ease-in;
                }

                .success-checkmark .check-icon::before,
                .success-checkmark .check-icon::after {
                    content: "";
                    height: 100px;
                    position: absolute;
                    background: #FFFFFF;
                    transform: rotate(-45deg);
                }

                .success-checkmark .check-icon .icon-line {
                    height: 5px;
                    background-color: #4CAF50;
                    display: block;
                    border-radius: 2px;
                    position: absolute;
                    z-index: 10;
                }

                .success-checkmark .check-icon .icon-line.line-tip {
                    top: 46px;
                    left: 14px;
                    width: 25px;
                    transform: rotate(45deg);
                    animation: icon-line-tip 0.75s;
                }

                .success-checkmark .check-icon .icon-line.line-long {
                    top: 38px;
                    right: 8px;
                    width: 47px;
                    transform: rotate(-45deg);
                    animation: icon-line-long 0.75s;
                }

                .success-checkmark .check-icon .icon-circle {
                    top: -4px;
                    left: -4px;
                    z-index: 10;
                    width: 80px;
                    height: 80px;
                    border-radius: 50%;
                    position: absolute;
                    box-sizing: content-box;
                    border: 4px solid rgba(76, 175, 80, 0.5);
                }

                .success-checkmark .check-icon .icon-fix {
                    top: 8px;
                    width: 5px;
                    left: 26px;
                    z-index: 1;
                    height: 85px;
                    position: absolute;
                    transform: rotate(-45deg);
                    background-color: #FFFFFF;
                }

                @keyframes rotate-circle {
                    0% {
                        transform: rotate(-45deg);
                    }

                    5% {
                        transform: rotate(-45deg);
                    }

                    12% {
                        transform: rotate(-405deg);
                    }

                    100% {
                        transform: rotate(-405deg);
                    }
                }

                @keyframes icon-line-tip {
                    0% {
                        width: 0;
                        left: 1px;
                        top: 19px;
                    }

                    54% {
                        width: 0;
                        left: 1px;
                        top: 19px;
                    }

                    70% {
                        width: 50px;
                        left: -8px;
                        top: 37px;
                    }

                    84% {
                        width: 17px;
                        left: 21px;
                        top: 48px;
                    }

                    100% {
                        width: 25px;
                        left: 14px;
                        top: 45px;
                    }
                }

                @keyframes icon-line-long {
                    0% {
                        width: 0;
                        right: 46px;
                        top: 54px;
                    }

                    65% {
                        width: 0;
                        right: 46px;
                        top: 54px;
                    }

                    84% {
                        width: 55px;
                        right: 0px;
                        top: 35px;
                    }

                    100% {
                        width: 47px;
                        right: 8px;
                        top: 38px;
                    }
                }
            </style>
        </head>

        <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
            </head> <!-- HIDDEN PREHEADER TEXT -->
            <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Montserrat'Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> VFA -AI Farming Technology!</div>
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <!-- LOGO -->
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 2px 2px 0px 0px; color: #AADB1E; font-family: 'Londrina Solid'Helvetica, Arial, sans-serif; font-size: 45px; font-weight: 700; letter-spacing: 2px; line-height: 48px;">
                                    <h1 style="font-size: 40px; font-weight:700; margin: w-50; color: orange;">VFA</h1>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 40px 30px; color: #000000; font-family:'Montserrat bold' Helvetica, Arial, sans-serif; font-size: 16px; font-weight:600; line-height: 25px;">
                                    <div class="success-checkmark">
                                        <div class="check-icon">
                                            <span class="icon-line line-tip"></span>
                                            <span class="icon-line line-long"></span>
                                            <div class="icon-circle"></div>
                                            <div class="icon-fix"></div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 40px 30px; color: #000000; font-family:'Montserrat bold' Helvetica, Arial, sans-serif; font-size: 16px; font-weight:600; line-height: 25px;">
                                    <h3>Your Email has Been successfully verified</h3>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="left">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 60px 30px;">
                                                <table border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td align="center" style="border-radius: 30px;" bgcolor="#000000"><a href="../home/" target="_blank" style="font-size: 20px; font-family: 'Montserrat Bold'Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 10px 55px; border-radius: 2px; display: flex; justify-content: center; align-items: center;">
                                                                <span class="material-icons-sharp" style="font-size: 1.5rem; color: lightgreen;">
                                                                    verified
                                                                </span>&nbsp;&nbsp;Login</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td bgcolor="#ffffff" align="center" style="padding: 0px 30px 40px 30px; border-radius: 0px 0px 4px 4px; color: #000000; font-family:'Montserrat'Helvetica, Arial, sans-serif; font-size: 14px; font-weight: 400; line-height: 25px;">
                                    <p style="margin: 0;">If you are facing any problems please feel FREE to Contact us at <br> <a href="mailto: vfa2023@outlook.com" target="_blank" style="color: #29ABE2;">vfa2023@outlook.com</a></p>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </body>

        </html>
<?php
    }else{
        echo "your email was not verified : <br> Reason : User or HASH not Found <br>";
        echo "Plase try again";
    }
} else {
    echo mysqli_error($con);
}
?>
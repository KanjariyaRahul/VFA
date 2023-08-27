<?php
include("./App/connection/conn.php");
$name = $_GET['username'];
$rate = $_GET['rate'];
$vname = $_GET['name'];
$bug = $_GET['bug'];
$sug = $_GET['suggest'];
$othername = $_GET['othername'];
try {
    $stmt = $con->prepare("INSERT INTO `feed-back`(`name`, `rate`, `bug`, `suggest`,`sname`, `other_name`) VALUES(?,?,?,?,?,?)");
    // Execute query
    $stmt->bind_param("sissss", $name, $rate, $bug, $sug, $vname, $othername);
    if ($stmt->execute()) {
?>
        <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title></title>
            <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
            <style>
                @import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
                @import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
            </style>
            <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
            <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
            <script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
            <style>
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
                    moz-transition: all .4s ease-in-out;
                    -o-transition: all .4s ease-in-out;
                    -webkit-transition: all .4s ease-in-out;
                    transition: all .4s ease-in-out;
                }

                .bn632-hover:hover {
                    background-position: 100% 0;
                    moz-transition: all .4s ease-in-out;
                    -o-transition: all .4s ease-in-out;
                    -webkit-transition: all .4s ease-in-out;
                    transition: all .4s ease-in-out;
                }

                .bn632-hover:focus {
                    outline: none;
                }

                .bn632-hover.bn18 {
                    background-image: linear-gradient(to right,
                            #25aae1,
                            #40e495,
                            #30dd8a,
                            #2bb673);
                    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
                }
            </style>
        </head>

        <body>
            <header class="site-header" id="header">
                <h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU! <strong><?= $name ?></strong></h1>
            </header>

            <div class="main-content">
                <i class="fa fa-check main-content__checkmark" id="checkmark"></i>
                <p class="main-content__body" data-lead-id="main-content-body">Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.</p>
            </div>

            <center>
                <a href="./index.php"><button class="bn632-hover bn18">Go to Home Page</button></a>
            </center>

            <footer class="site-footer" id="footer">
                <p class="site-footer__fineprint" id="fineprint">Copyright ©2023 | All Rights Reserved -VFA</p>
            </footer>
        </body>

        </html>
<?php
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
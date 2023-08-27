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
    <link rel="stylesheet" href="../css/faq.css">
    <?php include('../include/base-css.php'); ?>
    
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
                <h1>FAQs</h1>
            </div>

            <div class="faq" style="margin: 15px;">

                <button class="accordion">Does VFA provide services for all crops?</button>
                <div class="panel">
                    <p>Yes, we provide personalized services for all crops.</p>
                </div>

                <button class="accordion">Where is VFA Can we meet them?</button>
                <div class="panel">
                    <p>You can contact our representative by call. Contact number: 9265614292. </p>
                </div>

                <button class="accordion">How much more can my yield increase by using VFA?</button>
                <div class="panel">
                    <p>Our farmers see an increase of at least 20% in their yield.</p>
                </div>

                <button class="accordion">Does VFA guarantees production?</button>
                <div class="panel">
                    <p>Yes, we guarantee. * Refer to the Terms and Conditions page.</p>
                </div>

                <button class="accordion">How much does VFA charge for your services?</button>
                <div class="panel">
                    <p>We provide personalized services, our service fee fits our client's requirements.</p>
                </div>

                <button class="accordion">Does VFA provide a water management solution?</button>
                <div class="panel">
                    <p>Yes, we provide solutions regarding crop water requirements.</p>
                </div>

                <button class="accordion">Does VFA provide weather updates?</button>
                <div class="panel">
                    <p>Yes, we provide weather-based dynamic crop care solutions.</p>
                </div>

                <button class="accordion">Does VFA provide agricultural literature?</button>
                <div class="panel">
                    <p>We offer you practical solutions for the best farming practices. We provide you with the best-written material available on the market.</p>
                </div>

            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>
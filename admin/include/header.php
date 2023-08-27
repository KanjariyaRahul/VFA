    <?php
    include("./connection/connection.php");
    if (!isset($_SESSION['adminLogin'])) {
        header("Location: login.php"); 
    }
    ?>
    <meta name="description" content="VFA is a farming technology platform where we work with farmers directly. We at VFA follow our mission of bridging the gap between technology and agriculture in India with a vision to reach out to maximum Indian farmers.">
    <link rel="shortcut icon" href="https://i.postimg.cc/Y0TNZw1n/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Features-Large-Icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="">
    <script src="./assets/js/jquery.min.js"></script>

    <!-- FontAwsome Kit -->
    <script src="./assets/js/c16623e174.js" crossorigin="anonymous"></script>

    <!-- Alertify JS -->
    <script src="./assets/js/alertify.min.js"></script>
    <!-- Alertify CSS  -->
    <link rel="stylesheet" href="./assets/css/alertify.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
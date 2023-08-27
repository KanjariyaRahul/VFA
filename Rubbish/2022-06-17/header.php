<meta name="description"
        content="VFA is a farming technology platform where we work with farmers directly. We at VFA follow our mission of bridging the gap between technology and agriculture in India with a vision to reach out to maximum Indian farmers.">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/Features-Large-Icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script>
        // If Admin Already Logged in : Redirec to Dashboard Home Page 
        let l = sessionStorage.getItem("AdminLoggedin");
        if (l != "true") {
            window.location.href = "login.php";
        }
    </script>
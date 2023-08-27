<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Data - VFA</title>
    <?php
    include("./include/header.php");
    ?>
    <style>
        .parent {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: repeat(4, 1fr);
            grid-column-gap: 10px;
            grid-row-gap: 10px;
        }

        .parent>a {
            cursor: pointer;
            padding: 0.5rem;
        }

        .parent>a:hover {
            box-shadow: none !important;
        }

        a>h3{
            font-size: x-large;
            text-align: center;
        }

        .parent-item {
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .parent-item>img {
            width: 30%;
            height: auto;
            overflow: hidden;
        }

        @media only screen and (max-width: 600px) {
            .parent {
                grid-template-columns: repeat(1, 1fr);
                grid-template-rows: repeat(1, 1fr);
            }
        }
    </style> 
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Top nav menu -->
        <?php
        include("./include/navbar.php");
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- Top nav menu -->
                <?php
                include("./include/topnav.php");
                if (isset($_GET['msg'])) {
                ?>
                    <script>
                        alertify.warning("<?= $_GET['msg'] ?>");
                    </script>
                <?php
                }
                ?>
                <div class="container-fluid">

                    <div class="parent">
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-crop.php">
                            <img src="./assets/icons/plant-pot.png" alt="add new crop image">
                            <h3>Manage Crops</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-crop-info.php">
                            <img src="./assets/icons/info.png" alt="Add Crop info Image">
                            <h3>Manage Crop Info</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-seed-info.php">
                            <img src="./assets/icons/seeds.png" alt="Add seed info Image">
                            <h3>Manage Seed Info</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-events.php">
                            <img src="./assets/icons/calendar.png" alt="Add new Event Image">
                            <h3>Manage Events</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-disease.php">
                            <img src="./assets/icons/skin-disease.png" alt="Add disease info image">
                            <h3>Manage Disease Info</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="./manage-pesticide.php">
                            <img src="./assets/icons/pest.png" alt="Add disease info image">
                            <h3>Manage Pesticides</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-faq.php">
                            <img src="./assets/icons/faq.png" alt="Add new FAQs image">
                            <h3>Manage FAQs</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-updates.php">
                            <img src="./assets/icons/megaphone.png" alt="Push Recent Updates to User Image  ">
                            <h3>Recent Updates </h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-news.php">
                            <img src="./assets/icons/newspaper.png" alt="Manage Krishi Samachar">
                            <h3>Manage News </h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="view-donation.php">
                            <img src="./assets/icons/love.png" alt="Manage Donations">
                            <h3>View Donations</h3>
                        </a>
                        <a class="parent-item card shadow text-decoration-none text-success" href="manage-blogs.php">
                            <img src="./assets/icons/blog.png" alt="Manage blogs">
                            <h3>Manage Blogs</h3>
                        </a>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer mt-3">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VFA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php include("./include/scripts.php"); ?>
</body>

</html>
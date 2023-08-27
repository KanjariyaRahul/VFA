<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - VFA</title>
    <?php
    include("./include/header.php");
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <style>
        .m14 {
            position: relative;
            font-weight: 900;
            font-size: 3.5rem;
        }

        .m14 .text-wrapper {
            position: relative;
            display: inline-block;
            padding-top: 0.2em;
            padding-right: 0.05em;
            padding-bottom: 0.1em;
            overflow: hidden;
        }

        .m14 .letter {
            transform-origin: 0 100%;
            display: inline-block;
            line-height: 1em;
        }

        @media only screen and (max-width: 500px) {
            .row {
                flex-direction: column;
            }
        }
    </style>
    <!-- Google Time Line Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body id="page-top" class="sidebar-toggled">
    <div id="wrapper">
        <!-- sidemenu -->
        <?php
        include("./include/navbar.php");
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <!-- Top nav menu -->
                <?php
                include("./include/topnav.php");
                ?>
                <div class="container-fluid">
                    <section class="py-4 py-xl-4">
                        <div class="text-center mt-1 p-4 p-lg-4">
                            <p class="fw-bold text-primary mb-2">Proud to introduce</p>
                            <h1 class="m14 fw-bold mb-1">
                                <span class="text-wrapper">
                                    <span class="letters text-success">Virtual Farming Assistant</span>
                                </span>
                            </h1>
                            <h2 class="h2 fw-bold text-primary">AI -Farming Technology</h2>
                        </div>
                    </section>
                    <hr>
                    <div class="row">
                        <div class="card shadow m-1 border-start-warning py-2 col">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-warning fw-bold text-xs mb-1"><span>Pending Messages&nbsp;</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span id="dmCount"></span></div>
                                        <script>
                                            $("#dmCount").text($("#mCount").text());
                                        </script>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-comments fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow m-1 border-start-primary py-2 col">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Farmers Registered Today</span></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            $date = date('Y-m-d');
                                            // echo $date;
                                            $sql = "SELECT COUNT(id) AS newFarmer FROM `farmer` WHERE timestamp LIKE '%$date%';";
                                            // $sql = "SELECT  FROM `farmer` WHERE `date` = '$date'";
                                            $result = mysqli_query($conn, $sql);
                                            $newFarmer = mysqli_fetch_assoc($result);
                                            // print date('Y-m-d');
                                            ?>
                                            <span><?= $newFarmer['newFarmer'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow m-1 border-start-primary py-2 col">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-secondary fw-bold text-xs mb-1"><span>Verified Farmers</span></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            $sql = "SELECT COUNT(id) AS newFarmer FROM `farmer` WHERE `email-status` = 'verified'";
                                            $result = mysqli_query($conn, $sql);
                                            $newFarmer = mysqli_fetch_assoc($result);
                                            ?>
                                            <span><?= $newFarmer['newFarmer'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-user-check fa-2x text-gray-300"></i></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="card shadow m-1 border-start-warning py-2 col">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Donation</span></div>
                                        <div class="text-dark fw-bold h5 mb-0"><span id="dmCount"></span></div>
                                        &#x20B9; <?php
                                                    $sql = "SELECT amount FROM donation";
                                                    $result = mysqli_query($conn, $sql);
                                                    $total = 0;
                                                    while ($row = mysqli_fetch_assoc($result)) {
                                                        $total = $total + $row['amount'];
                                                    }
                                                    echo $total;
                                                    ?>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-heart fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow m-1 border-start-primary py-2 col">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-secondary fw-bold text-xs mb-1"><span>Total Crops</span></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            $sql = "SELECT COUNT(id) AS crop FROM `crop`";
                                            $result = mysqli_query($conn, $sql);
                                            $newFarmer = mysqli_fetch_assoc($result);
                                            ?>
                                            <span><?= $newFarmer['crop'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fab fa-canadian-maple-leaf fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="card shadow m-1 border-start-primary py-2 col">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col me-2">
                                        <div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total VFA Users</span></div>
                                        <div class="text-dark fw-bold h5 mb-0">
                                            <?php
                                            $sql = "SELECT COUNT(id) AS user FROM `farmer`";
                                            $result = mysqli_query($conn, $sql);
                                            $newFarmer = mysqli_fetch_assoc($result);
                                            ?>
                                            <span><?= $newFarmer['user'] ?></span>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-globe-asia fa-2x text-gray-300"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <!-- Time Line Chart -->
                    <div class="card">
                        <div class="card-header">
                            <h2>Time Line Chart</h2>
                        </div>
                        <div id="timeline" class="card-body"></div>
                    </div>
                    <hr>
                    <!-- Gantt chart -->
                    <div class="card">
                        <div class="card-header">
                            <h2>Gantt Chart</h2>
                        </div>
                        <div id="gantt_chart" class="card-body h-100"></div>
                    </div>

                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VFA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php include("./include/scripts.php"); ?>
    <script>
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.m14 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.m14 .letter',
                translateY: ["1.1em", 0],
                translateX: ["0.55em", 0],
                translateZ: 0,
                rotateZ: [180, 0],
                duration: 750,
                easing: "easeOutExpo",
                delay: (el, i) => 50 * i
            }).add({
                targets: '.m14',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
            
        // Time Line Chart 
        google.charts.load("current", {
            packages: ["timeline"]
        });
        google.charts.setOnLoadCallback(drawTimelineChart);

        function drawTimelineChart() {
            var container = document.getElementById('timeline');
            var chart = new google.visualization.Timeline(container);
            var dataTable = new google.visualization.DataTable();

            dataTable.addColumn({
                type: 'string',
                id: 'Term'
            });
            dataTable.addColumn({
                type: 'string',
                id: 'Name'
            });
            dataTable.addColumn({
                type: 'date',
                id: 'Start'
            });
            dataTable.addColumn({
                type: 'date',
                id: 'End'
            });

            dataTable.addRows([
                ['1', 'Project Planning', new Date(2022, 4, 25), new Date(2022, 4, 30)],
                ['2', 'UI Designing & Database Designing', new Date(2022, 4, 31), new Date(2022, 5, 10)],
                ['3', 'Backend Coding', new Date(2022, 5, 10), new Date(2022, 5, 30)],
                ['4', 'Collecting Data', new Date(2022, 5, 30), new Date(2022, 6, 10)],
                ['5', 'Hosting', new Date(2022, 6, 10), new Date(2022, 6, 15)]
                // ['3', 'Maintanance', new Date(2022, 7, 15), new Date()]
            ]);

            chart.draw(dataTable);
        }

        // Gantt Chart 
        google.charts.load("current", {
            packages: ["gantt"]
        });
        google.charts.setOnLoadCallback(drawGanttChart);

        function toMilliseconds(minutes) {
            return minutes * 60 * 1000;
        }

        function drawGanttChart() {
            var otherData = new google.visualization.DataTable();
            otherData.addColumn("string", "Task ID");
            otherData.addColumn("string", "Task Name");
            otherData.addColumn("string", "Resource");
            otherData.addColumn("date", "Start");
            otherData.addColumn("date", "End");
            otherData.addColumn("number", "Duration");
            otherData.addColumn("number", "Percent Complete");
            otherData.addColumn("string", "Dependencies");

            otherData.addRows([
                [
                    "planning",
                    "Planning a Project",
                    null,
                    new Date(2022, 3, 25),
                    new Date(2022, 3, 31),
                    toMilliseconds(5),
                    100,
                    null,
                ],
                [
                    "user-ui",
                    "Designing Farmers User Interface",
                    null,
                    new Date(2022, 4, 1),
                    new Date(2022, 4, 31),
                    toMilliseconds(5),
                    94,
                    "planning",
                ],
                [
                    "admin-ui",
                    "Designing Admin User Interface",
                    null,
                    new Date(2022, 4, 1),
                    new Date(2022, 5, 15),
                    toMilliseconds(5),
                    99,
                    "planning",
                ],
                [
                    "database-dg",
                    "Designing MySql Database",
                    null,
                    new Date(2022, 5, 6),
                    new Date(2022, 6, 13),
                    toMilliseconds(5),
                    99,
                    "planning",
                ],
                [
                    "user-bg",
                    "Faremrs site Backend Code",
                    "user-ui",
                    new Date(2022, 5, 2),
                    new Date(2022, 5, 14),
                    toMilliseconds(5),
                    92,
                    null,
                ],
                [
                    "admin-bg",
                    "Admin site Backend Code",
                    "admin-ui",
                    new Date(2022, 5, 20),
                    new Date(2022, 6, 15),
                    toMilliseconds(5),
                    95,
                    null,
                ],
                [
                    "APIs",
                    "Using Weather API",
                    null,
                    new Date(2022, 5, 15),
                    new Date(2022, 5, 25),
                    toMilliseconds(5),
                    99,
                    null,
                ],
                [
                    "crop",
                    "logic for crop tracking,progress and events",
                    "user-bg",
                    new Date(2022, 5, 26),
                    new Date(2022, 6, 5),
                    toMilliseconds(5),
                    90,
                    "user-bg",
                ],
                [
                    "data",
                    "Collecting Data",
                    "crop",
                    new Date(2022, 6, 1),
                    new Date(2022, 6, 25),
                    toMilliseconds(5),
                    40,
                    "database-dg",
                ],
                [
                    "host",
                    "Hosting to server",
                    null,
                    new Date(2022, 6, 10),
                    new Date(2022, 6, 14),
                    toMilliseconds(5),
                    95,
                    null,
                ],
            ]);

            var options = {
                height: 480,
                gantt: {
                    defaultStartDate: new Date(2022, 4, 25),
                },
            };

            var chart = new google.visualization.Gantt(
                document.getElementById("gantt_chart")
            );

            chart.draw(otherData, options);
        }
    </script>
</body>

</html>
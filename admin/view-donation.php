<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>View Donation - VFA</title>
    <?php
    include("./include/header.php");
    ?>
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
                <!-- Update Notification Modal Ends Here -->
                <!-- Main start from Here -->
                <div class="container-fluid overflow-scroll">
                    <table id="myTable" class="table table-bordered table-hover table-striped table-light text-center">
                        <thead>
                            <td>Id</td>
                            <td>Farmer's Name</td>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Address</td>
                            <td>Transaction-id</td>
                            <td>card-number</td>
                            <td>Amount</td>
                            <td>Ip</td>
                            <td>Location</td>
                            <td>Browser</td>
                            <td>Latitide</td>
                            <td>Longitude</td>
                            <td>Action</td>
                        </thead>
                        <tbody>
                            <?php 
                                $sql = "SELECT * FROM `donation`";
                                if($result = mysqli_query($conn, $sql)){
                                    while($row = mysqli_fetch_assoc($result)){
                                        $fid = $row['farmer-id'];
                                        $fname = "SELECT `name` FROM `farmer` WHERE id = $fid";
                                        $name = mysqli_fetch_assoc(mysqli_query($conn, $fname));
                                        echo "<tr>
                                        <td> <a class='btn btn-danger' href='./script/deleteDonation.php?id=". $row['id'] ."'>Delete</a> </td>
                                            <td>". $row['id'] ."</td>
                                            <td>". $name['name'] ."</td>
                                            <td>". $row['name'] ."</td>
                                            <td>". $row['email'] ."</td>
                                            <td>". $row['address'] ."</td>
                                            <td>". $row['transaction-id'] ."</td>
                                            <td>". $row['card-number'] ."</td>
                                            <td>". $row['amount'] ."</td>
                                            <td>". $row['ip'] ."</td>
                                            <td>". $row['location'] ."</td>
                                            <td>". $row['browser'] ."</td>
                                            <td>". $row['lattitude'] ."</td>
                                            <td>". $row['longitude'] ."</td>
                                            <td><a href='#' class=\"btn btn-outline-primary\">Download Receipt</a></td>                                        
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </tbody>

                    </table>
                </div>
                <!-- Main Ends Here -->
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VFA 2022</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <?php include("./include/scripts.php"); ?>
</body>

</html>
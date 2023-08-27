<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Feed Back - VFA</title>
    <?php
    include("./include/header.php");
    ?>
    <style type="text/css">
        .paging-nav {
            text-align: right;
            padding-top: 2px;
        }

        .paging-nav a {
            margin: auto 1px;
            text-decoration: none;
            display: inline-block;
            padding: 1px 7px;
            background: #91b9e6;
            color: white;
            border-radius: 3px;
        }

        .paging-nav .selected-page {
            background: #187ed5;
            font-weight: bold;
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
                <!-- Update Notification Modal Ends Here -->

                <div class="container-fluid">
                    <div class="card shadow h-100">
                        <div class="card-header py-3">
                            <div class="row">
                                <h4 class="col-md text-primary m-0 fw-bold">Feedback</h4>
                                <div class="col-md">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                        <label class="form-label">
                                            <input type="search" class="form-control table-filter" data-table="contact-filter" placeholder="Search" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0 contact-filter" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Rate</th>
                                            <th>System name</th>
                                            <th>Other name</th>
                                            <th>Bug</th>
                                            <th>Suggestion</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Getting Farmers Data from Database -->
                                        <?php
                                        $sql = "SELECT * FROM `feed-back`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['rate'] ?></td>
                                                <td><?= $row['sname'] ?></td>
                                                <td><?= $row['other_name'] ?></td>
                                                <td><?= $row['bug'] ?></td>
                                                <td><?= $row['suggest'] ?></td>
                                                <?php
                                                if ($row['status'] == "pending") {
                                                ?>
                                                    <td><span class="badge rounded-pill bg-warning"><?= $row['status'] ?></span></td>
                                                <?php
                                                }
                                                if ($row['status'] == "active") {
                                                ?>
                                                    <td><span class="badge rounded-pill bg-primary"><?= $row['status'] ?></span></td>
                                                <?php
                                                }
                                                if ($row['status'] == "resolved") {
                                                ?>
                                                    <td><span class="badge rounded-pill bg-success"><?= $row['status'] ?></span></td>
                                                <?php
                                                }
                                                if ($row['status'] == "unsolved") {
                                                ?>
                                                    <td><span class="badge rounded-pill bg-danger"><?= $row['status'] ?></span></td>
                                                <?php
                                                }
                                                ?>
                                                <!-- <td><span class="badge bg-label-primary me-1">Active</span></td> -->
                                                <td style="text-align: center;">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="./script/update-feedback.php?s=pending&id=<?= $row['id'] ?>">
                                                                <i class="bx bx-edit-alt me-1"></i>
                                                                Set as Pending
                                                            </a>
                                                            <a class="dropdown-item" href="./script/update-feedback.php?s=active&id=<?= $row['id'] ?>">
                                                                <i class="bx bx-edit-alt me-1"></i>
                                                                Set as Active
                                                            </a>
                                                            <a class="dropdown-item" href="./script/update-feedback.php?s=resolved&id=<?= $row['id'] ?>">
                                                                <i class="bx bx-edit-alt me-1"></i>
                                                                Set as Resolved
                                                            </a>
                                                            <a class="dropdown-item" href="./script/update-feedback.php?s=unsolved&id=<?= $row['id'] ?>">
                                                                <i class="bx bx-edit-alt me-1"></i>
                                                                Set as Unsolved
                                                            </a>
                                                            <a class="dropdown-item" href="./script/update-feedback.php?d=true&id=<?= $row['id'] ?>">
                                                                <i class="bx bx-trash me-1"></i>
                                                                Delete
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
</body>

</html>
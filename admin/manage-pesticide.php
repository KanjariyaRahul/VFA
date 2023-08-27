<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Pesticide Information- VFA</title>
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
                <!-- Update Form Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="./script/update-pest.php" method="get">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="pid" name="pid" value="null">
                                    <div class="mb-3">
                                        <label for="pName" class="form-label">Pesticide Name: </label>
                                        <input type="text" class="form-control" id="pName" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pDesc" class="form-label">Description: </label>
                                        <textarea class="form-control" id="pDesc" name="desc"> </textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="pQ" class="form-label">Quantity: </label>
                                        <input type="text" class="form-control" id="pQ" name="q">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Update Form Modal Ends Here -->
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-header">
                            <div class="row">
                                <h4 class="col-md text-primary m-0 fw-bold">Pesticide Info</h4>
                                <div class="col-md">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                                        <label class="form-label">
                                            <input type="search" class="form-control table-filter" data-table="farmer-filter" placeholder="Search" />
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive table">
                                <table class="table my-0 farmer-filter" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Crop Name</th>
                                            <th>Disease Name</th>
                                            <th>Pest Name</th>
                                            <th>Info</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tdata">
                                        <!-- Getting Farmers Data from Database -->
                                        <?php
                                        $sql = "SELECT * FROM `preventive-measure`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                                <tr>
                                                    <?php
                                                    $did = $row['disease-id'];
                                                    $diseaseName = "SELECT * FROM `crop-disease` WHERE id='$did'";
                                                    $dresult = mysqli_query($conn, $diseaseName);
                                                    $drow = mysqli_fetch_assoc($dresult);
                                                    $dName = $drow['title'];
                                                    // Getting Crop Name from Disease ID
                                                    $cid = $drow['crop-id'];
                                                    $cropName = "SELECT * FROM `crop` WHERE id='$cid'";
                                                    $cresult = mysqli_query($conn, $cropName);
                                                    $crow = mysqli_fetch_assoc($cresult);
                                                    $cName = $crow['name'];
                                                    ?>
                                                    <td><?= $row['id'] ?></td>
                                                    <td><?= $cName ?></td>
                                                    <td><?= $dName ?></td>
                                                    <td><?= $row['pest-name'] ?></td>
                                                    <td><?= $row['description'] ?></td>
                                                    <td><?= $row['quantity'] ?></td>

                                                    <td style="text-align: center;">
                                                        <div class="dropdown">
                                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                                            </button>
                                                            <div class="dropdown-menu">
                                                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item edit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                                                                <a class="dropdown-item" href="./script/delete-pest.php?id=<?= $row['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php }
                                        }else{
                                            echo "<h2>No Information</h2>";
                                        }
                                        ?>
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
    <script>
        // console.clear();
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                tr = e.target.parentNode.parentNode.parentNode.parentNode;
                // console.log(tr)
                // tr.getElementsByTagName("td")[0].innerText;
                id = tr.getElementsByTagName("td")[0].innerText;
                pName = tr.getElementsByTagName("td")[3].innerText;
                desc = tr.getElementsByTagName("td")[4].innerText;
                q = tr.getElementsByTagName("td")[5].innerText;
                // console.log(id);
                // console.log(pName);
                // console.log(desc);
                // console.log(q);
                $("#pid").val(id);
                $("#pName").val(pName);
                $("#pDesc").val(desc);
                $("#pQ").val(q);
            })
        })
    </script>
</body>

</html>
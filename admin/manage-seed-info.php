<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage seed Info - VFA</title>
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
                            <form action="./script/update-seed.php" method="get">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="sid" name="id" value="null">
                                    <div class="mb-3">
                                        <label for="cid" class="form-label">Select Crop: </label>
                                        <select class="form-select" aria-label="Default select example" name="cid" id="cid">
                                            <?php
                                            $result = mysqli_query($conn, "SELECT * FROM crop");
                                            while ($data = mysqli_fetch_array($result)) {
                                            ?>
                                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sName" class="form-label">Seed Name: </label>
                                        <input type="text" class="form-control" id="sName" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description: </label>
                                        <textarea class="form-control" id="description" name="desc"> </textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="sDura" class="form-label">Duration: </label>
                                        <input type="text" class="form-control" id="sDura" name="duration">
                                    </div>
                                    <div class="mb-3">
                                        <label for="sYield" class="form-label">Yield: </label>
                                        <input type="text" class="form-control" id="sYield" name="yield">
                                    </div>
                                    <div class="mb-3">
                                        <label for="season" class="form-label">Season: </label>
                                        <select class="form-select" aria-label="Default select example" name="season" id="season">
                                            <option value="ravi">Ravi</option>
                                            <option value="kharif">Kharif</option>
                                            <option value="zaid">Zaid</option>
                                        </select>
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
                                <h4 class="col-md text-primary m-0 fw-bold">Seed Info</h4>
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
                                            <th>Seed Name</th>
                                            <th>Description</th>
                                            <th>Duration</th>
                                            <th>Yield</th>
                                            <th>Season</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tdata">
                                        <!-- Getting Farmers Data from Database -->
                                        <?php
                                        $sql = "SELECT * FROM `seeds`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <?php
                                                $cropid = $row['crop-id'];
                                                $cNameSql = "SELECT name FROM `crop` WHERE `id` = $cropid;";
                                                $cResult = mysqli_query($conn, $cNameSql);
                                                $cropName = mysqli_fetch_assoc($cResult);
                                                ?>
                                                <td><?= $cropName['name'] ?></td>
                                                <td><?= $row['seed-name'] ?></td>
                                                <td><?= $row['description'] ?></td>
                                                <td><?= $row['duration'] ?></td>
                                                <td><?= $row['yield'] ?></td>
                                                <td><?= $row['season'] ?></td>
                                                <!-- <td><span class="badge bg-label-primary me-1">Active</span></td> -->
                                                <td style="text-align: center;">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item edit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                                                            <a class="dropdown-item" href="./script/delete-seed.php?id=<?= $row['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
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
                let id = tr.getElementsByTagName("td")[0].innerText;
                let sName = tr.getElementsByTagName("td")[2].innerText;
                let description = tr.getElementsByTagName("td")[3].innerText;
                let sDura = tr.getElementsByTagName("td")[4].innerText;
                let sYield = tr.getElementsByTagName("td")[5].innerText;
                console.log(description);
                $("#sid").val(id);
                $("#sName").val(sName);
                $("#description").val(description);
                $("#sDura").val(sDura);
                $("#sYield").val(sYield);
            })
        })
    </script>
</body>

</html>
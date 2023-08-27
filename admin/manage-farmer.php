<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Manage Farmers </title>
    <?php
    include("./include/header.php");
    ?>
</head>

<body id="page-top">
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
                if (isset($_GET['msg'])) {
                ?>
                    <script>
                        alertify.warning("<?= $_GET['msg'] ?>");
                    </script>
                <?php
                }
                ?>
                <!-- Update Form Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="./script/update-farmer.php" method="get">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input type="hidden" id="fid" name="fid" value="null">
                                    <div class="mb-3">
                                        <label for="fName" class="form-label">Name: </label>
                                        <input type="text" class="form-control" id="fName" name="fName">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fMobile" class="form-label">Mobile: </label>
                                        <input type="text" class="form-control" id="fMobile" name="fMobile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fEmail" class="form-label">Email: </label>
                                        <input type="text" class="form-control" id="fEmail" name="fEmail">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fVillage" class="form-label">Village: </label>
                                        <input type="text" class="form-control" id="fVillage" name="fVillage">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fTaluko" class="form-label">Taluko: </label>
                                        <input type="text" class="form-control" id="fTaluko" name="fTaluko">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fDistrict" class="form-label">District: </label>
                                        <input type="text" class="form-control" id="fDistrict" name="fDistrict">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fState" class="form-label">State: </label>
                                        <input type="text" class="form-control" id="fState" name="fState">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fState" class="form-label">Pincode: </label>
                                        <input type="text" class="form-control" id="fPincode" name="fPincode">
                                    </div>
                                    <div class="mb-3">
                                        <label for="fUsername" class="form-label">UserName: </label>
                                        <input type="text" class="form-control" id="fUsername" name="fUsername">
                                    </div>
                                    <input id="fPassword" type="hidden" name="fPassword" value="null">
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
                                <h4 class="col-md text-primary m-0 fw-bold">Farmer Info</h4>
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
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tdata">
                                        <!-- Getting Farmers Data from Database -->
                                        <?php
                                        $sql = "SELECT * FROM `farmer`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['mobile'] ?></td>
                                                <td><?= $row['email'] ?></td>

                                                <td><?= $row['village'] ?>, <?= $row['taluka'] ?><br> <?= $row['district'] ?>, <?= $row['state'] ?> <br> <?= $row['pincode'] ?> </td>

                                                <td style="display: none;"><?= $row['village'] ?></td>
                                                <td style="display: none;"><?= $row['taluka'] ?></td>
                                                <td style="display: none;"><?= $row['district'] ?></td>
                                                <td style="display: none;"><?= $row['state'] ?></td>
                                                <td style="display: none;"><?= $row['pincode'] ?></td>
                                                <td style="display: none;"><?= $row['password'] ?></td>

                                                <td><?= $row['username'] ?></td>
                                                <!-- <td><span class="badge bg-label-primary me-1">Active</span></td> -->
                                                <td style="text-align: center;">
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="fa-solid fa-ellipsis-vertical"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="dropdown-item edit"><i class="bx bx-edit-alt me-1"></i> Edit</button>
                                                            <a class="dropdown-item" href="./script/delete-farmer.php?id=<?= $row['id'] ?>"><i class="bx bx-trash me-1"></i> Delete</a>
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
        </div>
        <a class="border rounded d-inline scroll-to-top" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    <?php include("./include/scripts.php"); ?>
    <script>
        // console.clear();
        edits = document.getElementsByClassName('edit');
        Array.from(edits).forEach((element) => {
            element.addEventListener("click", (e) => {
                tr = e.target.parentNode.parentNode.parentNode.parentNode;
                console.log(tr)
                // tr.getElementsByTagName("td")[0].innerText;
                id = tr.getElementsByTagName("td")[0].innerText;
                name = tr.getElementsByTagName("td")[1].innerText;
                mobile = tr.getElementsByTagName("td")[2].innerText;
                email = tr.getElementsByTagName("td")[3].innerText;
                village = tr.getElementsByTagName("td")[5].innerText;
                taluko = tr.getElementsByTagName("td")[6].innerText;
                district = tr.getElementsByTagName("td")[7].innerText;
                state = tr.getElementsByTagName("td")[8].innerText;
                pincode = tr.getElementsByTagName("td")[9].innerText;
                password = tr.getElementsByTagName("td")[10].innerText;
                username = tr.getElementsByTagName("td")[11].innerText;

                $("#fid").val(id);
                $("#fName").val(name);
                $("#fMobile").val(mobile);
                $("#fEmail").val(email);
                $("#fVillage").val(village);
                $("#fTaluko").val(taluko);
                $("#fDistrict").val(district);
                $("#fState").val(state);
                $("#fPincode").val(pincode);
                $("#fUsername").val(username);
                $("#fPassword").val(password);
            })
        })
    </script>
</body>

</html>
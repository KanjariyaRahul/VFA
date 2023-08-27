<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Settings - VFA</title>
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
                <div class="container-fluid">
                    <!-- Admin Profile Settings -->
                    <div class="card shadowm m-1">
                        <div class="card-header">
                            <h2>Update Profile</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div onclick="changeTheme('bg-gradient-warning')" class="col m-1 rounded-1 bg-gradient-warning" style="cursor:pointer; width: 100px; height: 100px;"></div>
                                <div onclick="changeTheme('bg-gradient-dark')" class="col m-1 rounded-1 bg-gradient-dark" style="cursor:pointer; width: 100px; height: 100px;"></div>
                                <div onclick="changeTheme('bg-gradient-danger')" class="col m-1 rounded-1 bg-gradient-danger " style="cursor:pointer; width: 100px; height: 100px;"></div>
                                <div onclick="changeTheme('bg-gradient-info')" class="col m-1 rounded-1 bg-gradient-info" style="cursor:pointer; width: 100px; height: 100px;"></div>
                                <div onclick="changeTheme('bg-gradient-primary')" class="col m-1 rounded-1 bg-gradient-primary " style="cursor:pointer; width: 100px; height: 100px;"></div>
                                <div onclick="changeTheme('bg-gradient-secondary')" class="col m-1 rounded-1 bg-gradient-secondary" style="cursor:pointer; width: 100px; height: 100px;"></div>
                                <div onclick="changeTheme('bg-gradient-success')" class="col m-1 rounded-1 bg-gradient-success" style="cursor:pointer; width: 100px; height: 100px;"></div>

                                <table class="mt-3 table shadow rounded-3 overflow-hidden table-borderless table-responsive table-active table-hover <?= $_SESSION['theme'] ?> text-white w-100">
                                    <tbody>
                                        <tr>
                                            <td>Change Name: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['name'] ?>" id="name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Change Username: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['username'] ?>" id="username">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Change Password: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['password'] ?>" id="password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Update Profile Picture</td>
                                            <td>
                                                <input type="file" name="profile" id="profile" class="form-control">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <button class="btn btn-outline-primary bg-gradient-primary text-white" onclick="saveUserSettings()">Save changes</button>
                                </div>
                            </div>
                        </div>
                        <!-- Main Ends Here -->
                    </div>
                    <!-- System Settings -->
                    <div class="card shadowm m-1">
                        <div class="card-header">
                            <h2>Update Site</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <table class="mt-3 table shadow rounded-3 overflow-hidden table-borderless table-responsive table-active table-hover <?= $_SESSION['theme'] ?> text-white w-100">
                                    <tbody>
                                        <tr>
                                            <td>Maintenance Mode: </td>
                                            <td>
                                                <?php
                                                if ($_SESSION['maintenance'] == true) {
                                                    echo '<button class="btn btn-primary" type="button">Turn OFF</button>';
                                                } else {
                                                    echo '<button class="btn btn-secondary" type="button">Turn ON</button>';
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Devloper Mode</td>
                                            <td>
                                                <?php
                                                if ($_SESSION['dev-mode'] == true) {
                                                    echo '<button onclick="toggleDevMode(\'false\')" class="btn btn-primary" type="button">Turn OFF</button>';
                                                } else {
                                                    echo '<button onclick="toggleDevMode(\'true\')" class="btn btn-secondary" type="button">Turn ON</button>';
                                                }
                                                ?>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SMTP HOST: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['smtp-host'] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SMTP Username: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['smtp-username'] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SMTP Password: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['smtp-password'] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SMTP PORT: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['smtp-port'] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SMTP FROM: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['smtp-from'] ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>SMTP FROM-NAME: </td>
                                            <td>
                                                <input type="text" class="form-control" value="<?= $_SESSION['smtp-from-name'] ?>">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <button onclick="saveSystemSettings()" class="btn btn-outline-primary bg-gradient-primary text-white">Save changes</button>
                                    <span class="text-danger"><b>Note: </b> Be carefull while Changing SMTP Details </span>
                                </div>
                            </div>
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
            <script>
                // change theme
                function toggleDevMode(str) {
                    $.post({
                        url: "./script/toggleDevMode.php",
                        data: {
                            mode: str
                        },
                        success: (r) => {
                            alertify.warning(r.msg);
                        },
                        error: (r) => {
                            alertify.warning(r.responseText);
                        }
                    })
                } 

                function changeTheme(theme) {
                    $("#sideNav").removeClass("bg-gradient-success bg-gradient-secondary, bg-gradient-primary bg-gradient-info bg-gradient-danger bg-gradient-dark bg-gradient-warning ");
                    $("#sideNav").addClass(theme);
                    $.post({
                        url: "./script/changeTheme.php",
                        data: {
                            theme: theme
                        },
                        success: (r) => {
                            alertify.warning(r["msg"]);
                        },
                        error: (r) => {
                            alertify.warning(r.responseText);
                        }
                    })
                }

                function saveUserSettings() {
                    let name = $("#name").val();
                    let username = $("#username").val();
                    let password = $("#password").val();
                    let profile = document.querySelector("#profile").files[0];

                    let formdata = new FormData();

                    formdata.append("name", name);
                    formdata.append("username", username);
                    formdata.append("password", password);
                    formdata.append("profile", profile);

                    $.post({
                        url: "./script/saveUserSettings.php",
                        data: formdata,
                        contentType: false,
                        processData: false,
                        success: (r) => {
                            alertify.warning(r.msg);
                            $("#name").val(r.name);
                            $("#username").val(r.username);
                            $("#password").val(r.password);
                            $("#profileIMG").attr("src", "../App/img/adminProfile/"+r.file);
                        },
                        error: (r) => {
                            alertify.warning(r.responseText);
                        }
                    })
                }

                function saveSystemSettings() {
                    let host = $("#host").val();
                    let smtp_user = $("#smtp-user").val();
                    let smtp_password = $("#smtp-password").val();
                    let smtp_port = $("#smtp-port").val();
                    let smtp_from = $("#smtp-from").val();
                    let smtp_from_name = $("#smtp-from-name").val();
                    $.post({
                        url: "./script/saveSystemSettings.php",
                        data: {
                            "host": host,
                            "s-user": smtp_user,
                            "s-password": smtp_password,
                            "s-port": smtp_port,
                            "s-from": smtp_from,
                            "s-from-name": smtp_from_name
                        },
                        success: (r) => {
                            alertify.warning(r.msg);
                        },
                        error: (r) => {
                            alertify.warning(r.responseText);
                        }
                    })
                }
            </script>
</body>

</html>
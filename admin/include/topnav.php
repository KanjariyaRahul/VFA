<nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
        <h3 class="text-dark mb-1">

            <?php
            $a = $_SERVER["PHP_SELF"];
            // echo $_SERVER["PHP_SELF"]; 
            if ($a == "/vfa/admin/index.php") {
                echo "Dashboard";
            } else if ($a == "/vfa/admin/manage-farmer.php") {
                echo "Manage Farmers";
            } else if ($a == "/vfa/admin/contact-messeges.php") {
                echo "Contact Messeges";
            } else if ($a == "/vfa/admin/send-updates.php") {
                echo "Send Latest updates";
            } else if ($a == "/vfa/admin/add-new-crop.php") {
                echo "Add New Crop";
            } else if ($a == "/vfa/admin/add-new-crop-data.php") {
                echo "Add Crop Details";
            } else if ($a == "/vfa/admin/add-seed-info.php") {
                echo "Add seed Info";
            } else if ($a == "/vfa/admin/add-crop-event.php") {
                echo "Add Crop Events";
            } else if ($a == "/vfa/admin/add-crop-disease.php") {
                echo "Add Crop Disease";
            } else if ($a == "/vfa/admin/add-crop-faq.php") {
                echo "Add Crop FAQs";
            } else if ($a == "/vfa/admin/manage-crop.php") {
                echo "Manage Crop";
            } else if ($a == "/vfa/admin/manage-crop-info.php") {
                echo "Manage Crop Info";
            } else if ($a == "/vfa/admin/manage-seed-info.php") {
                echo "Manage Seed Information";
            } else if ($a == "/vfa/admin/manage-events.php") {
                echo "Manage Events";
            } else if ($a == "/vfa/admin/manage-disease.php") {
                echo "Manage Disease Information";
            } else if ($a == "/vfa/admin/manage-faq.php") {
                echo "Manage FAQs";
            } else if ($a == "/vfa/admin/manage-updates.php") {
                echo "Manage Recent Updates";
            } else if ($a == "/vfa/admin/manage-data.php") {
                echo "Manage Data";
            } else if ($a == "/vfa/admin/manage-news.php") {
                echo "Manage News";
            } else if ($a == "/vfa/admin/feed-back.php") {
                echo "Feedbacks";
            } else if ($a == "/vfa/admin/manage-blogs.php") {
                echo "Manage Blogs";
            } else if ($a == "/vfa/admin/add-new-blog.php") {
                echo "Publish Blogs";
            } else if ($a == "/vfa/admin/add-task.php") {
                echo "Add new Task Details";
            } else if ($a == "/vfa/admin/view-all-task.php") {
                echo "Tasks";
            } else if ($a == "/vfa/admin/settings.php") {
                echo "Settings";
            } else if ($a == "/vfa/admin/add-data.php") {
                echo "Add New Data";
            } else if ($a == "/vfa/admin/send-news.php") {
                echo "Publish Latest News";
            } else if ($a == "/vfa/admin/view-donation.php") {
                echo "Donations";
            } else if($a == "/vfa/admin/add-pesticide.php"){
                echo "Add Pesticides";
            } else if($a == "/vfa/admin/manage-pesticide.php"){
                echo "Manage Pesticides";
            } else {
                echo $a;
            }
            ?></h3>
        <ul class="navbar-nav flex-nowrap ms-auto">
            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="me-auto navbar-search w-100">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow">
                    <span class="dropdown-toggle nav-link" style="cursor: pointer;" aria-expanded="false" data-bs-toggle="dropdown">
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM `task` WHERE `status` = 'pending'");
                        $count = mysqli_num_rows($result);
                        ?>
                        <span id="mCount" class="badge bg-danger badge-counter"><?= $count ?></span>
                        <i class="fas fa-solid fa-list-check" style="font-size: x-large;"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">Task List</h6>
                        <!-- Contact messeges -->
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            $i++;
                            if ($i > 3) {
                                continue;
                            } else {
                        ?>
                                <a class="dropdown-item d-flex align-items-center" href="view-all-task.php">
                                    <div class="me-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                    </div>
                                    <div>
                                        <span class="small text-gray-500"><?= $row['title'] ?></span>
                                        <p><?= $row['msg'] ?></p>
                                    </div>
                                </a>
                        <?php
                            }
                        }
                        ?>
                        <a class="dropdown-item text-center small text-gray-500" href="view-all-task.php">Show All Tasks </a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow">
                    <span class="dropdown-toggle nav-link" style="cursor: pointer;" aria-expanded="false" data-bs-toggle="dropdown">
                        <?php
                        $result = mysqli_query($conn, "SELECT * FROM `contact` WHERE `status` = 'pending'");
                        $fr = mysqli_query($conn, "SELECT * FROM `feed-back` WHERE `status` = 'pending'");
                        $count = mysqli_num_rows($result) + mysqli_num_rows($fr);
                        ?>
                        <span id="mCount" class="badge bg-danger badge-counter"><?= $count ?></span>
                        <i class="fas fa-bell fa-fw" style="font-size: x-large;"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                        <h6 class="dropdown-header">Notifications</h6>
                        <!-- Contact messeges -->
                        <?php
                        $i = 0;
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($i > 3) {
                                continue;
                            } else {
                                $i++;
                        ?>
                                <a class="dropdown-item d-flex align-items-center" href="contact-messeges.php">
                                    <div class="me-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                    </div>
                                    <div>
                                        <span class="small text-gray-500"><?= $row['name'] ?></span>
                                        <p><?= $row['msg'] ?></p>
                                    </div>
                                </a>
                        <?php
                            }
                        }
                        ?>
                        <!-- Feed backs -->
                        <?php
                        while ($row = mysqli_fetch_assoc($fr)) {
                            if ($i > 5) {
                                continue;
                            } else {
                                $i++;
                        ?>
                                <a class="dropdown-item d-flex align-items-center" href="feed-back.php">
                                    <div class="me-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                    </div>
                                    <div>
                                        <span class="small text-gray-500"><?= $row['name'] ?></span>
                                        <p><?= $row['suggest'] ?></p>
                                    </div>
                                </a>
                        <?php
                            }
                        }
                        ?>
                        <a class="dropdown-item text-center small text-gray-500" href="contact-messeges.php">Show All Messeges</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a href="settings.php" class="nav-link m-0 p-0 nav-item">
                    <span class="nav-link" style="cursor: pointer;">
                        <i class="fas fa-gear fa-fw" style="font-size: x-large;"></i>
                    </span>
                </a>
            </li> 
            <div class="d-none d-sm-block topbar-divider"></div>
            <li class="nav-item dropdown no-arrow">
                <div class="nav-item dropdown no-arrow">
                    <a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        <span class="d-none d-lg-inline me-2 text-gray-600 small" id="adminName"><?= $_SESSION['name'] ?></span>
                        <img id="profileIMG" class="border rounded-circle img-profile" src="../App/img/adminProfile/<?=$_SESSION['profile']?>">
                    </a>
                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                        <a class="dropdown-item" href="login.php?lg=true">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
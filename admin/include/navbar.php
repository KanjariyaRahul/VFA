<nav id="sideNav" class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion <?=$_SESSION['theme']?> p-0">
    <div class="container-fluid d-flex flex-column p-0">
        <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fa fa-solid fa-leaf"></i>
            </div>
            <div class="sidebar-brand-text mx-3">
                <span>VFA</span>
            </div>
        </a>
        <hr class="sidebar-divider my-0">
        <ul class="navbar-nav text-light" id="accordionSidebar-2">
            <li class="nav-item">
                <a class="nav-link active" data-bss-hover-animate="flash" href="index.php"><i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bss-hover-animate="flash" href="add-data.php">
                    <i class="fas fa-table"></i>
                    <span>Publishing center</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="manage-data.php">
                    <i class="fas fa-table"></i>
                    <span>Data Manager</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="manage-farmer.php">
                    <i class="fas fa-table"></i>
                    <span>Manage Farmers</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="contact-messeges.php">
                    <i class="fas fa-table"></i>
                    <span>Contact Messeges</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="send-updates.php">
                    <i class="fas fa-table"></i>
                    <span>Send Updates</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="send-news.php">
                    <i class="fas fa-table"></i>
                    <span>Publish News</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="add-new-blog.php">
                    <i class="fas fa-table"></i>
                    <span>Publish Blogs</span>
                </a>
                <a class="nav-link" data-bss-hover-animate="flash" href="feed-back.php">
                    <i class="fas fa-table"></i>
                    <span>Feed Backs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php?lg=true">
                    <i class="far fa-user-circle"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <div class="text-center d-none d-md-inline">
            <button class="btn rounded-circle border-0" id="sidebarToggle-2" type="button"></button>
        </div>
    </div>
</nav>
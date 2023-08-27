<?php
require("../connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<!-- Header -->
<?php
include("../include/header.php");
?>
<!-- Header Ends -->

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- SideMenu -->
      <?php
      include("../include/sidebar.php");
      ?>
      <!-- SideMenu Ends -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php
        include("../include/navbar.php");
        ?>
        <!-- Navbar Ends -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <div class="card">
              <h5 class="card-header">Contact Messeges</h5>
              <ul class="list-group pmd-list pmd-card-list pmd-inset-divider">
                <li class="list-group-item d-flex">
                  <div class="pmd-avatar-list-img">
                    <img data-holder-rendered="true" src="img/40x40.png" class="img-fluid" data-src="holder.js/40x40" alt="40x40">
                  </div>
                  <div class="media-body">
                    <p class="pmd-list-title"><b>Joanne Wichern</b> mentioned you in a comment</p>
                    <p class="pmd-list-subtitle">36 minutes ago</p>
                  </div>
                  <div class="dropdown pmd-dropdown">
                    <button type="button" class="btn btn-dark no-caret btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons pmd-sm">more_vert</i></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex">
                  <div class="pmd-avatar-list-img">
                    <img data-holder-rendered="true" src="img/40x40.png" class="img-fluid" data-src="holder.js/40x40" alt="40x40">
                  </div>
                  <div class="media-body">
                    <p class="pmd-list-title">Today is <b>Joanne Wichern's</b> birthday.</p>
                    <button type="button" class="btn btn-outline-primary pmd-ripple-effect btn-sm">Send Wishes</button>
                  </div>
                  <div class="dropdown pmd-dropdown">
                    <button type="button" class="btn btn-dark no-caret btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons pmd-sm">more_vert</i></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex">
                  <div class="pmd-avatar-list-img">
                    <img data-holder-rendered="true" src="img/40x40.png" class="img-fluid" data-src="holder.js/40x40" alt="40x40">
                  </div>
                  <div class="media-body">
                    <p class="pmd-list-title"><b>Joanne Wichern</b> and <b>Diana Mason</b> had birthdays yesterday.</p>
                    <p class="pmd-list-subtitle">Tue at 8:04 AM</p>
                  </div>
                  <div class="dropdown pmd-dropdown">
                    <button type="button" class="btn btn-dark no-caret btn-sm pmd-btn-fab pmd-btn-flat pmd-ripple-effect dropdown-toggle" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="material-icons pmd-sm">more_vert</i></button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton3">
                      <a class="dropdown-item" href="javascript:void(0);">Action</a>
                      <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                      <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Content Ends -->

        <!-- Footer -->
        <?php
        include("../include/footer.php");
        ?>
        <!-- Footer Ends -->
        <div class="content-backdrop fade"></div>
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- Layout page Ends -->
  </div>

  <!-- Overlay -->
  <div class="layout-overlay layout-menu-toggle"></div>
  </div>
  <!-- Layout wrapper Ends -->

  <!-- Core JS -->
  <?php
  include("../include/corejs.php");
  ?>
  <!-- Core JS Ends Here -->

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

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
            <h1>Hello World</h1>
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
</body>

</html>
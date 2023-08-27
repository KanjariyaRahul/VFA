<?php 
    require("../connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/"
  data-template="vertical-menu-template-free">

<!-- Header -->
<?php  
  include("../include/header.php");
?>  
<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- SideMenu -->
      <?php 
        include("../include/sidebar.php");
      ?>
      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <?php 
          include("../include/navbar.php");
        ?>
        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="card">
                            <h5 class="card-header">Contact Messeges</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table" id="myTable">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Message</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <!-- Getting Farmers Data from Database -->
                                        <?php
                                        $sql = "SELECT * FROM `contact`";
                                        $result = mysqli_query($conn, $sql);
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['mobile'] ?></td>
                                                <td><?= $row['msg'] ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                                            <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
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
          <!-- Footer -->
          <?php 
            include("../include/footer.php");
          ?>
        <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
    </div>
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
  </div>
<!-- Core JS -->
<?php 
  include("../include/corejs.php");
?>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>

</html>
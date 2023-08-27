<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<!-- Header --> 
<?php
require("../connection/connection.php");
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
            <div class="row">
              <!-- Basic Layout -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add New Crop</h5>
                    <small class="text-muted float-end">Default label</small>
                  </div>
                  <div class="card-body">
                    <!-- Add new Crop Form -->
                    <form onsubmit="return false;" id="form" method="POST" action="">
                      <div class="row mb-3">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Crop Name</label>
                        <div class="col-md-10">
                          <input name="name" class="form-control" type="text" placeholder="Brinjal" id="name">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Crop Description</label>
                        <div class="col-sm-10">
                          <textarea name="desc" id="desc" class="form-control" placeholder="Some Description Here?"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="formFile" class="col-sm-2 form-label">Crop Picture</label>
                        <input name="uploadfile" class="form-control" type="file" id="uploadfile">
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="button" onclick="send();" class="btn btn-primary">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!-- Notification -->
            <div class="d-flex flex-row flex-wrap" id="noti">
            <div class="card bs-toast toast fade show bg-success m-2" role="alert" aria-live="assertive" aria-atomic="true">
              <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold"> Success </div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">
                New Crop added Successfully
              </div>
            </div>
            </div>
          </div>

          <!--View Crop Table -->
          <?php
          $result = mysqli_query($conn, "SELECT * FROM crop");
          while ($data = mysqli_fetch_array($result)) {
          ?>
            <div class="crop-item" onClick="reply_click(this.id)" id="<?= $data["id"] ?>">
              <img width="100px" height="100px" style="float: left;" src="<?=$imgl?>upload/crop/<?= $data["image"] ?>" alt="crop-image">
              <h2 id="crop-name"><?= $data["name"] ?></h2>
            </div>
          <?php } ?>

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

  <!-- script -->
  <script>
    function send() {
      if (confirm("Are you sure you want to Push this update???")) {
        requst(); 
      } else {
        console.log("Update insert Cancled by Admin");
      }
    }

    function requst() {
      var formData = new FormData();
      formData.append('name', $("#name").val());
      formData.append('desc', $("#desc").val());
      formData.append('uploadfile', $('#uploadfile')[0].files[0]);

      $.post({
        url: "../script/add-crop.php",
        data: formData,
        processData: false,  // tell jQuery not to process the data
        contentType: false,  // tell jQuery not to set contentType
        success: (response) => {
          console.log(response);

        },
        error: (response) => {
          console.log(response);
        }
      })
    }
  </script>
</body>

</html>
<?php
require("../connection/connection.php");
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

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
            <div class="row">
              <!-- Basic Layout -->
              <div class="col-xxl">
                <div class="card mb-4">
                  <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Add Crop Disease</h5>
                    <small class="text-muted float-end">Default label</small>
                  </div>
                  <div class="card-body">
                    <form method="get" action="../script/add-disease.php">
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Select Crop</label>
                        <select name="cid" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <?php
                          $sql = "SELECT * FROM `crop`";
                          $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <div class="row mb-3">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Disease Title</label>
                        <div class="col-md-10">
                          <input name="d-title" class="form-control" type="text" placeholder="disease title" id="html5-text-input" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Disease Discription</label>
                        <div class="col-sm-10">
                          <textarea name="d-desc" id="basic-default-message" class="form-control" placeholder="disease discription"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Disease Symptoms</label>
                        <div class="col-sm-10">
                          <textarea name="d-sym" id="basic-default-message" class="form-control" placeholder="Disease Symptoms"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-message">Disease Preventive Measure</label>
                        <div class="col-sm-10">
                          <textarea name="d-pest" id="basic-default-message" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="formFile" class="col-sm-2 form-label">Disease Picture</label>
                        <input name="uploadfile" class="form-control" type="file" id="uploadfile">
                      </div>
                      <div class="row justify-content-end">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-flex flex-row flex-wrap">
              <?php
              if (isset($_GET['msg'])) {
                $a = null;
              ?>
                <!-- Update Notification -->
                <!-- Update below div class to get warning, danger and other Notifications -->
                <?php
                if ($_GET['a'] == "true") {
                  $a = "bg-success";
                } else if ($_GET['a'] == "ex") {
                  $a = "bg-danger";
                } else {
                  $a = "bg-warning";
                }
                ?>
                <div class="card bs-toast toast fade show <?= $a ?> m-2" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                    <?= $_GET['msg'] ?>
                  </div>
                </div>
                <!-- Update notification Ends Here -->
              <?php
              }
              ?>
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
</body>

</html>
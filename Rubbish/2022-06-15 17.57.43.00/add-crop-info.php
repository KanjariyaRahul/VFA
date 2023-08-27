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
                    <h5 class="mb-0">Add Crop Information</h5>
                    <small class="text-muted float-end">Default label</small>
                  </div>
                  <div class="card-body">
                    <form method="get" action="../script/crop-info.php" id="crop-info-form">
                      <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Select Crop</label>
                        <select aria-required="true" required name="cid" class="form-select" id="exampleFormControlSelect1" aria-label="Default select example">
                          <option value="null" selected>Select Crop</option>
                          <?php
                          $sql = "SELECT * FROM `crop`";
                          $result = mysqli_query($conn, $sql);
                          while ($row = mysqli_fetch_assoc($result)) {
                          ?>
                            <option value="<?= $row['id'] ?>"><?= $row['name'] ?></option>
                          <?php } ?>
                        </select>
                      </div>
                      <h3>Expected</h3>
                      <div class="row mb-3">
                        <label for="html5-text-input" class="col-md-2 col-form-label">Expected Expenses</label>
                        <div class="col-md-10">
                          <input required name="ex-exp" class="form-control" type="text" placeholder="disease title" id="html5-text-input" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Expected Harvest</label>
                        <div class="col-sm-10">
                          <textarea required name="ex-harvest" class="form-control" placeholder="disease discription"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Expected Income</label>
                        <div class="col-sm-10">
                          <textarea required name="ex-inc" class="form-control" placeholder="Disease Symptoms"></textarea>
                        </div>
                      </div>
                      <h3>Favourable</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Favourable Climate</label>
                        <div class="col-sm-10">
                          <textarea required name="fav-cli" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Favourable Temperature</label>
                        <div class="col-sm-10">
                          <textarea required name="fav-temp" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Favourable Water</label>
                        <div class="col-sm-10">
                          <textarea required name="fav-water" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Required</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Required soil type</label>
                        <div class="col-sm-10">
                          <textarea required name="rq-soil-type" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Required soil PH</label>
                        <div class="col-sm-10">
                          <textarea name="rq-soil-ph" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Sowing</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Sowing Info</label>
                        <div class="col-sm-10">
                          <textarea required name="sow-info" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Land Preparation</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Land Preparation</label>
                        <div class="col-sm-10">
                          <textarea required name="lp" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Spacing & Plant population</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Spacing & Plant population</label>
                        <div class="col-sm-10">
                          <textarea required name="sppc" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Root Deep Treatment</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Root info</label>
                        <div class="col-sm-10">
                          <textarea required name="rdt" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Transplanting</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Transplanting</label>
                        <div class="col-sm-10">
                          <textarea required name="transplant" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Nutrient Management</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">For Irrigated and timely sowing</label>
                        <div class="col-sm-10">
                          <textarea required name="nm-timely-sow" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">For Irrigated and late sowing</label>
                        <div class="col-sm-10">
                          <textarea required name="nm-late-sow" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">For Rainfed Sowing</label>
                        <div class="col-sm-10">
                          <textarea required name="nm-rain-sow" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>

                      <h3>Irrigation</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Irrigation Info</label>
                        <div class="col-sm-10">
                          <textarea required name="irrigation" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>
                      <h3>Har</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Irrigation Info</label>
                        <div class="col-sm-10">
                          <textarea required name="irrigation" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
                      </div>

                      <h3>Yield</h3>
                      <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for=" ">Yield Info</label>
                        <div class="col-sm-10">
                          <textarea required name="yield" class="form-control" placeholder="Pesticide Information"></textarea>
                        </div>
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
              if (isset($_POST['msg'])) {
              ?>
                <!-- Update Notification -->
                <!-- Update below div class to get warning, danger and other Notifications -->
                <div class="card bs-toast toast fade show bg-success m-2" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="toast-header">
                    <i class="bx bx-bell me-2"></i>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                  </div>
                  <div class="toast-body">
                    <?=$_POST['msg']?>
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
  <!-- insert ajax request Script -->
  <!-- <script>
    function send() {
      if (confirm("Are you sure you want to Push this update???")) {
        requst();
      } else {
        console.log("Update insert Cancled by Admin");
      }
    }

    function requst() {
      var formData = new FormData();

      formData.append('cid', $("#cid").val());
      formData.append('ex-exp', $("#ex-exp").val());
      formData.append('ex-harvest', $("#ex-harvest").val());
      formData.append('ex-inc', $("#ex-inc").val());
      formData.append('fav-cli', $("#fav-cli").val());
      formData.append('fav-temp', $("#fav-temp").val());
      formData.append('fav-water', $("#fav-water").val());
      formData.append('rq-soil-type', $("#rq-soil-type").val());
      formData.append('rq-soil-ph', $("#rq-soil-ph").val());
      formData.append('sow-info', $("#sow-info").val());
      formData.append('lp', $("#lp").val());
      formData.append('sppc', $("#sppc").val());
      formData.append('rdt', $("#rdt").val());
      formData.append('transplant', $("#transplant").val());
      formData.append('nm-timely-sow', $("#nm-timely-sow").val());
      formData.append('nm-late-sow', $("#nm-late-sow").val());
      formData.append('nm-rained-sow', $("#nm-rained-sow").val());
      formData.append('irrigation', $("#irrigation").val());
      formData.append('yield', $("#yield").val());
      $.post({
        url: "../script/add-faq.php",
        data: formData,
        success: (response) => {
          console.log(response);

        },
        error: (response) => {
          console.log(response);
        }
      })
    }
  </script> -->
</body>

</html>
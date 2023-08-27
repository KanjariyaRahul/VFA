<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add Pesticides Information - VFA</title>
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
                <div class="container-fluid add-new-crop-form">
                    <div class="card p-2">
                        <div class="mb-3">
                            <label for="">Select Crop: </label>
                            <select onchange="getDisease()" name="did" id="cid" class="form-control">
                            <option value="">Select Crop</option>
                                <?php
                                $sql = "SELECT * FROM `crop`";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $title = $row['name'];
                                    echo "<option value='$id'>$title</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <form onsubmit="return false;" method="post" enctype="multipart/form-data" id="add-crop-form">
                            <div class="mb-3">
                                <label for="">Select Disease: </label>
                                <select name="did" id="did" class="form-control">
                                    <option value="">Select Crop</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="pest-name" class="form-label">Enter Pesticide Name: </label>
                                <input required type="text" name="name" class="form-control" id="pest-name">
                            </div>
                            <div class="mb-3">
                                <label for="pest-desc" class="form-label">Enter Pesticide Description: </label>
                                <textarea required name="desc" class="form-control" id="pest-desc" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="pest-quantity" class="form-label">Enter Pesticide Quantity: </label>
                                <input required type="text" name="quantity" class="form-control" id="pest-quantity">
                            </div>
                            <div class="mb-3">
                                <label for="pest-img" class="form-label">Select Image Pesticide</label>
                                <input required accept="image/*" class="form-control" type="file" id="pest-img" name="uploadfile">
                            </div>
                            <hr>
                            <button type="reset" class="btn btn-secondary">Clear Form</button>
                            <button type="submit" class="btn btn-primary float-end" onclick="addPesticide()">Add New Food Crop</button>
                        </form>
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
        function getDisease(){
            $.post({
                url: "./script/getDiseaseId.php",
                data: {
                    cid : $("#cid").val(),
                },
                success: (r)=>{
                    $("#did").html(r);
                },
                error: (r)=>{
                    alertify.warning(r.responseText);
                }
            })
        }
        // Add new Crop 
        function addPesticide() {
            let did = $("#did").val();
            let cropName = $("#pest-name").val();
            let cropDescription = $("#pest-desc").val();
            let quantity = $("#pest-quantity").val();
            let cropImage = document.querySelector("#pest-img").files[0];

            let formData = new FormData();

            formData.append("did", did);
            formData.append("name", cropName);
            formData.append("desc", cropDescription);
            formData.append("quantity", quantity);
            formData.append("img", cropImage);

            console.log(formData);

            $.post({
                url: "./script/add-pest.php",
                data: formData,
                contentType: false,
                processData: false,
                success: (response) => {
                    // console.log(response);
                    alertify.warning(response.msg);
                },
                error: (response) => {
                    alertify.warning(response);
                }
            })
        }
    </script>
</body>

</html>
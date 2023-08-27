<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Add New Crop</title>
    <?php
    include("./include/header.php");
    ?>
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- sidemenu -->
        <?php
        include("./include/navbar.php");
        ?>
        <div class="d-flex flex-column" id="content-wrapper">
            <div class="text-primary" id="content">
                <!-- Top nav menu -->
                <?php
                include("./include/topnav.php");
                ?>
                <!-- Update Notification Modal Ends Here -->
                <div class="container-fluid add-new-crop-form">
                    <div class="card p-2">
                        <h2>Enter Crop Details</h2>
                        <hr>
                        <form onsubmit="return false;" method="post" enctype="multipart/form-data" id="add-crop-form">
                            <div class="mb-3">
                                <label for="parentCategory" class="form-label">Select Parent Category: </label>
                                <select required class="form-select" id="parentCategory" name="parentCategory">
                                    <option selected value="food">Food Crop</option>
                                    <option value="feed">Feed Crop</option>
                                    <option value="oil">OIL Crop</option>
                                    <option value="fiber">Fiber Crop</option>
                                    <option value="ornamental">Ornamental Crop</option>
                                    <option value="industrial">Industrial Crop</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="childCategory" class="form-label">Select Child Categroy: </label>
                                <select required class="form-select" name="childCategory" id="childCategory">
                                    <option selected value="plant">Plant</option>
                                    <option value="creeper">Creeper</option>
                                    <option value="climber">Climber</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="foodPlantName" class="form-label">Enter Crop Name: </label>
                                <input required type="text" name="name" class="form-control" id="foodPlantName">
                            </div>
                            <div class="mb-3">
                                <label for="foodPlantDesc" class="form-label">Enter Crop Description: </label>
                                <textarea required name="desc" class="form-control" id="foodPlantDesc" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="foodPlantImage" class="form-label">Select Image of Food Plant</label>
                                <input required accept="image/*" class="form-control" type="file" id="foodPlantImage" name="uploadfile">
                            </div>
                            <hr>
                            <button type="reset" class="btn btn-secondary">Clear Form</button>
                            <button class="btn btn-primary float-end" onclick="addCrop()">Add New Food Crop</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © VFA 2022</span></div>
                </div>
            </footer> 
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <div id="wrapper-1"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div id="wrapper-2"><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <?php include("./include/scripts.php"); ?>

    <script>
        // Add new Crop 
        function addCrop() {
            let parentCategory = $("#parentCategory").val();
            let childCategory = $("#childCategory").val();
            let cropName = $("#foodPlantName").val();
            let cropDescription = $("#foodPlantDesc").val();
            let cropImage = document.querySelector("#foodPlantImage").files[0];

            let formData = new FormData();

            formData.append("parentCategory", parentCategory);
            formData.append("childCategory", childCategory);
            formData.append("name", cropName);
            formData.append("desc", cropDescription);
            formData.append("img", cropImage);

            console.log(formData);

            // console.log("p-cat: " + parentCategory + "\nc-cat: " + childCategory + "\nname: " + cropName + "\nDesc: " + cropDescription + "\nImage: " + cropImage + "\n");

            $.post({
                url: "./script/add-crop.php",
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
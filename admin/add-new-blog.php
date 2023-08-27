<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Publish New Blog</title>
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
                        <h2>Enter Post Details</h2>
                        <hr>
                        <form onsubmit="return false;" method="post" enctype="multipart/form-data" id="add-crop-form">
                            <div class="mb-3">
                                <label for="title" class="form-label">Enter Blog Title: </label>
                                <input required type="text" name="title" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="content" class="form-label">Enter Blog Content: </label>
                                <textarea required name="desc" class="form-control" id="content" rows="3"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Select Blog Post Thumbnail</label>
                                <input required accept="image/*" class="form-control" type="file" id="thumbnail" name="uploadfile">
                            </div>
                            <hr>
                            <button type="reset" class="btn btn-secondary">Clear Form</button>
                            <button class="btn btn-primary float-end" onclick="addBlogPost()">Publish Blog</button>
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
        // Publish New Blog
        function addBlogPost() {
            let title = $("#title").val();
            let content = $("#content").val();
            let thumbnail = document.querySelector("#thumbnail").files[0];
            let formData = new FormData();

            formData.append("title", title);
            formData.append("content", content);
            formData.append("img", thumbnail);

            console.log(formData);

            $.post({
                url: "./script/add-blog.php",
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
<?php
require("../connection/conn.php");

$msg = null;
if (isset($_POST['upload'])) {

    $post_content = $_POST["post-content"];
    $farmer_id = $_SESSION['farmerId'];
    // $_SERVER["DOCUMENT_ROOT"]
    $filename = $_FILES["post-image"]["name"];
    $tempname = $_FILES["post-image"]["tmp_name"];
    // Location of Image File where it can be Saved 
    $folder = $imgl . "upload/community/" . $filename;
    try {
        $sql = "INSERT INTO `community` (`id`, `farmer-id`, `post-text`, `post-picture`, `post-like`, `share`, `cmt-count`, `time`) VALUES (NULL, $farmer_id, '$post_content', '$filename', 0, 0, 0, current_timestamp());";
        if ($post_content != null || $_FILES["post-image"]["name"] != null) {
            if (move_uploaded_file($tempname, $folder)) {
                // Execute query
                $result = mysqli_query($con, $sql);
                // Now let's move the uploaded image into the folder: image
                if ($result) {
                    $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success! </strong> Post published succesfully... <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>
                    <script>$(".comm-form").css("display","none") </script>
                    
                    ';
                } else {
                    $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Warning ! </strong> Publishing Failed...<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
                }
            } else {
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error ! </strong> Image not Uploaded <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            }
        } else {
            $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry! </strong> You can not upload null value into Database.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        }
    } catch (Exception $ex) {
        $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Exception! </strong> Failed to publish post. Error: ' . $ex->getMessage() . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
}
// $result = mysqli_query($con, "SELECT * FROM crop");
// while ($data = mysqli_fetch_array($result)) {
//     echo `<img src="`.$data['image'].`">`;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/feeds.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Feed Post</h1>
            <div class="card">
                <h2>Are you Cutivating Soyabean this Kharif?</h2>
                <div class="feed-top">
                    <div>
                        <span class="material-icons-sharp" style="margin-right: 5px; color:var(--color-primary);">
                            visibility
                        </span>
                        <b>3245&nbsp;</b>Farmers Viewed
                    </div>
                    <div>
                        <span class="material-icons-sharp liked">
                            favorite
                        </span>
                        &nbsp; 333
                    </div>
                </div>
                <div class="feed-body">
                    <img src="../img/bg.jpg" alt="Feed Post Image">
                    <details>
                        <summary>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eos delectus veritatis pariatur molestiae maxime praesentium laborum tenetur repellat velit!</summary>
                        <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
                    </details>
                </div>
                <span>14 September, 2002</span>
            </div>












        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>
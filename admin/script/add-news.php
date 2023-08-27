<?php
require("../connection/connection.php");
$msg = $_POST["msg"];
$title = $_POST["title"];

$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "../../App/img/upload/news/" . $filename;

if ($filename != "" && $msg != "") {
    try {
        $sql = $conn->prepare("INSERT INTO `news`(`heading`, `news`, `image`) VALUES(?,?,?)");
        $sql->bind_param("sss", $title, $msg, $filename);
        if (move_uploaded_file($tempname, $folder)) {
            if ($sql->execute()) {
                echo "record Inserted";
                header("Location: ../send-news.php?msg=News Published");
            } else {
                echo "record not inserted";
                header("Location: ../send-news.php?msg=Update sent Failed");
            }
        } else {
            echo "file not moved";
            header("Location: ../send-news.php?msg=Image not Uploaded");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
}
?>
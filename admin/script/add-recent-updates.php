<?php
require("../connection/connection.php");
$msg = $_POST["msg"];

$filename = $_FILES["img"]["name"];
$tempname = $_FILES["img"]["tmp_name"];
$folder = "../../App/img/upload/recent-update/" . $filename;

if ($filename != "" && $msg != "") {
    try {
        $sql = $conn->prepare("INSERT INTO `recent-updates`(`image`, `msg`) VALUES(?,?)");
        $sql->bind_param("ss", $filename, $msg);
        if (move_uploaded_file($tempname, $folder)) {
            if ($sql->execute()) {
                echo "record Inserted";
                header("Location: ../send-updates.php?msg=Update Sent " . $_POST['msg']);
            } else {
                echo "record not inserted";
                header("Location: ../send-updates.php?msg=Update sent Failed");
            }
        } else {
            echo "file not moved";
            header("Location: ../send-updates.php?msg=Image not Uploaded");
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
} else {
}
?>
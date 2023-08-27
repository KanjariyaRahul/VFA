<?php
    require("../connection/connection.php");
    $msg = $_POST["msg"]; 
    
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "../../App/img/upload/recent-update/" . $filename;

    $sql = "INSERT INTO `recent-updates`(`image`, `msg`) VALUES('$filename','$msg')";
    if($filename != "" && $msg != ""){
        try{
            if (move_uploaded_file($tempname, $folder)) {
                if(mysqli_query($conn, $sql)){
                    echo "record Inserted";
                    header("Location: ../send-updates.php?msg=Update Sent ".$_POST['msg']);
                }
                else{
                    echo "record not inserted";
                    header("Location: ../send-updates.php?msg=Update sent Failed");
                }
            } else {
                echo "file not moved";
                header("Location: ../send-updates.php?msg=Image not Uploaded");
            }
            
        }
        catch(Exception $e){
            echo $e->getMessage();
        }
    }
    else{
        
    }

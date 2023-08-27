<?php
    require("../connection/connection.php");
    header('Content-Type: application/json');

    $msg = $_POST["msg"]; 
    
    $filename = $_FILES["img"]["name"];
    $tempname = $_FILES["img"]["tmp_name"];
    $folder = "../../App/img/upload/recent-update/" . $filename;

    $sql = "INSERT INTO `recent-updates` VALUES('$filename','$msg')";
    if($filename != "" && $msg != ""){
        try{
            if (move_uploaded_file($tempname, $folder)) {
                if(mysqli_query($conn, $sql)){
                    $response = array("status" => true, "data" => "Record Inserted Succesfully");
                    echo json_encode($response);
                }
                else{
                    $response = array("status" => false, "data" => "Record was not Inserted");
                    echo json_encode($response);
                }
            } else {
                $response = array("status" => false, "data" => "Image not uploaded");
                echo json_encode($response);
            }
            
        }
        catch(Exception $e){
            $response = array("status" => false, "data" => $e->getMessage());
            echo json_encode($response);
        }
    }
    else{
        $response = array("status" => false, "data" => "Image or MSG can not Null");
        echo json_encode($response);
    }

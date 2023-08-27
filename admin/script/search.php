<?php 
    require("../connection/connection.php");
    header("Content-Type: application/json");

    $key = "%".$_POST['key']."%";

    $sql = "SELECT * FROM `farmer` WHERE `name` LIKE '$key'";
    try{
        if($r = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($r) > 0){
                while($row = mysqli_fetch_all($r, MYSQLI_ASSOC)){
                    echo json_encode($row);
                }
            }else{
                echo json_encode("No Data Found");
            }
        }
        else{
            echo json_encode(mysqli_error($conn));
        }
    }
    catch(Exception $e){
        echo json_encode($e->getMessage());
    }
?>
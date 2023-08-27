<?php 
    require("../connection/conn.php");
    header("Content-Type: application/json");

    $crop_id = $_GET['crop-id'];
    $farmer_id = $_GET['farmer-id'];
    $seed_id = $_GET['seed-id'];
    $sowing_date = $_GET['sowing-date']; 
    $field_area = $_GET['calculatedArea'];
    // $field_type = $_GET['area-type'];
    $soil = $_GET['soil'];
    $water = $_GET['water'];

    $sql = "INSERT INTO `crop-tracking` (`crop_id`, `farmer_id`, `seed-id`, `sowing_date`, `farm_area`, `soil`, `water`) VALUES ('$crop_id', '$farmer_id', '$seed_id', '$sowing_date', '$field_area', '$soil', '$water');";
    
    try{
        $result = mysqli_query($con, $sql);
        if($result){
            $response = array("status" => true, "data" => "Farm Added succesfully");
        }else{
            $response = array("status" => false, "data" => mysqli_error($con));
        }
    }
    catch(Exception $e){
        $response = array("status" => false, "data" => $e->getMessage());
    }
    echo json_encode($response);

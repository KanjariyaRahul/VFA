<?php 
    require("../connection/connection.php");

    $cid = $_GET['cid'];
    // echo "Cid = " . $cid; 
    $seed_name = $_GET['seed-name'];
    // echo "<br>Seed Name: " . $seed_name;
    $seed_desc = $_GET['seed-desc'];
    // echo "<br>seed desc: " . $seed_desc;
    $seed_duration = $_GET['seed-duration'];
    // echo "<br>Seed Duration: " . $seed_duration;
    $seed_yield = $_GET['seed-yield'];
    // echo "<br>Seed Yield: " . $seed_yield;
    $seed_season = $_GET['seed-season'];
    // echo "<br>Seed Season: " . $seed_season;

    $sql = "INSERT INTO `seeds` (`crop-id`, `seed-name`, `description`, `duration`, `yield`, `season`) VALUES ('$cid', '$seed_name', '$seed_desc', '$seed_duration', '$seed_yield', '$seed_season');";

    try{
        if(mysqli_query($conn, $sql)){
            echo "Record Inseted";
            header("Location: ../php/add-planting-m.php?msg=seed data Added succesfully&a=true");
        }
        else{
            echo "Record Was not Inserted";
            header("Location: ../php/add-planting-m.php?msg=seed data was not Added succesfully&a=false");
        }
    }
    catch(Exception $e){
        echo "Exception: " . $e->getMessage();
        header("Location: ../php/add-planting-m.php?msg=".$e->getMessage()."&a=ex");
    }
?>
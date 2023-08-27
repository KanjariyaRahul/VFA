<?php 
    require("../connection/connection.php");

    $cid = $_POST['cid'];
    $seed_name = $_POST['seed-name'];
    $seed_desc = $_POST['seed-desc'];
    $seed_duration = $_POST['seed-duration'];
    $seed_yield = $_POST['seed-yield'];
    $seed_season = $_POST['seed-season']; 

    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "../../App/img/upload/seed/". $filename;

    if (move_uploaded_file($tempname, $folder)) { 
        try{
        $sql = $conn->prepare("INSERT INTO `seeds` (`crop-id`, `seed-name`, `description`, `duration`, `yield`, `season`, `image`) VALUES (?,?,?,?,?,?,?);");
    
        $sql->bind_param("ississs",$cid, $seed_name, $seed_desc, $seed_duration, $seed_yield, $seed_season, $filename);
        if($sql->execute()){

            // Getting Seed Id
            $getSeedId = "SELECT id FROM `seeds` WHERE `crop-id` = '$cid'";
            $result = mysqli_query($conn, $getSeedId);
            if(mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_assoc($result)){
                    $seed_id = $row['id'];
                    // Inserting basic events for all seeds 
                    $insertSeedEventSQL = "INSERT INTO `crop-event` (`crop-id`, `seed-id`, `title`, `description`, `day-after-sowing`) VALUES ('$cid', '$seed_id', 'Light Plowing', 'Ploughing is a simple but effective farm practice that cuts, granulates, invert the soil, creates furrows, ridges, and moist soil to prepare it for the next crop gradually. Majorly Ploughing is of 4 type depending up to the depth and time of Ploughing', '-5'), ('$cid', '$seed_id', 'Medium Plowing', 'This is also known as deep tillage. This method is primarily used to increase crop yield. Soils were normally less responsive to deep tillage than the heavier soils. Deep Ploughing means Ploughing to a depth exceeding 12 inches or subsoiling at a depth of 18 inches.', '-4'), ('$cid', '$seed_id', 'Fertilizing', 'natural or artificial substance containing the chemical elements that improve growth and productiveness of plants. Fertilizers enhance the natural fertility of the soil or replace chemical elements taken from the soil by previous crops. fertilizer.', '-3'), ('$cid', '$seed_id', 'Cultivation', 'What is cultivation in agriculture?\r\nImage result for Cultivation\r\ncultivation, in agriculture and horticulture, the loosening and breaking up (tilling) of the soil or, more generally, the raising of crops.', '-2'), ('$cid', '$seed_id', 'Prepare Seeds ', 'Prepare seeds before sowing them, Add Fertilizers, fungicide and other Nutrition to help them grow more efficiently', '-1'), ('$cid', '$seed_id', 'Sowing ', 'its time to sow your seeds into farm. sow seeds with guide given in krishi-Book section.  ', '0');";
                    mysqli_query($conn, $insertSeedEventSQL);
                }
                // echo "Record Inseted";
                header("Location: ../add-seed-info.php?msg=seed data Added succesfully&a=true");
            }else{
                header("Location: ../add-seed-info.php?msg=Seed Not Inserted-> No seed Found for Events&a=false");
            }
        }
        else{
            // echo "Record Was not Inserted";
            header("Location: ../add-seed-info.php?msg=".mysqli_error($conn)."&a=false");
        }
    }
    catch(Exception $e){
        // echo "Exception: " . $e->getMessage();
        header("Location: ../add-seed-info.php?msg=".$e->getMessage()."&a=ex");
    }
}else{
    header("Location: ../add-seed-info.php?msg=Image not Uploaded&a=true");
}
?>

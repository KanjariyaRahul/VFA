<?php 
    require("../connection/connection.php");

    $cid = $_GET['cid'];  
    $sid = $_GET['sid'];
    // echo "Cid = " . $cid; 
    $title = $_GET['e-title'];
    // echo "<br>Seed Name: " . $seed_name;
    $desc = $_GET['e-desc'];
    $fire = $_GET['fire-day']; 
    
    try{
        $stmt = $conn->prepare("INSERT INTO `crop-event` (`crop-id`,`seed-id`, `title`, `description`, `day-after-sowing`) VALUES (?,?,?,?,?);");
        $stmt->bind_param("iisss", $cid, $sid, $title, $desc, $fire);
        if($stmt->execute()){
            echo "Record Inseted";
            header("Location: ../add-crop-event.php?msg=Event Added succesfully");
        }
        else{
            echo "Record Was not Inserted";
            header("Location: ../add-crop-event.php?msg=".mysqli_error($conn));
        }
    }
    catch(Exception $e){
        echo "Exception: " . $e->getMessage();
        header("Location: ../add-crop-event.php?msg=".$e->getMessage());
    }
?>
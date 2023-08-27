<?php 
    require("../connection/connection.php");
    $fid = $_GET['fid'];
    $fname = $_GET['fName'];
    $fmobile = $_GET['fMobile'];
    $fmail = $_GET['fEmail'];
    $fvillage = $_GET['fVillage'];
    $ftaluko = $_GET['fTaluko'];
    $fdist = $_GET['fDistrict'];
    $fstate = $_GET['fState'];
    $fpincode = $_GET['fPincode'];
    $fusername = $_GET['fUsername'];
    $password = $_GET['fPassword'];

    $sql = "UPDATE `farmer` SET `name` = '$fname', `mobile` = '$fmobile', `email` = '$fmail', `state` = '$fstate', `district` = '$fdist', `taluka` = '$ftaluko', `village` = '$fvillage', `pincode` = '$fpincode', `username` = '$fusername' WHERE `id` = '$fid';";

    try{
        if(mysqli_query($conn, $sql)){
            header("Location: ../manage-farmer.php?msg=".$fname."'s Details Updated Succesfully");
        }else{
            header("Location: ../manage-farmer.php?msg=" . mysqli_error($conn));
        }
    }
    catch(Exception $e){
        header("Location: ../manage-farmer.php?msg=" . $e->getMessage());
    }
?>

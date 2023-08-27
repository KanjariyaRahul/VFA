<?php 
    if(!$_SESSION['userLoggedIn'] == true){
        header("Location: ../auth");
    }
    // echo $_SESSION['userLoggedIn'];
?>
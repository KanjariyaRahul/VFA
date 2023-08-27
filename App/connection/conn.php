<?php
require('config.php');

// Connecting to MySql Database using MySqli 
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    // echo 'Successfully connected with database';
}

// --------------------------------------------------------------

$sql = "SELECT * FROM `settings`";
if ($result = mysqli_query($con, $sql)) {
    while ($row = mysqli_fetch_assoc($result)) {
        if (!$row['display-error'] == "true") {
            // error_reporting(0);
        }
        if($row['maintenance'] == "true"){
            header("Location: underMaintenance.html");
        }
        //Set SMTP host name
        $mail->Host = $row['smtp-host'];
        //Provide username and password
        $mail->Username = $row['smtp-username'];
        $mail->Password = $row['smtp-password'];
        //Set TCP port to connect to
        $mail->Port = $row['smtp-port'];
        $mail->isHTML(true);
        $mail->From = $row['smtp-from'];
        $mail->FromName = $row['smtp-from-name'];
    }
}
?>
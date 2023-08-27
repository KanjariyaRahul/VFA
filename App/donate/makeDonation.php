<?php
require("../connection/conn.php");
$fid = $_POST['fid'];
$name = $_POST['name'];
$email = $_POST['mail'];
$address = $_POST['address'];
$amount = $_POST['amount'];
$card = $_POST['cardNumber'];
$transactionId = md5($_POST['transactionId']);
$browser = $_POST['browser'];
$lat = $_POST['lat'];
$long = $_POST['long'];
$location = $_POST['location'];
$ip = $_POST['ip'];
$file = "./receipt/" . $transactionId . ".html";
$receipt = fopen($file, "w");

$mail->addAddress($email, "VFA");

$msg = "<!DOCTYPE html> <html lang='en'> <head> <meta charset='UTF-8'> <meta http-equiv='X-UA-Compatible' content='IE=edge'> <meta name='viewport' content='width=device-width, initial-scale=1.0'> <title>Donation Recived</title> <style> * { margin: 0; padding: 0; box-sizing: border-box; font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; } body { display: flex; justify-content: center; align-items: center; min-height: 100vh; background-color: #EFFFFD; } .container { margin: 0 auto; padding: 1rem; width: 90vw; background-color: white; display: flex; justify-content: center; align-items: center; box-shadow: 2.8px 2.8px 2.2px rgba(0, 0, 0, 0.02), 6.7px 6.7px 5.3px rgba(0, 0, 0, 0.028), 12.5px 12.5px 10px rgba(0, 0, 0, 0.035), 22.3px 22.3px 17.9px rgba(0, 0, 0, 0.042), 41.8px 41.8px 33.4px rgba(0, 0, 0, 0.05), 100px 100px 80px rgba(0, 0, 0, 0.07); } .bn62 { color: white; background-color: #1b2f31; border-radius: 50px; display: flex; justify-content: center; align-items: center; height: 3em; font-size: large; font-weight: 600; padding: 0.5rem; } a{ text-decoration: none; } </style> </head> <body> <div class='container card'> <center> <img src='https://i.postimg.cc/ry5975Pp/thank-you.png' alt='Thank you' width='200px' height='200px'> <h1>Thank you</h1> <br> <h2>" . $name . "</h2> <br> <h3>for Making Donation of " . $amount . "</h3><br> <p> We are so grateful for your donation which has been, allocated to our new system VFA -AI Farming technology for Farmers of India. </p> <br> <a class='bn62' href='./donate/" . $file . "' download>Download Receipt</a> <br> <br> <h4>Spread Some Love by vfa to your neighbours and Farmer friends so they can also take Advantage of this Free Plateform and Grow Together </h4> </center> </div> </body> </html>";


fwrite($receipt, $msg);

$sql = "INSERT INTO `donation` (`farmer-id`, `name`, `email`, `address`, `transaction-id`, `card-number`, `amount`, `ip`, `location`, `browser`, `lattitude`, `longitude`, `receipt`) VALUES('$fid','$name','$email','$address','$transactionId','$card','$amount','$ip', '$location', '$browser', '$lat', '$long', '$file');";

// Sending Mail 
$mail->Subject = "Thanks for you Support -VFA :)";
// $mail->MsgHTML = "$msg";

$mail->Body = $msg;
$mail->AltBody = "This is the plain text version of the email content";


try {
    $mail->send();
    if (mysqli_query($con, $sql)) {
?>
        Thank you!, Your Donation Was successfully received :)
    <?php
    } else {
    ?>
       Error: <?= mysqli_error($con) ?>
    <?php
    }
    ?>
<?php
} catch (Exception $e) {
?>
    <?= $e->getMessage() ?>
<?php
}
?>
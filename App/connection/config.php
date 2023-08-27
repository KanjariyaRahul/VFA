 <?php
  // SMTP Mail Setup
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;

  //  required for Sending Emails 
  require_once $_SERVER["DOCUMENT_ROOT"] . "/vfa/vendor/autoload.php";

  // $base = "http://localhost/vfa"; // Base URL of Localhost 
  $base = "https://www.hardik.works/vfa"; /* Base URL of Digital Ocean Server */

  // Starting Session Globally 
  session_start();

  // setting TimeZone to IN
  date_default_timezone_set('Indian/Maldives');
  $servername = "localhost"; 
  // Connecting with Localhost Server
  $username = "root";  
  $password = ""; 
  $dbname = "vfa";
 
  // Connecting with Digital Ocean server
//   $username = "vfa2023";
//   $password = "vfa2023@Password"; 
//   $dbname = "vfa"; 

  // Base URL for uploading Image 
  $imgl = $base . "/App/img/"; // Image Location 

  //  Creating object of PHPMailer
  $mail = new PHPMailer(true);

  //Set PHPMailer to use SMTP.
  $mail->isSMTP();

  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = true;

  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "tls";

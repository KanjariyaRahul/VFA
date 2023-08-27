<?php
  session_start();
  $server = "localhost"; /* Host name */
  // $username = "vfa@2023"; /* User */
  // $password = "vfa2023@Password"; /* Password */ 
  // Digital Ocean
  $username = "root"; 
  $password = ""; 
  $db = "vfa"; /* Database name */
  $base = $_SERVER["PHP_SELF"]; /* Base URL of Website */
  $imgl = $base."App/img/"; /* Image Location */

  // setting TimeZone to IN 
  date_default_timezone_set('Indian/Maldives');
?>

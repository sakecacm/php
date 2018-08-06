<?php
define ("DB_HOST", "localhost"); // set database host
define ("DB_USER", "root"); // set database user
define ("DB_PASS",""); // set database password
define ("DB_NAME","php"); // set database name

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   $status = "Connected successfully. Host info: " . mysqli_get_host_info($conn). "<br>";
   
?>
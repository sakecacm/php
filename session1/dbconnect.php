<!DOCTYPE html>
<html lang="en">
<head>

<title>DB Server Connect</title>
</head>


<body>
<h1> DB Connection Test </h1>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */ 

   $dbhost = 'localhost';  
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

// check connection status.    
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   echo "Connected successfully. Host info: " . mysqli_get_host_info($conn). "<br>";
   mysqli_close($conn);
?>


</body>

</html>
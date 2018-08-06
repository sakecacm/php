<!DOCTYPE html>
<html lang="en">
<head>

<title>Database Creation</title>
</head>


<body>
<h1> Database Creation </h1>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with a password) */ 

   $dbhost = 'localhost';  
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   // check connection status.    
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   // Attempt create database query execution
   // create a database demo
   $sql = "CREATE DATABASE demo";

   if(mysqli_query($conn, $sql)){
     echo "Database created successfully";
    } else{
         echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
    }
   
   // close connection
   mysqli_close($conn);
?>


</body>

</html>
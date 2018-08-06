<!DOCTYPE html>
<html lang="en">
<head>

<title>Table Creation</title>
</head>


<body>
<h1> Table Creation </h1>

<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with a password) */ 

   $dbhost = 'localhost';  
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'demo';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   // check connection status.    
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }
   
   // Attempt create table query execution to create persons table

    $sql = "CREATE TABLE persons(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(70) NOT NULL UNIQUE
    )";

    if(mysqli_query($conn, $sql)){
        echo "Table persons created successfully.";
    } else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

   
   // close connection
   mysqli_close($conn);
?>


</body>

</html>
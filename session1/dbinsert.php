<!DOCTYPE html>
<html lang="en">
<head>

<title>Record Insertion</title>
</head>


<body>
<h1> Insert One Record </h1>

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
   
// Attempt insert query execution to insert one record
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('Pradip1', 'Mane1', 'pradip.mane9@sakec.ac.in')";
    if(mysqli_query($conn, $sql)){
         echo "Records inserted successfully.";
    } else{
    echo "ERROR: Could not execute insert $sql. " . mysqli_error($conn);
   }

   
// close connection
   mysqli_close($conn);
?>


</body>

</html>
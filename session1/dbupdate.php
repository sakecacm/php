<!DOCTYPE html>
<html lang="en">
<head>

<title>Record Update</title>
</head>


<body>
<h1> Update email id of a records </h1>

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
   
// Attempt update query execution
   $sql = "UPDATE persons SET email='pradip.mane@gmail.com' WHERE id=1";

   if(mysqli_query($conn, $sql)){
       echo "Records were updated successfully.";
   } else {
        echo "ERROR: Could not  execute $sql. " . mysqli_error($conn);
   }
 
// close connection
   mysqli_close($conn);
?>


</body>

</html>
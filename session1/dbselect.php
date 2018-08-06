<!DOCTYPE html>
<html lang="en">
<head>

<title>Record Display</title>
</head>


<body>
<h1> Display all records </h1>

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
   
// Attempt select query execution
  $rcount=0;
  $sql = "SELECT * FROM persons";
  
//  $sql = "SELECT * FROM persons WHERE first_name='Pooja'";
//  $sql = "SELECT * FROM persons LIMIT 3";
//  $sql = "SELECT * FROM persons ORDER BY first_name";

// $result will have the record set, one record per row.
  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
			$rcount=$rcount+1;
        }
        echo "</table>";

     // Free result set
        mysqli_free_result($result);
        echo"<br> Number of records displayed:  $rcount <br>";
    } else{
        echo "No records matching your query were found.";
    }

   } else{
         echo "ERROR: Could not execute select $sql. " . mysqli_error($conn);
  }

 
// close connection
   mysqli_close($conn);
?>


</body>

</html>
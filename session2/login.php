<?php 
include 'dbc.php';



if ($_POST['doLogin']=='Login')
{

$name = $_POST['user_name'];
$pwd = $_POST['pwd'];
	
$result = mysqli_query($con, "SELECT * FROM users WHERE user_name = '$name' and pwd = '$pwd'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $full_name = $row['full_name'];
		$id= $row['id'];
		$user_name=$row['user_name'];
		 session_start();
    $_SESSION["full_name"]   = $full_name;
    $_SESSION["user_name"] = $user_name;
	$_SESSION["id"] = $id;
    header("location:myaccount1.php");
}}
		else {
		$err[] = "Error - Invalid login.";
	  }		
}
					 
					 

?>
<html>
<head>
<title>Members Login</title>


</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="5" class="main">
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr> 
    <td width="160" valign="top"><p>&nbsp;</p>
      <p>&nbsp; </p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>&nbsp;</p>
      <h3 class="titlehdr">Login Users 
      </h3>  
	  <p>
	  <?php
	  /******************** ERROR MESSAGES*************************************************
	  This code is to show error messages 
	  **************************************************************************/
	  if(!empty($err))  {
	   echo "<div class=\"msg\">";
	  foreach ($err as $e) {
	    echo "$e <br>";
	    }
	  echo "</div>";	
	   }
	  /******************************* END ********************************/	  
	  ?></p>
      <form action="login.php" method="post" name="logForm" id="logForm" >
        <table width="65%" border="0" cellpadding="4" cellspacing="4" class="loginform">
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr> 
            <td width="28%">Username</td>
            <td width="72%"><input name="user_name" type="text" class="required" size="25"></td>
          </tr>
          <tr> 
            <td>Password</td>
            <td><input name="pwd" type="pwd" class="required password" size="25"></td>
          </tr>
          
          <tr> 
            <td colspan="2"> <div align="center"> 
                <p> 
                  <input name="doLogin" type="submit" id="doLogin3" value="Login">
                </p>
                <p><a href="register.php">Register Me</a><font color="#FF6600"> 
                  
                  </font></p>
              
              </div></td>
          </tr>
        </table>
        <div align="center"></div>
        <p align="center">&nbsp; </p>
      </form>
      <p>&nbsp;</p>
	   
      </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

</body>
</html>

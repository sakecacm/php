<?php 
include 'dbc.php';
$err = array();
				 
if(isset($_POST['doRegister'])) 
{ 
$user_name=$_POST['user_name'];

$pwd=$_POST['pwd'];
$tel=$_POST['tel'];
$full=$_POST['full_name'];
$email=$_POST['usr_email'];



$sql = "INSERT into users
  			(full_name,user_email,pwd,tel,user_name
			)
		    VALUES
		    ('$full','$email','$pwd','$tel','$user_name'
			)
			";
if(mysqli_query($con, $sql)){
         echo "Records inserted successfully.";
    } else{
    echo "ERROR: Could not execute insert $sql. " . mysqli_error($conn);
   }
 
	 
	
 }					 

?>
<html>
<head>
<title>Registration/Signup Form</title>

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
    <td width="732" valign="top">

      <h3 class="titlehdr"> Registration / Signup</h3>

	 
	  <br>
      <form action="register.php" method="post" name="regForm" id="regForm" >
        <table width="95%" border="0" cellpadding="3" cellspacing="3" class="forms">
          <tr> 
            <td>Full Name <span class="required"><font color="#CC0000">*</font></span><br></td>
            <td><input name="full_name" type="text" id="full_name" size="40" class="required"></td>
          </tr>
          <tr> 
            <td width="22%">Phone<span class="required"><font color="#CC0000">*</font></span></td>
            <td width="78%"><input name="tel" type="text" id="tel" class="required"></td>
          </tr>
          <tr> 
            <td>Username<span class="required"><font color="#CC0000">*</font></span></td>
            <td><input name="user_name" type="text" id="user_name" class="required username" minlength="5" > 
           </td>
          </tr>
          <tr> 
            <td>Your Email<span class="required"><font color="#CC0000">*</font></span>            </td>
            <td><input name="usr_email" type="text" id="usr_email3" class="required email"> 
             </td>
          </tr>
          <tr> 
            <td>Password<span class="required"><font color="#CC0000">*</font></span></td>
            <td><input name="pwd" type="password" id="pwd" class="required password" minlength="5" > 
              </td>
          </tr>
          <tr> 
            <td>Retype Password<span class="required"><font color="#CC0000">*</font></span>            </td>
            <td><input name="pwd2"  id="pwd2" class="required password" type="password" minlength="5" equalto="#pwd"></td>
          </tr>
          <tr> 
            <td colspan="2">&nbsp;</td>
          </tr>
        </table>
        <p align="center">
          <input name="doRegister" type="submit" id="doRegister" value="Register">
        </p>
      </form>
 
    </td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

</body>
</html>

<?php 
include 'dbc.php';

?>
<html>
<head>
<title>My Account</title>



        
</head>

<body>
<table width="100%" border="0" cellpadding="5" cellspacing="0" bgcolor="#DEE7ED" class="main">
  <tr> 
    <td colspan="3"><?php 
/*********************** MYACCOUNT MENU ****************************
This code shows my account menu only to logged in users. 
Copy this code till END and place it in a new html or php where
you want to show myaccount options. This is only visible to logged in users
*******************************************************************/
if (isset($_SESSION['id'])) {?>
      <table width="100%" border="0" align="center">
        <tr>
          <td width="9%"><a href="profile.php" style="text-decoration:none; color:#c00;">My Profile </a></td>
          <td width="3%" align="center">||</td>
         
          <td width="25%"><a href="logout.php" class="style1" style="text-decoration:none; color:#c00;">Logout </a></td>
          
        </tr>
      </table> </td>
  </tr>
  <tr> 
    <td width="160" valign="top"><?php }?>

      <p>&nbsp;</p>
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="732" valign="top"><p>&nbsp;</p>
      <h3 class="titlehdr">Welcome <?php echo $_SESSION['full_name'];?></h3>  
<?php	   $_SESSION["full_name"] ;
     $_SESSION["user_name"];
	 $_SESSION["id"];?>
	        <p>&nbsp;</p>
      <div id="loading"></div>
        <div id="container">
            <div class="data"></div>
            <div class="pagination"></div>
        </div>
      <p>&nbsp;</p></td>
    <td width="196" valign="top">&nbsp;</td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>

</body>
</html>

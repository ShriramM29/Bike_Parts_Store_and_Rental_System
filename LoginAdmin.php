<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bike Rental</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>

<body bgcolor="#0099FF" style="background-image:url(images/Background.jpg)">
<div align="center">
<table width="80%" bgcolor="#FFFFFF">
  <tr>
    <td colspan="3">
	<img src="images/banner.jpg" width="100%" height="250"/></td>
  </tr>
  <tr>
    <td colspan="3">
		<div class="menubg">
		<ul>
		<li><a href="Index.php">Home</a></li>
		<li><a href="LoginAdmin.php">Bike Center</a></li>
		<li><a href="LoginCus.php">Customer Login</a></li>
		<li><a href="Registration.php">Registration</a></li>
		</ul>
		</div>	</td>
  </tr>
  <tr>
    <td align="center"> 
	<img src="images/1.jpg" width="375" height="350" />	</td>
    <td>
	<div style="background-color:#CCFF66; border-top-left-radius:35px; border-bottom-right-radius:35px;">
	<center>
	<form id="form1" name="form1" method="post" action="">
		<table width="300px" style=" color:#000000; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:26px; font-weight:bold" align="center">Bike Center Login Page </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>User Name </td>
    <td>
      
        <input type="text" name="name" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="Submit" value="Submit" style="width:120px; background-color:#003399; color:#FFFFFF"/> 
        &nbsp;&nbsp; <input type="reset" name="Submit2" value="Reset" style="width:120px; background-color:#003399; color:#FFFFFF"/></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	 </form>
	</center>
	</div>	</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#33FF99"><div align="center" style="color:#FFFFFF">Powered By Bike Rental</div></td>
  </tr>
</table>
</div>
</body>
</html>

<?php
include("config.php");
session_start();
unset($_SESSION['uname']);
if(isset($_POST['Submit']))
{
	if($_POST['name']=="Admin" && $_POST['password']=="Admin")
	{
		 header("location:Admin.php");
	}
	else 
	{
	echo "<script text='text/javascript'>alert('Invalid Authentication');</script>";
	}
}
?>

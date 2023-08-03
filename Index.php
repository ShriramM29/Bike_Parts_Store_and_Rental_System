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
		<li><a href="LoginCus.php">Customer </a></li>
		<li><a href="Registration.php">Registration</a></li>
		</ul>
		</div>	</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
    <td>
	<div style=" border-top-left-radius:35px; border-bottom-right-radius:35px;">
	<center>
	<form id="form1" name="form1" method="post" action="">
		<table width="300px" style=" color:#000000; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:26px; color:#000099; font-weight:bold" align="center">ONLINE  BIKE PARTS STORE AND RENTAL SYSTEM</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:26px; font-weight:bold" align="center"><img src="images/Home.gif"  /></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;&nbsp;</td>
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
if($_POST['name']!="" && $_POST['password']!="")
{
	if($_POST['name']=="Admin" && $_POST['password']=="Admin" && $_POST['usertype']=="Admin")
	{
		 header("location:Admin.php");
	}
	else if($_POST['usertype']=="Customer")
	{
	print '<h1 align="center">Not Success111 </h1>';
		$name=$_POST['name'];
		$pass=$_POST['password'];
		
		$sql = "select * from Customer where UserName ='$name' and Password='$pass'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$count = mysql_num_rows($result);
		
		if ($count == 1)
		{
		 echo " Login Successful....";
		 $_SESSION['uname'] = $name;
		 header("location:Customer.php");
		 }
		 else
		 {
		 //header ("location:Login.php");
		 echo "<h3> Invalid....... </h3>";
		 }
	}
	
}
else
print '<h1 align="center">Not Success </h1>';
}
?>

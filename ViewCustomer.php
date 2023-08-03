<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bike Rental</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body bgcolor="#0099FF">
<div align="center">
<table width="80%" bgcolor="#FFFFFF">
  <tr>
    <td>
	<img src="images/banner.jpg" width="100%" height="250"/></td>
  </tr>
  <tr>
    <td>
		<div class="menubg">
		<ul>
		<li><a href="Admin.php">Home</a></li>
		<li><a href="AddBike.php">Add Bike</a></li>
		<li><a href="AddSpare.php">Add Spare</a></li>
		<li><a href="ViewRental.php">View Rental </a></li>
		<li><a href="RentalApprove.php">Rental Status</a></li>
		<li><a href="ViewOrder.php">View Order</a></li>
		<li><a href="Delivery.php">Order Delivery</a></li>
		<li><a href="ViewCustomer.php">ViewCustomer</a></li>
		<li><a href="Index.php">Sign Out</a></li>
		</ul>
		</div>	</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
	  <div style="background-color:#CCFF66; border-top-left-radius:35px; border-bottom-right-radius:35px; width:70%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="500px" style=" color:#000000; font-size:14px">
	          <tr>
	            <td colspan="2">&nbsp;</td>
    </tr>
	          <tr>
                <td colspan="2" style="font-size:28px;color:#3300CC; font-weight:bold" align="center">View Customer </td>
	            </tr>
	          <tr>
	            <td width="222">&nbsp;</td>
      <td width="258">&nbsp;</td>
    </tr>
	          <tr>
	            <td colspan="2">
				
				
				<table width="480" border="1" align="center" style="background-color:#336600; color:#FFFFFF;">
    <tr>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Name</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>UserName</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Password</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Gender</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>ContactNo</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>MailID</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Address</strong></div></td>
    </tr>
	<?php 
include("config.php");
//if(isset($_POST['Submit']))
//{
//	$name=$_POST['name'];
	
	
	$result =mysql_query("Select * from Customer");

	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['Name']; ?></td>
	  <td><?php echo $row['UserName'];?></td>
	  <td><?php echo $row['Password'];?></td>
      <td><?php echo $row['Gender']; ?></td>
	  <td><?php echo $row['ContactNo']; ?></td>
	  <td><?php echo $row['MailID']; ?></td>
	  <td><?php echo $row['Address']; ?></td>
    </tr>
  
  <?php } ?>
</table>				</td>
      </tr>
	          <tr>
	            <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
	          <tr>
	            <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
	        <p>&nbsp;</p>
	        <p>&nbsp;</p>
	        </form>
	  </center>
	    </div></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#33FF99"><div align="center" style="color:#FFFFFF">Powered By Bike Rental</div></td>
  </tr>
</table>
</div>
</body>
</html>

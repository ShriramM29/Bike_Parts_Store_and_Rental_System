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
		<li><a href="Customer.php">Home</a></li>
		<li><a href="ViewBike.php">View Bike</a></li>
		<li><a href="ViewSpare.php">View Spare</a></li>
		<li><a href="RentalReq.php">Rental Booking</a></li>
		<li><a href="ViewRentalBooking.php">View Booking</a></li>
		<li><a href="SpareOrder.php">Spare Order </a></li>
		<li><a href="ViewOrder1.php">Order Status</a></li>
		<li><a href="Index.php">Sign Out</a></li>
		</ul>
		</div>	</td>
  </tr>
  <tr>
    <td align="center">&nbsp;</td>
  </tr>
  <tr>
    <td align="center">
	  <div style="background-color:#CCFF66; border-top-left-radius:35px; border-bottom-right-radius:35px; width:50%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="300px" style=" color:#000000; font-size:14px">
	          <tr>
	            <td colspan="2">&nbsp;</td>
    </tr>
	          <tr>
                <td colspan="2" style="font-size:28px;color:#3300CC; font-weight:bold" align="center">View Spare  Details  </td>
	            </tr>
	          <tr>
                <td colspan="2" style="font-size:18px; font-weight:bold" align="center">&nbsp;</td>
	            </tr>
	          <tr>
	            <td colspan="2">
				
				
				<table width="480" border="1" align="center" style="background-color:#336600; color:#FFFFFF;">
    <tr>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>ID</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Name</strong></div></td>
		<td width="69" style="background-color:#CC0033"><div align="center"><strong>Company</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Model</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Price</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Details</strong></div></td>
		<td width="76" style="background-color:#CC0033"><div align="center"><strong>Image</strong></div></td>
		
    </tr>
	<?php 
include("config.php");

	
	$result =mysql_query("Select * from Spare");
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['ID']; ?></td>
	  <td><?php echo $row['Name'];?></td>
	  <td><?php echo $row['Company'];?></td>
      <td><?php echo $row['Model']; ?></td>
	  <td><?php echo $row['Price']; ?></td>
	  <td><?php echo $row['Details']; ?></td>
	  <td><img width="100" src="<?php echo $row['image']; ?>"></td>
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

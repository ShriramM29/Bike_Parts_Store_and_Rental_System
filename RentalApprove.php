<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Bike Rental</title>
<script type="text/JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

</script>

<script language="javascript">
                function sum()
                {
                        var a = document.getElementById("qty").value;
                        var b = document.getElementById("price").value;
             			var d = document.getElementById("tprice");
					
	d.value=a * b ;
						
						
                }
        </script>
<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body bgcolor="#0099FF">
<script language="javascript">
                function sum()
                {
                        var a = document.getElementById("qty").value;
                        var b = document.getElementById("price").value;
             			var d = document.getElementById("tprice");
					
	d.value=a * b ;
						
						
                }
        </script>

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
	  <div style="background-color:#CCFF66; border-top-left-radius:35px; border-bottom-right-radius:35px; width:50%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="">
	        <table width="300px" style=" color:#000000; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:28px;color:#3300CC; font-weight:bold" align="center"> Close Rental Booking Entry </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Order ID </td>
	
    <td>
	
	<select name="select" id="select" onchange="MM_jumpMenu('parent',this,0)">
                  <option>--select--</option>
                  <?php
						include("config.php");
						$q5=mysql_query("select ID from RentalReq where Status<>'Close'");
						while($r=mysql_fetch_assoc($q5))
						{
							echo "<option value=RentalApprove.php?bid=".$r["ID"].">".$r["ID"]."</option>";
						}
						$id=$_REQUEST['bid'];
											
						?>
                </select>	</td>
  </tr>
   <?php $result = mysql_query("SELECT * FROM  RentalReq where ID='$id' ");
			$row1= mysql_fetch_array($result);
		  ?>
  <tr>
    <td>OrderID</td>
    <td><input type="text" name="oid" value="<?php echo $row1["ID"]; ?>" /></td>
  </tr>
  
  <tr>
    <td>Date</td>
    <td><input type="text" name="bid2" value="<?php echo $row1["Date"]; ?>" /></td>
  </tr>
  <tr>
    <td>User Name </td>
    <td><input type="text" name="bid3" value="<?php echo $row1["UserName"]; ?>" />		</td>
  </tr>
 
  <tr>
    <td>Bike ID </td>
    <td><input type="text" name="bid" value="<?php echo $row1["BikeID"]; ?>" /></td>
  </tr>
  <tr>
  
    <td>Company</td>
    <td><input type="text" name="title" value="<?php echo $row1["Company"]; ?>" /></td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input type="text" name="author"  value="<?php echo $row1["Model"]; ?>"  /></td>
  </tr>
  <tr>
    <td>KM</td>
    <td><input type="text" name="p_year"  value="<?php echo $row1["KM"]; ?>"/></td>
  </tr>
  <tr>
    <td>TotalPrice </td>
    <td><input type="text" name="price" id="price" value="<?php echo $row1["TotalPrice"]; ?>" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="text" id="qty" name="qty" value="<?php echo $row1["Status"]; ?>"/> </td>
  </tr>
  <tr>
    <td>Update Status  </td>
    <td><select name="sts" id="sts">
                    
                    
					<option value="Close"> Close </option>
                  </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="Submit" value="Close" style="width:120px; background-color:#003399; color:#FFFFFF"/> 
        &nbsp;&nbsp; <input type="reset" name="Submit2" value="Reset" style="width:120px; background-color:#003399; color:#FFFFFF"/></td>
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

<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$oid=$_POST['oid'];
	$bid=$_POST['bid'];
	$sts=$_POST['sts'];
		
	$result=mysql_query("update RentalReq set Status='$sts' where ID='$oid'");
	
	$result=mysql_query("update Bike set Status='Free' where ID='$bid'");
	
	echo "<script text='text/javascript'>alert('Success');</script>";
	//header("location:AddStudent.php");
}
?>
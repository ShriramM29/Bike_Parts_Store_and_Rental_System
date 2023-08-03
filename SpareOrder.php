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
    <td colspan="2" style="font-size:26px;color:#3300CC; font-weight:bold" align="center"> Spare Order Details </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Order ID </td>
	<?php
					include("config.php");
					$result =mysql_query("Select MAX(ID) as id from SpareOrder");
						  while ($row = mysql_fetch_array($result))
							 {
								$roll = $row["id"] + 1;
							 }
					?>
    <td><input type="text" name="oid" value="<?php echo  $roll ; ?>" /></td>
  </tr>
  <tr>
    <td>User Name  </td>
    <td>
      			<?php 
				session_start();
				$un=$_SESSION['uname'];
				?>
        <input type="text" name="uname" value="<?php echo $un;?>" />    </td>
  </tr>
  <tr>
    <td>Select Spare ID   </td>
    <td>
	
	<select name="select" id="select" onchange="MM_jumpMenu('parent',this,0)">
                  <option>--select--</option>
                  <?php
						include("config.php");
						$q5=mysql_query("select ID from Spare");
						while($r=mysql_fetch_assoc($q5))
						{
							echo "<option value=SpareOrder.php?bid=".$r["ID"].">".$r["ID"]."</option>";
						}
						$id=$_REQUEST['bid'];
											
						?>
                </select>	</td>
  </tr>
  <?php $result = mysql_query("SELECT * FROM  Spare where ID='$id' ");
			$row1= mysql_fetch_array($result);
		  ?>
  <tr>
    <td>Spare ID </td>
    <td><input type="text" name="fid" value="<?php echo $row1["ID"]; ?>" /></td>
  </tr>
  <tr>
  
    <td>Name </td>
    <td><input type="text" name="type" value="<?php echo $row1["Name"]; ?>" /></td>
  </tr>
  <tr>
    <td> Company </td>
    <td><input type="text" name="name"  value="<?php echo $row1["Company"]; ?>"  /></td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input type="text" name="qty"  value="<?php echo $row1["Model"]; ?>"/></td>
  </tr>
  <tr>
    <td>Price </td>
    <td><input type="text" name="price" id="price" value="<?php echo $row1["Price"]; ?>" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Quantity</td>
    <td><input type="text" id="qty" name="uqty" onKeyUp="javascript:sum()"/> </td>
  </tr>
  <tr>
    <td>Total Price </td>
    <td><input type="text" id="tprice"  name="tprice" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Card No </td>
    <td><input type="text" name="cardno" /></td>
  </tr>
  <tr>
    <td>PIN No </td>
    <td><input type="password" name="pinno" /></td>
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
	$dt=date("d-M-y");
	$uname=$_POST['uname'];
	$fid=$_POST['fid'];
	$type=$_POST['type'];
	$name=$_POST['name'];
	$qty=$_POST['qty'];
	$price=$_POST['price'];
	$uqty=$_POST['uqty'];
	$tprice=$_POST['tprice'];
	$cardno=$_POST['cardno'];
	
	$result=mysql_query("insert into SpareOrder value('$oid','$dt','$uname','$fid','$type','$name','$qty','$price','$uqty','$tprice','Pending')");
	echo "<script text='text/javascript'>alert('Spare Order Successfully');</script>";
	//header("location:AddStudent.php");
}
?>
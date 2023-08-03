<?php
include("config.php");
if(isset($_POST['Submit']))
{
  $id=$_POST['id'];
  $type=$_POST['name'];
  $name=$_POST['name1'];
  $qty=$_POST['name2'];
  $price=$_POST['price'];
  $desc=$_POST['desc'];
  $image = 'uploads/noimage.jpg';
  if(isset($_FILES["image"]) && $_FILES["image"]['error'] ==0 ){

    $target_file = 'uploads/spare/'.pathinfo( $_FILES["image"]["name"], PATHINFO_FILENAME).'-'.$id.'.'.pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
    // echo $target_file;die;
    if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
      $image =$target_file;
    }
  }
  $result=mysql_query("insert into Spare value('$id','$type','$name','$qty','$price','$desc','$image')");
  echo "<script text='text/javascript'>alert('Spare Details Successfully Added');
            location.href=\"AddSpare.php\"</script>";
            die;
  //header("location:AddStudent.php");
}
?>
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
	  <div style="background-color:#CCFF66; border-top-left-radius:35px; border-bottom-right-radius:35px; width:50%;">
	    <center>
	      <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
	        <table width="300px" style=" color:#000000; font-size:14px">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" style="font-size:28px;color:#3300CC; font-weight:bold" align="center">New Bike Spare Entry    </td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Bike Spare ID </td>
	
					<?php
					include("config.php");
					$result =mysql_query("Select MAX(ID) as id from Spare");
						  while ($row = mysql_fetch_array($result))
							 {
								$roll = $row["id"] + 1;
							 }
					?>
	
    <td><input type="text" name="id" value="<?php echo  $roll ; ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Name </td>
    <td><input type="text" name="name" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Company  </td>
    <td><input type="text" name="name1" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Model</td>
    <td><input type="text" name="name2" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="text" name="price" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Spare Details </td>
    <td><textarea rows="4" cols="20" name="desc" ></textarea></td>
  </tr>
  <tr>
    <td>Image</td>
    <td><input type="file" name="image"/></td>
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


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Update page</title>
</head>
<body bgcolor="lightgray">
	<center>
	<?php
        include("connection.php");
        $select=$conn->query("SELECT * FROM `stockin_tbl`");
      while ($row=mysqli_fetch_array($select))
       {
      	    $productid=$row['product_id'];
			$prodname=$row['productname'];
			$date=$row['date'];
			$weight=$row['weight'];
      }
      if (isset($_POST['btn']))
       {
      	    $prodi=$_GET['update'];
			$prodnam=$_POST['prodname'];
			$dat=$_POST['dates'];
			$weigh=$_POST['weights'];
			$update=$conn->query("UPDATE `stockin_tbl` SET `productname`='$prodnam',`date`='$dat',`weight`='$weigh' WHERE `product_id`='$prodi'");
			if ($update==true)
			 {
				echo"<script>alert('Product is updated')</script>";
                echo "<script>history.back();</script>";
			}
			else
			{
				echo"<script>alert('Product is not updated')</script>";
                echo "<script>history.back();</script>";
			}
      }

		?>
		<h1 style="position: absolute; left: 400px;top: 20px;">Update Product In Stock</h1>
	<table cellpadding="9px" cellspacing="20px" border="0px" style="position: absolute; left: 400px;top: 120px;">
		
	<form action="" method="POST"><br><br><br>
		<tr>
		<td>Product Id</td>
		<td><input type="text" value="<?php echo "$productid"?>" name="prodid" placeholder="Enter Product Id" style="padding: 10px;"></td>
	</tr>
	<tr>
		<td>Product Name</td>
		<td><input type="text" value="<?php echo "$prodname"?>" name="prodname" placeholder="Enter Productname" style="padding: 10px;"></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" value="<?php echo "$date"?>" name="dates" placeholder="Enter Date" style="padding: 10px;width: 169px;"></td>
	</tr>
	<tr>
		<td>Weight</td>
		<td><input type="text" value="<?php echo "$weight"?>" name="weights" placeholder="Enter Weight" style="padding: 10px;"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btn" value="Update" style="background-color: red;padding: 10px;width: 160px; border-radius: 20px;"></td>
	</tr>
		
	</form>
	</table>
	</center>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin page</title>
	
	<link rel="stylesheet" href="user.css">
</head>
<body bgcolor="lightgray">
	<div class="menu-bar">
	<ul>
		<li class="active"><a href="user.php"><b class="fa fa-home">Home</b></a></li>
		<li><a href="product.php"><b class="fa fa-angellist">Stock</b></a></li>
		<li><a href="view.php"><b class="fa fa-user">Stock Views</b></a></li>
		<li><a href="report.php"><b class="fa fa-unr">Report</b></a></li>
		<li><a href="index.php"><b class="fa fa-unr">Logout</b></a></li>
	</ul>
    </div><br><br><br>
   
<div class="slider">
	
</div>
<div style="background-color:rgb(183, 100, 237);
	width: 400px;
	height: 660px;
	position: absolute;
	top: 63px;">
	
</div>
<center>
	<h1 style="position:absolute; left: 560px;top: 80px ;">Reatrive Data with Database</h1>
	<table cellpadding="12px" cellspacing="8px" bgcolor="white" border="5px"style="position:absolute; top: 120px;left: 560px;border-color: red;">
		<tr>
			<td>PRODUCT ID</td>
			<td>PRODUCT NAME</td>
			<td>DATE</td>
			<td>WEIGHT</td>
			<td colspan="5px">OPERATION</td>
		</tr>
		<?php
		include("connection.php");
		$select=$conn->query("SELECT * FROM `stockin_tbl`");
		while ($row=mysqli_fetch_array($select))
		 {
			$prodid=$row['product_id'];
			$prodname=$row['productname'];
			$date=$row['date'];
			$weight=$row['weight'];

			  echo "<tr>
			      <td>$prodid</td> 
			      <td>$prodname</td> 
			      <td>$date</td> 
			      <td>$weight</td>
			      <td><button style='background-color:rgb(249,11,179);'><a href='update.php? update=$prodid'>Update</a></button><td>
			      <td><button style='background-color:rgb(9,216,36);text-overline:none;'><a href='delete.php? delete=$prodid'>Remove</a></button></td> 
			      <td><button style='background-color:rgb(113,206,234);text-overline:none;color:white;'><a href='stockout.php?'>Stockout</a></button></td>

			  </tr>";
		}


		?>
		
	
</table>
</center>

</body>
</html>
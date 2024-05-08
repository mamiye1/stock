
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
		<li><a href="product.php"><b class="fa fa-angellist">Stock In</b></a></li>
		<li><a href="view.php"><b class="fa fa-user">Stock Views</b></a></li>
		<li><a href="report.php"><b class="fa fa-unr">Report</b></a></li>
		<li><a href="index.php"><b class="fa fa-unr">Logout</b></a></li>
		
	</ul>
    </div><br><br><br>
   
<div class="slider">
	
</div>
<h1 style="position:absolute; top: 80px;left:120px;">Stock In</h1>
	<table cellpadding="8px" cellspacing="8px" bgcolor="lightblue" border="5px" style="position:absolute; top: 120px;left:40px;border-color: red;">
		<tr>
			<td>PRODUCT ID</td>
			<td>PRODUCT NAME</td>
			<td>DATE</td>
			<td>WEIGHT</td>
		</tr>
		<?php
		include("connection.php");
		$select=$conn->query("SELECT * FROM `stockin_tbl`");
		while ($data=mysqli_fetch_array($select))
		 {
			$prodid=$data['product_id'];
			$prodname=$data['productname'];
			$date=$data['date'];
			$weight=$data['weight'];

			  echo "<tr>
			      <td>$prodid</td> 
			      <td>$prodname</td> 
			      <td>$date</td> 
			      <td>$weight</td>
			      </tr>";
			  }
			?>
	</table>

<center>
	<h1 style="position:absolute; left: 560px;top: 80px ;">Stock Out</h1>
	<table cellpadding="8px" cellspacing="8px" bgcolor="lightblue" border="5px" style="position:absolute; top: 120px;left: 560px;border-color: red;">
		<tr height="90px">
			<td colspan="4px"><h1>Report Transaction stockin and stockout</h1></td>
		</tr>
		<tr>
			<td>PRODUCT ID</td>
			<td>PRODUCT NAME</td>
			<td>DATE</td>
			<td>WEIGHT</td>
		</tr>
	<?php
      $select=$conn->query("SELECT * FROM `stockout_tbl`");
      while ($row=mysqli_fetch_array($select))
       {
      	 $id=$row['product_id'];
      	 $prod=$row['productname'];
      	 $dat=$row['date'];
      	 $wei=$row['weight'];
      	 echo "<tr>
                <td>$id</td>
                <td>$prod</td>
                <td>$dat</td>
                <td>$wei</td>
      	 </tr>";
      }

	?>
</table>
</center>
</body>
</html>
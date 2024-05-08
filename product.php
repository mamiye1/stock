
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
	<h1 style="position:absolute;top:200px; left:590px; font-family: sans-serif;nt">Registration Form</h1>
	<table cellpadding="9px" cellspacing="20px" border="0px" style="position: absolute; left: 560px;">
		
	<form action="insertproduct.php" method="POST"><br><br><br><br><br><br><br>
	<tr>
		<td>Product Name</td>
		<td><input type="text" name="prodname" placeholder="Enter Productname" style="padding: 10px;"></td>
	</tr>
	<tr>
		<td>Date</td>
		<td><input type="date" name="dates" placeholder="Enter Date" style="padding: 10px;width: 169px;"></td>
	</tr>
	<tr>
		<td>Weight</td>
		<td><input type="text" name="weights" placeholder="Enter Weight" style="padding: 10px;"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="btn" value="Submit" style="background-color: red;padding: 10px;width: 160px; border-radius: 20px;"></td>
	</tr>
		
	</form>
	</table>
</center>


</body>
</html>
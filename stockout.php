<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stock out page</title>
</head>
<body bgcolor="lightgray">
	<center>
		<h1>Stock Out Form</h1>
		<table cellpadding="9px" cellspacing="20px" border="0px" style="position: absolute; left: 400px;top: 120px;">
		
	<form action="stockinsert.php" method="POST"><br><br><br>
		<tr>
		<td>Product Id</td>
		<td><input type="text" name="prodid" placeholder="Enter Product Id" style="padding: 10px;"></td>
	</tr>
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
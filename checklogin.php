<?php
   include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
      if (isset($_POST['btn']))
       {
       	  $user=$_POST['user'];
          $pass=$_POST['pass'];
      	  $select=$conn->query("SELECT * FROM `user_tbl` WHERE Username='$user' and Password='$pass'") or die("query fail");
      	  while($row=mysqli_fetch_array($select))
      	   {
      	  	   $userd=$row['Username'];
      	  	   $passd=$row['Password'];
      	  	   
      	  }   
            if ($userd==$user and  $passd==$pass)
             {
       	       header("Location:user.php");
           }
           else{
           	    echo "<script>alert('Incorrect pasword or username')</script>";
                echo "<script>history.back();</script>";
           	}
      }
	?>

</body>
</html>
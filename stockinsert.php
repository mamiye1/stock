<?php
 include("connection.php");
 $productid=$_POST['prodid'];
 $productname=$_POST['prodname'];
 $date=$_POST['dates'];
 $weight=$_POST['weights'];
 $select=$conn->query("SELECT * FROM `stockin_tbl`") or die("query fail");
 while ($row=mysqli_fetch_array($select))
  {
 	$id=$row['product_id'];
 	$weihgt=$row['weight'];
 }
 	 $insert2=$conn->query("INSERT INTO `stockout_tbl`(`product_id`, `productname`,`date`, `weight`) VALUES ('$id','$productname','$date','$weight')");
 	 $cost=$weihgt-$weight;
     $update=$conn->query("UPDATE `stockin_tbl` SET `productname`='$productname',`date`='$date',`weight`='$cost' WHERE `product_id`='$productid'");
     if ($update==true)
      {
     	  echo"<script>alert('stock out successfully')</script>";
           echo "<script>history.back();</script>";
     }      
     else{
     	      echo"<script>alert('stock out not successfully')</script>";
           echo "<script>history.back();</script>";
     }
  
?>
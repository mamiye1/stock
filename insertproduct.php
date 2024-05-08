<?php
 include("connection.php");
 $productname=$_POST['prodname'];
 $date=$_POST['dates'];
 $weight=$_POST['weights'];
 $insert=$conn->query("INSERT INTO `product_tbl`(`product_id`, `productname`, `date`, `weight`) VALUES (null,'$productname','$date','$weight')") or die("query fail");
 if ($insert==true)
  {
        $insert2=$conn->query("INSERT INTO `stockin_tbl`(`product_id`, `productname`, `date`, `weight`) VALUES (null,'$productname','$date','$weight')");

        echo"<script>alert('Product is inserted )</script>";
       echo "<script>history.back();</script>";
 }
 else{
 	  echo"<script>alert('Product is not inserted successfully)</script>";
       echo "<script>history.back();</script>";
 }

?>
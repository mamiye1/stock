<?php
  include("connection.php");
  $id=$_GET['delete'];
  $delete=$conn->query("DELETE FROM `stockin_tbl` WHERE product_id='$id'");
  if ($delete==true)
   {
  	     echo"<script>alert('Product is deleted )</script>";
           echo "<script>history.back();</script>";
  }
  else
  {
  	       echo"<script>alert('Product is not deleted )</script>";
           echo "<script>history.back();</script>";
  }
?>
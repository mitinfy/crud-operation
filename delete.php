<?php
require('db.php');
$cid=$_REQUEST['cid'];
$query = "DELETE FROM customer WHERE cid='$cid'"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view2.php"); 
?>
<?php
require('db.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
 $trn_date = date("Y-m-d H:i:s");
    $cid =$_REQUEST['cid'];
    $cname = $_REQUEST['cname'];
    $ph = $_REQUEST['ph'];

    $ins_query="insert into customer ('cid','cname','ph')values('$cid','$cname','$ph')";
    mysqli_query($con,$ins_query) or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view2.php'>View Inserted Record</a>";
}
?>
<html>
<head>
<body>
<div class="form">
| <a href="view2.php">View Records</a> 
<div>
<h1>Insert New Record</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="cid" placeholder="Enter Code" required /></p>
<p><input type="text" name="cname" placeholder="Enter Name" required /></p>
<p><input type="text" name="ph" placeholder="Enter Phone" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
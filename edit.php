<?php
require('db.php');

$cid=$_REQUEST['cid'];
$query = "SELECT * from customer where cid='".$cid."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form">
| <a href="insert.php">Insert New Record</a> 
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['cid'];
$trn_date = date("Y-m-d H:i:s");
$cid =$_REQUEST['cid'];
$cname =$_REQUEST['cname'];
$ph =$_REQUEST['ph'];
$update="update customer set cid='".$cid."', cname='".$cname."',
ph='".$ph."' where cid='".$cid."'";
mysqli_query($con, $update) or die(mysqli_error());
$status = "Record Updated Successfully. </br></br>
<a href='view2.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['cid'];?>" />

<p><input type="text" name="cid" id="tx" placeholder="Enter Code" 
required value="<?php echo $row['cid'];?>" /></p>

<p><input type="text" name="cname" id="tx" placeholder="Enter Name" 
required value="<?php echo $row['cname'];?>" /></p>
<p><input type="text" name="ph" id="tx" placeholder="ph" 
required value="<?php echo $row['ph'];?>" /></p>
<p><input name="submit" type="submit" value="Update" id="bt"  /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
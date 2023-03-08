<?php
require('db.php');
?>
<html>
<head>
<title>View Records</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="form">
| <a href="insert.php">Insert New Record</a> 
<h2 id="hd" align=center>View Records</h2>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
<th><strong>Code</strong></th>
<th><strong>Name</strong></th>
<th><strong>Phone</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from customer ORDER BY cid desc;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<td align="center"><?php echo $row["cid"]; ?></td>
<td align="center"><?php echo $row["cname"]; ?></td>
<td align="center"><?php echo $row["ph"]; ?></td>
<td align="center">
<a href="edit.php?cid=<?php echo $row["cid"]; ?>"><img src="edit.png" width=30 height=20></a>
</td>
<td align="center">
<a href="delete.php?cid=<?php echo $row["cid"]; ?>" onclick="return confirm('sure to delete?!');"><img src="del.png" width=30 height=20></a>
</td>
</tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
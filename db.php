<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "college_db";
$con = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);
?>
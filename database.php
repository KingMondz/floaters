<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "magneta";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
	die("Database connention failed");
	}
	//else{
	//	die("connention success!");
	//}
?>
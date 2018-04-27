<?php
	$servername= "localhost";
	$username=	"root";
	$password = "";
	$dbname = "onlineshoppingstore";
	
	$dbconnect = mysqli_connect($servername,$username,$password,$dbname);
	
	if ($dbconnect->connect_error) {
		die("Connection failed: " . mysqli_error());
	}
?>
	
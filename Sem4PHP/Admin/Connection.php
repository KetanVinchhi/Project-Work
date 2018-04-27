<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlineshoppingstore";

$connection = mysqli_connect($servername,$username,$password,$dbname);
if ($connection->connect_error) {
		die("Connection failed: " . mysqli_error());
	}

?>
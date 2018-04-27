<?php
session_start();
require_once("DatabaseConn.php");
if (isset($_POST["signup_submit"])) {

	$f_name = $_POST["first_name"];
	$l_name = $_POST["last_name"];
	$email = $_POST['user_email'];
	$password = $_POST['password'];
	$repassword = $_POST['re_enter_pass'];
	$mobile = $_POST['mobile_number'];
	$address1 = $_POST['address_line_one'];
	$address2 = $_POST['address_line_two'];
	$city = $_POST['users_city'];
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) || empty($address1) || empty($address2)){
		
		echo "
				 <div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
					<strong>Warning !</strong> Please Fill All Fields...
				 </div>";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>this $f_name is not valid..!</strong>
			</div>";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<strong>this $l_name is not valid..!</strong>
			</div>";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 9 ){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9 ){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning alert-dismissible'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT UserID FROM users WHERE UserEmail = '$email' LIMIT 1" ;
	$check_query = mysqli_query($dbconnect,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger alert-dismissible'>
  				  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `users` (`UserID`, `UserEmail`, `UserPassword`, `UserFirstName`, 
		`UserLastName`, `UserCity`, `UserPhone`, `UserAddress`, `UserAddress2`) VALUES (NULL, '$email', '$password', '$f_name', 
		'$l_name', '$city', '$mobile', '$address1', '$address2')";
		
		$run_query = mysqli_query($dbconnect,$sql);
		
		$_SESSION["userid"] = mysqli_insert_id($dbconnect);
		$_SESSION["username"] = $f_name;
		
		$ip_add = getenv("REMOTE_ADDR");
		
		$sql = "UPDATE cart SET user_id = '$_SESSION[userid]' WHERE ip_address='$ip_add' AND user_id = -1";
		
		if(mysqli_query($dbconnect,$sql)){
			echo "register_success";
			header("location:http://localhost/sem4PHP/");
			exit();
		}
	}
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<body>

</body>
</html>
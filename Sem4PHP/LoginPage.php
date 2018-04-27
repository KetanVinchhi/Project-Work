<?php
	session_start();
	require_once("header.php"); 
	
	if (isset($_SESSION["userid"])) {
		header("location:profile.php");
	}
	
	if (isset($_POST["login_user_with_product"])) {
		
		$product_list = $_POST["product_id"];
		$json_e = json_encode($product_list);
		setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Login - Online Bandhani Store</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div style="width:20%">
	<form class="w3-container" method="post" action="Login.php" id="login">
			<div class="w3-container">
    		  <h2>Login</h2>
    		</div>
			
				<label>User Name</label>
				<input class="w3-input" type="email" name="email_address"  />
			
				<label>Password</label>
				<input class="w3-input" type="password" name="password"  />
			
				<input type="submit" name="login_btn"  value="Login" align="middle"/><br />
				<a href="RegistrationForm.php?register=1">Create a new account?</a>	
	</form>	
</div>
</body>
</html>

<?php
        session_start();
		//$_SESSION['username'] = $_POST['userid'];
		//$_SESSION['password'] = $_POST['password'];
		
		
		if(isset($_POST['login_btn'])){
			if($_POST['user_name'] == "ketan" && $_POST['password'] == "123")
			{
					$_SESSION['username'] = $_POST['username'];
					header("location:http://localhost/Sem4PHP/Admin/Products.php");
			}
			else{
				echo "Username or Password mismatch.."; }
		}
		
       // echo "$name = $_SESSION['$username']";
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Shopping Store Admin Panel</title>
</head>

<body>
	
	
	<form action="" method="post" id="frmLogin">
		
				<label for="login">Username</label>
				<input name="user_name" type="text" class="input-field">
			
				<label for="password">Password</label></div>
				<input name="password" type="password" class="input-field"> 
			
				<input type="submit" name="login_btn" value="Login" class="form-submit-button"> 
	</form>


</body>
</html>

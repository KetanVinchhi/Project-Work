<?php
if (isset($_GET["register"])) {

?>

<html>
<head>
	<link rel="stylesheet" href="webcss/design.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
    font-family: Arial;
    color: #333333;
}
p{
	color:#FFFFFF;
	font-family:Arial, Helvetica, sans-serif;
	font-size:24px;
	margin-left:50%;
}
input[type=text], select,input[type=password]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  font-size:16px;
  padding: 12px 20px;
  width:100%;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.split {
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
}

.left {
    left: 0;
    background-color:#FFFFFF;
}

.right {
    right: 0;
    background-color:#FFFFFF;
}

.centered {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}
</style>
	

</head>
   
<body>
	<?php require_once("header.php"); ?>
<div class="split left">
	<p>Customer SignUP Form</p>
 	<div class="centered">
  	
   	<form method="post" id="signin_form" action="Registration.php">
		<table>	
			<tr>
				<td>First Name</td>
				<td><input type="text" name="first_name" /></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="last_name"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td>Re-enter Password</td>
				<td><input type="password" name="re_enter_pass"/></td>
			</tr>		
 		</table>
 
  </div>
</div>

<div class="split right">
  <div class="centered">
  	
			<table >
			<tr>
				<td>Address Line 1</td>
				<td><input type="text" name="address_line_one" /></td>
			</tr>
			<tr>
				<td>Address Line 2</td>
				<td><input type="text" name="address_line_two" /></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="user_email" /></td>
			</tr>
			<tr>
				<td>Mobile</td>
				<td><input type="text" name="mobile_number" /></td>
			</tr>
			<tr>
				<td>City</td>
				<td><select name="users_city">
					<option value="-">-</option>
					<option value="Jetpur">Jetpur</option>
					<option value="Jamnagar">Jamnagar</option>
					<option value="Rajkot">Rajkot</option>
					<option value="Ahmedabad">Ahmedabad</option>
				</select>
				</td>
			</tr>
			</table>
		</form>
		
		<Button class="w3-button" type="submit" form="signin_form"  name="signup_submit" value="SignUP">SignUP</Button>
  </div>
</div>

</body>
</html>
<?php  } ?>
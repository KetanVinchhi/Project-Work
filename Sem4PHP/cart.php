<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Cart Details</title>
	
	<link rel="stylesheet" href="webcss/design.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>


<body>
<?php
	session_start();
	$ip_add = getenv("REMOTE_ADDR");
 	require_once("header.php");
	require_once("DatabaseConn.php");
	
	//echo $_POST['pro_sku'];
	
	/*$sql = "SELECT * FROM cart where product_sku ='".$_POST['pro_sku']."' ";
	$run_query = $dbconnect->query($sql);
	print_r($run_query);*/
	
	
	if(isset($_POST["add_to_cart"])){
		
		$pr_sku = $_POST["pro_sku"];
		
		if(isset($_SESSION["userid"])){
			$userid = $_SESSION["userid"];
			
			$cart_sql = "SELECT a.ProductID,a.ProductPrice,a.ProductImage,b.id,b.quantity FROM products a,cart b WHERE a.ProductSKU=b.product_sku AND b.user_id='$_SESSION[userid]'";
			
			$cart_result = $dbconnect->query($cart_sql);
			if($cart_result->num_rows > 0)
			{?>
				<form method="post" action="">
					<table cellpadding="2" cellspacing="2">
						<th>Action</th>
						<th>Product Image</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Product Price</th>
			<?php	
				while($row = $cart_result->fetch_assoc())
				{
					$product_id = $row['ProductID'] ;
					$product_image = $row['ProductImage'];
					$product_name = $row['ProductName'];
					$quatity = $row['quantity'];
					$product_sku = $row['ProductSKU'];
					$procut_price = $row['ProductPrice'];
				?>
					<center>
						<tr><td><button class="w3-button w3-circle w3-teal">+</button>
							<button><i class="fa fa-trash"></i></button></td>
							<td><?php echo "<img src='images/$product_image'  alt='N/A' width='400' height='700' />";?></td>
							<td><input type="text" name="pro_name" value="<?php echo $row['ProductName']; ?>" readonly="readonly"/></td>
							<td><input type="text" name="quantity"/></td>
							<td><input type="text" name="pro_price" value="<?php echo $row['ProductPrice']; ?>" readonly="readonly"/></td>							
						</tr>
					</table>
				<input class="w3-button" type="submit" name="paypal_submit" value="Ready to Checkout"/>
				</form>
					</center>
				<?php
				}
			}
			
			/*cart......
			if($count > 0){
				echo "<b>Product is already added into the cart Continue Shopping..!</b>";
			} else {
			$sql = "INSERT INTO `cart`(`product_sku`, `ip_address`, `user_id`, `quantity`) 
			VALUES ('$pr_sku','$ip_add','$userid','1')";
			if(mysqli_query($dbconnect,$sql)){
				echo "<b>Product is Added..!</b>";
			}	*/
			
		}
	}
 ?>
  </center>
</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Georgette - Online Bandhni Store</title>
	<link rel="stylesheet" href="webcss/cholis_css.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<?php
		session_start();
		require_once("header.php"); 
	?>
		<div class="logo">
			<img src="images/Bandhani.jpg"  />
		</div>
	<?php
		require_once("DatabaseConn.php");
			
			//$dbconnect = mysqli_connect($servername,$username,$password,$dbname);
		
		$sql_query = "select ProductID,ProductSKU,ProductShortDesc,ProductImage from products where ProductCategoryID = 1";

		$resultData = $dbconnect->query($sql_query);
	
		if($resultData->num_rows > 0)
		{
		
		while($row = $resultData->fetch_assoc())
		{
			$product_id = $row['ProductID'] ;
			$product_sku = $row['ProductSKU'];
			$product_short_desc = $row['ProductShortDesc'];
			$product_image = $row['ProductImage'];
			
		?>
				<div class="wrapper">
				<div class="main_div">
						<div class="image_portion">
						<form method="post" action="DetailedProduct.php"  target="_blank">
							<input type="hidden" name="pro_sku" value="<?php echo $row['ProductSKU']; ?>" > 
						<?php	
						//$_POST['pro_id'] = $product_id;
						
						echo "<img id='myImg'  src='images/$product_image'  alt='N/A'  />"; ?>
							
							<div class="image-container">
								<p><?php echo $row["ProductShortDesc"];  ?></p>
								
								<button class="w3-button" id="buy_now" style="font-size:20px; ">BUY NOW
								</button>
						</form>	
								<form method="post" action="cart.php"> 
									<input type="hidden" name="pro_sku" value="<?php echo $row['ProductSKU']; ?>" >
								<button class="w3-button" id="add_to_cart" style="font-size:20px; ">Add to Cart<i class="fa fa-shopping-cart"></i>
								</button>
								</form>
								
							</div>
						
						</div>
				</div>
				</div>
	<?php }
			}
	?>
</body>
</html>

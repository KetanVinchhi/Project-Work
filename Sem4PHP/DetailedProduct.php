
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Product Details-Online Bandhani Store</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<?php
		session_start();
?>
<style>
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
    left:0;
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


	img
	{
		object-fit:fill;
		 /*fill,contain,cover,none,scale-down */
	}
	/* Add Animation */
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/*label
{
	width:100;
	max-width:100%;
	color:#FFFFFF;
	background-color:#999999;
}*/
label {
    display:inline;
	background-color:#999999;
    float:left;
	height:40px;
    width: 100%;
	box-shadow: 0px 0px 10px #888888;
}
</style>
</head>

<body>

<?php
	require_once("header.php");
	require_once("DatabaseConn.php");
	
		$_POST['pro_sku'];
		$sql_query = "select ProductID,ProductName,ProductSKU,ProductPrice,ProductShortDesc,ProductImage,ProductLongDesc,ProductStock,ProductLocation from products where ProductSKU ='".$_POST['pro_sku']."' ";
		
		$resultData = $dbconnect->query($sql_query);
		
		if($resultData->num_rows > 0){
			while($row = $resultData->fetch_assoc())
			{
				$product_id = $row['ProductID'] ;
				$product_name = $row['ProductName'];
				$product_sku = $row['ProductSKU'];
				$product_short_desc = $row['ProductShortDesc'];
				$procut_price = $row['ProductPrice'];
				$product_image = $row['ProductImage'];
				$product_long_desc = $row['ProductLongDesc'];
				$product_stock = $row['ProductStock'];
				$product_location = $row['ProductLocation'];
?>

	<div class="split left">
		<div class="centerd">
		<?php echo "<img id='myImg' src='images/$product_image'  alt='N/A' width='400' height='700' />";?>
		</div>
	</div>

	<div class="split right">
		<div class="wrap">
		<div class="product_details">
			<p style="font-size:18px"><?php echo $product_name; ?> </p><br />
			<p style="font-size:18px"><?php echo strtoupper($product_short_desc); ?> </p><br />
			
			<div class="labels"> 
				<label>Special Price</label>
			</div>
			
			<h2 style="font-size:18px"><?php echo "INR ".$procut_price; ?> </h2><br />
			<label>Product Descsription</label>
			<p style="font-size:18px"><?php echo $product_long_desc; ?> </p><br />
			<label>Product Stock </label>
				<p style="font-size:18px"><?php echo $product_stock; ?> </p><br />
				<p style="font-size:18px"><?php echo $product_location; ?> </p><br />
				<?php 
					if($product_stock ==0)
					{
						echo "<button class='w3-button' disabled='disabled' name='readyToPay'>READY TO PAY</button>";
						echo "Product Is Not Available..\n Please See Our Another Products...";
					}
					else
					{?>
						<form class="paypal" action="payments.php" method="post" id="paypal_form" target="_blank">
							<input type="hidden" name="cmd" value="_xclick" />
							<input type="hidden" name="no_note" value="1" />
							<input type="hidden" name="lc" value="IN" />
							<input type="hidden" name="currency_code" value="INR" />
							<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
							<input type="hidden" name="first_name" value="Ketan" />
							<input type="hidden" name="last_name" value="Vinchhi" />
							<input type="hidden" name="payer_email" value="jeet-buyer@hotmail.co.in" />
							<input type="hidden" name="item_number" value="<?php $product_sku ?>" / >
							<input type="submit" name="submit" value="Submit Payment"/>
						</form>
						
				<?php
				//echo "<button class='w3-button'  name='readyToPay'>READY TO PAY</button>";	
				}
				?>
				
			
			
		</div>
	</div>
	</div>
	<?php  } } ?>

</body>
</html>

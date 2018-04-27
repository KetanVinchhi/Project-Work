<?php
	require_once("DatabaseConn.php");
	if(isset($_POST["getProduct"])){
	
	$product_query = "SELECT * FROM products";
	$run_query = mysqli_query($con,$product_query);
	if(mysqli_num_rows($run_query) > 0){
		while($row = mysqli_fetch_array($run_query)){
			$pro_id    = $row['product_id'];
			$pro_cat   = $row['product_cat'];
			$pro_brand = $row['product_brand'];
			$pro_title = $row['product_title'];
			$pro_price = $row['product_price'];
			$pro_image = $row['product_image'];
			echo "
				<div class='col-md-4'>
							<div class='panel panel-info'>
								<div class='panel-heading'>$pro_title</div>
								<div class='panel-body'>
									<img src='product_images/$pro_image' style='width:160px; height:250px;'/>
								</div>
								<div class='panel-heading'>$.$pro_price.00
									<button pid='$pro_id' style='float:right;' id='product' class='btn btn-danger btn-xs'>AddToCart</button>
								</div>
							</div>
						</div>	
			";
		}
	}
}
	
	$sql = "SELECT * FROM cart";
	$run_query = $dbconnect->query($sql);
	print_r($run_query);
	
	
	if(isset($_POST["add_to_cart"])){
		
		$pr_id = $_POST["pro_id"];
		
		if(isset($_SESSION["userid"])){

			$userid = $_SESSION["userid"];
	
			$sql = "SELECT * FROM cart WHERE product_id = '$pr_id' AND user_id = '$userid'";
			$run_query = mysqli_query($dbconnect,$sql);
			$count = mysqli_num_rows($run_query);
			
			if($count > 0){
				echo "<b>Product is alreay added to the Cart</b>";
			}
			else{
				$sql = "INSERT INTO `cart`(`product_id`, `ip_address`, `user_id`, `quantity`) VALUES ('$pr_id','$ip_add','$userid','1')";
				if(mysqli_query($dbconnect,$sql)){
					echo "Product is Added..";
				}
			}
		}	
		else{
			$sql = "SELECT id FROM cart WHERE ip_address = '$ip_add' AND product_id = '$pr_id' AND user_id = -1";
			$query = mysqli_query($dbconnect,$sql);
			if (mysqli_num_rows($query) > 0) {
				echo "<b>Product is already added into the cart Continue Shopping..!</b>";
				exit();
			}
			$sql = "INSERT INTO `cart`(`product_id`, `ip_address`, `user_id`, `quantity`) 
			VALUES ('$pr_id','$ip_add','-1','1')";
			if (mysqli_query($dbconnect,$sql)) {
				echo "<b>Your product is Added Successfully..!</b>";
				exit();
			}
		}
	}
		
		
	//Count User cart item
	if (isset($_POST["count_item"])) {
	//When user is logged in then we will count number of item in cart by using user session id
	if (isset($_SESSION["userid"])) {
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE user_id = $_SESSION[userid]";
	}else{
		//When user is not logged in then we will count number of item in cart by using users unique ip address
		$sql = "SELECT COUNT(*) AS count_item FROM cart WHERE ip_address = '$ip_add' AND user_id < 0";
	}
	
	$query = mysqli_query($dbconnect,$sql);
	$row = mysqli_fetch_array($query);
	echo $row["count_item"];
	exit();
}
		
?>
<style>
#p{
	font-size:14px;
	color:#999999;

}
</style>
<?php
require_once("Connection.php");

		
	if(isset($_POST['InsertProduct'])){
		 
		 $productId = $_POST['product_id'];
		 $productSku = $_POST['product_sku'];
		 $productName = $_POST['product_name'];
		 $productPrice = $_POST['product_price'];
		 $productWeight = $_POST['product_weight'];
		 $productCartDesc = $_POST['product_cart_desc'];
		 $productShortDesc = $_POST['product_short_desc'];
		 $productLongDesc = $_POST['product_long_desc'];
		 $productImage = $_POST['product_image'];
		 $productCategoryId = $_POST['product_category_id'];
		 $productStock = $_POST['product_stock'];
		 $productLive = $_POST['product_live'];
		 $productUnlimited = $_POST['product_unlimited'];
		 $productLocation = $_POST['product_location'];
		
		
		$product_insert_q =  "insert into products (ProductID,ProductSKU,ProductName,ProductPrice,ProductWeight,ProductCartDesc,ProductShortDesc,ProductLongDesc,ProductImage,ProductCategoryID,ProductStock,ProductLive,ProductUnlimited,ProductLocation) values ( '$productId','$productSku','$productName','$productPrice','$productWeight','$productCartDesc','$productShortDesc','$productLongDesc','$productImage','$productCategoryId','$productStock','$productLive','$productUnlimited','$productLocation')";
	
	
		if(mysqli_query($connection,$product_insert_q)) /*($connection->query($product_insert_q) === TRUE)*/{
			header('Location:http://localhost/sem4PHP/Admin/Products.php');
		} else {
			echo "Error: " . $product_insert_q . "<br>" . $connection->error;
		}
	}


?>
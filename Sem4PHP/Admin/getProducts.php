<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

</head>

<body>
<?php
require_once("Connection.php");
$p = intval($_GET['q']);

$sql = "select * from Products where ProductCategoryID = '".$p."'";
$records = $connection->query($sql);
if($records->num_rows > 0){
?>

<table border="2" class="w3-table">
				<tr>
					<th>Product ID</th>
					<th>Product SKU</th>
					<th>Product Name</th>
					<th>Product Price</th>
					<th>Product Weight</th>
					<th>Product Cart Desc</th>
					<th>Product Short Desc</th>
					<th>Product Long Desc</th>
					<!--<th>Product Image</th>-->
					<th>Product Category Id</th>
					<th>Product Stock</th>
					<th>Product Live</th>
					<th>Product Unlimited</th>
					<th>Product Location</th>
				</tr>
	<?php
while($row1 = $records->fetch_assoc())

/* $table_data[]= (array('ProductID' => $row["ProductID"], 'ProductSKU' => $row["ProductSKU"], 'item_desc' => $row["item_desc"], 'quantity' => $row["quantity"], 'price' => $row["price"]));*/


//$product_image = $row1['ProductImage'];
{?>
				<tr>
						<td><?php echo $row1['ProductID']; ?></td>
						<td><?php echo $row1['ProductSKU']; ?></td>
						<td><?php echo $row1['ProductName']; ?></td>
						<td><?php echo $row1['ProductPrice']; ?></td>
						<td><?php echo $row1['ProductWeight']; ?></td>
						<td><?php echo $row1['ProductCartDesc']; ?></td>
						<td><?php echo $row1['ProductShortDesc']; ?></td>
						<td><?php echo $row1['ProductLongDesc']; ?></td>
						<!--<td><?php //echo "<img src='../images/$product_image' width='150px'/> "?></td>-->
						<td><?php echo $row1['ProductCategoryID']; ?></td>
						<td><?php echo $row1['ProductStock']; ?></td>
						<td><?php echo $row1['ProductLive']; ?></td>
						<td><?php echo $row1['ProductUnlimited']; ?></td>
						<td><?php echo $row1['ProductLocation']; ?></td>
					</tr>
		</table>
	<?php		}
	}
?>
</body>
</html>

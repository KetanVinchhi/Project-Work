<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<title>Untitled Document</title>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: auto;
    border: 1px solid #ccc;
	margin-left:15%;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
	margin-left:15%;
    border: 1px solid #ccc;
    border-top: none;
}
</style>


</head>

<body>
<script>
	function openTab(evt, cityName) {
   		var i, tabcontent, tablinks;
   		tabcontent = document.getElementsByClassName("tabcontent");
   
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
	tablinks = document.getElementsByClassName("tablinks");
    
	for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
	<?php require_once("dashboard.php");?>
	
	<div class="tab">
	  <button class="tablinks" onclick="openTab(event, 'Add Product')">Add Product</button>
	  <button class="tablinks" onclick="openTab(event, 'Display Prodcuts')">Display Prodcuts</button>
	  <button class="tablinks" onclick="openTab(event, 'Search Products')">Search Products</button>
	</div>

	<div id="Add Product" class="tabcontent">
	  <h3>Add Products</h3>
	  <form method="post" action="ProductInsert.php" >
	  	<table cellspacing="5">
	  		<tr>
				<td>Product ID</td>
				<td><input class="w3-input" type="text" name="product_id" required="true" /></td>
			</tr>
			<tr>
				<td>Product SKU</td>
				<td><input class="w3-input" type="text" name="product_sku" placeholder="000-0001"/></td>
			</tr>
			<tr>	
				<td>Product Name</td>
				<td><input class="w3-input" type="text" name="product_name" /></td>
			</tr>
			<tr>	
				<td>Product Price</td>
				<td><input class="w3-input" type="text" name="product_price" placeholder="Rupees"/></td>
			</tr>
			<tr>	
				<td>Product Weight</td>
				<td><input class="w3-input" type="text" name="product_weight" /></td>
			</tr>
			<tr>	1
				<td>Product Cart Description</td>
				<td><input class="w3-input" type="text" name="product_cart_desc" /></td>
			</tr>
			<tr>	
				<td>Product Short Description</td>
				<td><input class="w3-input" type="text" name="product_short_desc" /></td>
			</tr>
			<tr>	
				<td>Product Long Description</td>
				<td><input class="w3-input" type="text" name="product_long_desc" /></td>
			</tr>
			<tr>	
				<td>Product Image</td>
				<td><input  type="file" name="product_image" /></td>
			</tr>
			<tr>	
				<td>Product Category Id</td>
				<td><input class="w3-radio" type="radio" name="product_category_id" value="1" />
					<label>Georgette</label>
					<input class="w3-radio" type="radio" name="product_category_id" value="2" />
					<label>Crepe</label>
					<input class="w3-radio" type="radio" name="product_category_id" value="3" />
					<label>Bandhani Dresses</label>
					<input class="w3-radio" type="radio" name="product_category_id" value="4" />
					<label>Mens Safa</label>
					<input class="w3-radio" type="radio" name="product_category_id" value="5" />
					<label>Women's Bandhani Kurti</label>
					<input class="w3-radio" type="radio" name="product_category_id" value="6" />
					<label>Men's Bandhani Kurta</label>
				</td>
			</tr>
			<tr>	
				<td>Product Stock</td>
				<td><input class="w3-input" type="text" name="product_stock" /></td>
			</tr>
			<tr>	
				<td>Product Live</td>
				<td><input class="w3-input" type="text" name="product_live" /></td>
			</tr>
			<tr>	
				<td>Product Unlimited</td>
				<td><input class="w3-input" type="text" name="product_unlimited" /></td>
			</tr>
			<tr>	
				<td>Product Location</td>
				<td><input class="w3-input" type="text" name="product_location" /></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input class=""  align="absmiddle" type="submit" name="InsertProduct"value="Insert Product" /></td>
			</tr>
			
	  	</table>
	  </form>	
	</div>
		
	
	
	
	<div id="Display Prodcuts" class="tabcontent">
	  <h3>Products Data</h3>
	
	<!-- The form -->
	<input type="text" placeholder="Search.." name="searchp">
	
	
	<?php
		
		require_once("Connection.php");
		/*$connection = new mysqli($servername, $username, $password, $dbname);
		
		if($connection->connect_error){
			die("Connection failed: " . $conn->connect_error);
		} 
		*/
		$display_records = "select * from products";
		$products_data = $connection->query($display_records); 
		
		if ($products_data->num_rows > 0) {
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
					<th>Product Image</th>
					<th>Product Category Id</th>
					<th>Product Stock</th>
					<th>Product Live</th>
					<th>Product Unlimited</th>
					<th>Product Location</th>
				</tr>
			<?php
			while($row = $products_data->fetch_assoc()) {
			
				$product_image = $row['ProductImage'];
				//echo "id: " . $row["ProductID"]. " - Name: " . $row["ProductName"]. " " . $row["ProductPrice"]. "<br>";
			?>	
					<tr>
						<td><?php echo $row['ProductID']; ?></td>
						<td><?php echo $row['ProductSKU']; ?></td>
						<td><?php echo $row['ProductName']; ?></td>
						<td><?php echo $row['ProductPrice']; ?></td>
						<td><?php echo $row['ProductWeight']; ?></td>
						<td><?php echo $row['ProductCartDesc']; ?></td>
						<td><?php echo $row['ProductShortDesc']; ?></td>
						<td><?php echo $row['ProductLongDesc']; ?></td>
						<td><?php echo "<img src='../images/$product_image' width='150px'/> "?></td>
						<td><?php echo $row['ProductCategoryID']; ?></td>
						<td><?php echo $row['ProductStock']; ?></td>
						<td><?php echo $row['ProductLive']; ?></td>
						<td><?php echo $row['ProductUnlimited']; ?></td>
						<td><?php echo $row['ProductLocation']; ?></td>
					</tr>
				
			<?php
			}
		}
		$connection->close(); ?>
		</table>

	</div>
	<script>
	function showProducts(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getProducts.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
	<div id="Search Products" class="tabcontent">
	  <h3></h3>
	  <p>Search the product...</p>
	  <input type="text" placeholder="Search.." name="products" onkeyup="showProducts(this.value)" name="search">
	 
	  
	 <!--<form>
		<select class="w3-dropdown" name="products" onchange="showProducts(this.value)">
		  <option>Select Product Category:</option>
		  <option value="1">Georegette</option>
		  <option value="2">Crepe</option>
		  <option value="3">Bandhani Dresses</option>
		  <option value="4">Mens Safa</option>
		  <option value="5">Women's Bandhani Kurti</option>
		  <option value="6">Men's Bandhani Kurta </option>
		  <option value="7">Bandhani Dupatta</option>
		  </select>
		</form>-->
	 <div id="txtHint"><b>Products will be listed here...</b></div>
	  
	</div>
	
</body>
</html>

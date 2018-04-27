<?php
session_start();
if(!isset($_SESSION["userid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
	<title>Project Website</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="webcss/design.css" type="text/css" media="all" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
h2 {
   width: 100%; 
   text-align: center; 
   border-bottom: 1px solid #000; 
   line-height: 0.1em;
   margin: 10px 0 20px; 
} 

h2 span { 
    background:#fff; 
    padding:0 10px; 
}

</style>
</head>

<body>
	<!--Header Begin -->
	
		<div class="navbar">
  <a href="index.php">HOME</a>
  
	  <div class="dropdown">
		<button class="dropbtn">MEN 
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		  <a href="#">Bandhani Kurta</a>
		  
		  <a href="safa.php">Bandhani Safa</a>
		</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">WOMEN
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		  <a href="#">Bandhani Kurti</a>
		  <a href="BandhaniDupatta.php">Bandhani Dupatta</a>
		  <a href="#">Bandhani Dresses</a>
		  <a href="#">Bandhani Sarees</a>
		  <a href="cholis.php">Cholis</a>
		</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">SHOP BY FABRIC 
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		  <a href="#">Crepe Sarees</a>
		  <a href="Georgette.php">Georgtte Sarees</a>
		  <a href="#">Silk Sarees</a>
		</div>
	  </div> 
	  
	  <div class="dropdown">
		<button class="dropbtn">COMPANY  
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
		  <a href="about.php">ABOUT US</a>
		  <a href="#">CONTACT US</a>
		</div>
	  </div> 
	  
		<div class="right_content">
			<a href="cart.php" class="fa fa-shopping-cart"><span class="badge"> 0</span></a> 
	
			<div class="dropdown">
				<button class="dropbtn"><?php echo "Hi,".$_SESSION["username"]; ?> 
				</button>
				<div class="dropdown-content">
				  <a href="#customer_order">Orders</a>
				  <a href="logout.php">Logout</a>
				</div>
	 		 </div> 	
		</div>
</div>
		
		
	<!--Header Over -->
	<div class="wrap">
		<h2><span>Mens Safa</span></h2>
		<img src="images/SAFA_1.jpg" />
		<img src="images/SAFA_2.jpg" />
		<img src="images/SAFA_6.jpg"/>
	<!--	<button onclick="myFunction()">Try it</button>	-->
	</div>
	
	<div class="wrap" align="center">
		<h2><span>Bandhani Sarees</span></h2>
		<img src="images/BANDHANI_03.jpg" />
		<img src="images/BANDHANI_02.jpg"/>
		<img src="images/BANDHANI_04.jpg" />
	</div>
	
	<div class="wrap" align="right">
		<h2><span>Bandhani Dresses</span></h2>
		<img src="images/BANDHANI_D01.jpg" />
		<img id="hor_img" src="images/BANDHANI_D02.jpg" />
	</div>
	
	<div class="wrap" align="right">
		<h2><span>Bandhani Dupattas</span></h2>
		<div class="wrap2">
			<img src="images/BANDHANI_DUPATTA_01.jpg" />		
		</div>
			<img src="images/BANDHANI_DUPATTA_02.jpg"/>
	</div>
	<div>
</body>
</html>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

		<link rel="stylesheet" href="webcss/design.css" type="text/css" media="all" />
		<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
		<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
		<!--<script src="main.js"></script>-->
</head>

<body>

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
			<!--<li><a href="#" id="cart"><i class="fa fa-shopping-cart"></i> Cart <span class="badge">3</span></a></li>-->
			<a href="cart.php" class="fa fa-shopping-cart"><span class="badge"> 0</span></a> 
			<?php
				
				if(isset($_SESSION["userid"])){
				?>
					 <div class="dropdown">
						<button class="dropbtn"><?php echo "Hi,".$_SESSION["username"]; ?>  
						</button>
						<div class="dropdown-content">
						  <a href="#customer_order">Orders</a>
						  <a href="logout.php">Logout</a>
						</div>
	 		 		</div> 		
			<?php
				}
				else{
					echo "<a href='LoginPage.php'>LOGIN</a>";
				}
			?>
			
		</div>
</div>
	
</body>
</html>

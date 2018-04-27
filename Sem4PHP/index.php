<?php
session_start();
if(isset($_SESSION["userid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />-->
	<title>Project Website</title>
	<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.hr-text {
  color: black;
  text-align: center;
  height: 1.5em;

}
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
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<body>
	<!--Header Begin -->
		<?php require_once("header.php"); ?>
		
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
	
	<div class="wrap">
		<h2><span>Bandhani Dupattas</span></h2>
		<div class="wrap2">
			<img id="myImg" src="images/BANDHANI_DUPATTA_02.jpg" alt="N/A" />	
			<!-- The Modal -->
			<div id="myModal" class="modal">
			  <span class="close">×</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>
			
		</div>
	</div>
	<div>
		<?php require_once("footer.php"); ?>
	</div>
</body>
</html>

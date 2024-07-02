<?php

	session_start();
	require 'config.php';
	
	if(!empty($_SESSION["id"])){
		
		$id = $_SESSION["id"];
		$result = mysqli_query($conn,"SELECT * FROM customer WHERE id ='$id'");
	}

?>


<!DOCTYPE html>

<html>

	<head>
	
		<title>AURORA Wedding Planning</title>
		<link rel="stylesheet" type="text/css" href="P_styles/style.css"/>
		<link rel="stylesheet" type="text/css" href="Main_styles/style.css"/>
	
	
	</head>
	
	<body>
	
	<div id="main">
		<div id="logo">
	
			<img class="imglogo" src="img/logonew.png" alt="logo" width="30%"><br>
			
		</div>
			
		<div id="user">
			
			<a href="profile.php"><img class="imglogo" src="img/user.png" alt="logo" width="50%"></a>


		</div>
		<div id="username"><?php echo isset($_SESSION['fname'])?$_SESSION['fname']:"";?></div>
		</div>	
		
		
		<hr>
	<div id="dvMenu">
			<ul>
  				
				<li><a  href="home.php">Home</a></li>
  				<li><a  href="aboutus.php">About Us</a></li>
  				<li><a  href="products.php">Our Services</a></li>
  				<div class="dropdown">
  				<li><a  href="vendor.php">Vendor</a></li>
				<br><br><br>
					<div class="dropdown-content">
 						<a href="vendor_venue.php">Wedding Venues</a> 
						 <a href="vendor_decoration.php">Wedding Decorations</a> 
						 <a href="#"> Beauticians</a> 
						 <a href="vendor_entertainment.php">Wedding Entertainments</a> 
						 <a href="vendor_cake.php">Wedding Cakes</a> 
						 <a href="vendor_photography.php">Wedding Photography</a> 
 					</div>
				 </div>
				<li><a  href="contact.php">Contact Us</a></li>
				
			</ul>
	</div>
	
	
	
	<hr>
	
	
<div class="slideshow-container">

	<div class="mySlides fade">
	 
		<img src="P_img/u30.jpg" style="width:100%;height:500px;object-fit:cover;">
		<div class="content">
		
			<h1 style="font-size:60px;padding-top:40px;font-family:tahoma;color:#f5ffff;">PROVIDE QUALITY SERVICE FOR YOU</h1>
			<h1>Excellent and creative coordination</h1>
			
		</div>
	</div>	

</div>
<br>		
		<div id="subMain">
		
		<center><h1 style="color:#821442;font-family:verdana;"> Top Beautician</h1></center>
		
			<div id="slide_banner">
				
				<img src="P_img/u31.jpg" width="300" height="350" style="box-shadow: 4px 4px 8px gray;object-fit:cover" >
				
				<img id="venue13" src="P_img/u27.jpg" >
				
				<img src="P_img/u29.jpg" width="300" height="350"  style="object-fit:cover;box-shadow: 4px 4px 8px gray;">
				
			</div>
			
			<p style="text-align:center;font-size:20px;color:#40373b;font-family:verdana;">Welcome to our  salon, where your special day will become an unforgettable memory.</p>
			<hr class="venue">
			<center>
			<h1 style="color:#3f1282;font-family:cursive;">Salon Natural Bridal&#160;&#160;<img id="heart" src="P_img/uheart.png"></h1>
			
		

			<p style="color:#c1a7e8;font-family:verdana;">No 50,Kurunegal Road,Kuliyapitiya</p>
			</center>
			<hr class="venue">
			
			<div id="descrip">
			<div id="textVen">
				<h2 style="margin-left:160px;font-family:Helvetica;padding-top:50px;">About This Vendor</h2>
					<p style="margin-left:100px;font-size:18px;font-family:verdana;">We would love to assist you in feeling your best on your wedding day. We founded this salon with the intention of making everyone feel at ease and beautiful in their own flesh. We thrive on building genuine connections with our clients and will give a service that makes your vision a reality.</p>
				
		
			</div>
			<br><br><br>
				<div id="imgVen">
					<img src="P_img/u28.jpg" style="width:400px;
					height:306px;margin-left:70px;object-fit:cover;box-shadow: 4px 4px 8px gray;">
				
				</div>
			</div>
			<br><br><br>
			<hr class= "venue">
				<h2 style="margin-left:160px;font-family:Helvetica;">Facilities</h2>
					<ul style="font-size:18px;font-family:verdana;">
						<li>--Bridal first day dresses</li><br>
						<li>--Preeshoot dresses</li><br>
						<li>--Flower bouquet</li><br>
						<li>--flower girl dresses</li><br>
						<li>--Jewellery</li><br>
						<li>--reception area</li><br>
						<li>--Natural makeup</li><br>
						<li>--Hair style</li><br>
					</ul>	
		
			<hr class= "venue">
			
			<h2 style="margin-left:160px;font-family:Helvetica;">Pricing for Salon Natural Bridal</h2>
			<p style="margin-left:160px;padding-top:1px;font-size:19px;font-family:verdana;"><img src="P_img/uprice.png">&#160;&#160;LKR&#160;150&#160; 000</p>
		
			
		
			<hr class= "venue">
				<h2 style="margin-left:160px;font-family:Helvetica;">Contact Info for Salon Natural Bridal</h2>
				
				<div id="Vcontact">
					<div class="Vcont">
						<div class="Vimg">
						<img src="P_img/ulocation.png">
						</div>
							<div class="Vtext">
								<p>No 50,Kurunegal Road,Kuliyapitiya</p>
							</div>
					</div>
					
					<div class="Vcont">
						<div class="Vimg">
						<img src="P_img/uphone.png">
						</div>
							<div class="Vtext">
								<p>(037)6754321</p>
							</div>
					</div>
					
					<div class="Vcont">
						<div class="Vimg">
						<img src="P_img/umail.png">
						</div>
							<div class="Vtext">
								<p>salonnaturalbridal@gmail.com</p>
							</div>
					</div>
					
					
				</div>
				
				
		</div>
			
		<br><br>
		
		
		<img src="img/uarrow1.png" onclick="Arrow()" title="Scroll to top" id="arrow">
	<div id="footer">
			<div id="ft1">
				<h2 style="text-align:center;">AURORA WEDDING PLANNING</h2>
				<h3 style="text-align:center;"> Excellent and creative coordination</h3>
				<img class="imglogo" src="img/logonew.png" alt="logo" width="50%">
				<br><p>Copyrights @ AURORA WEDDING PLANNING</p>
			</div>
			<div id="ft2">
			<h2 style="padding-left:80px;">INFORMATION</h2>
				<p style="padding-left:90px;"><a href="home.php">Home</a><br><br>
				<a href="aboutus.php">About Us</a><br><br>
				<a href="products.php">Our services</a><br><br>
				<a href="vendor.php">Vendor</a><br><br>
				<a href="contact.php">Contact Us</a>
				</p>
			</div>
			<div id="ft1">
				<h2>CONTACT</h2>
				<p style="font-size:15px;">would you have any <br>enguiries.Please feel free <br>to contact us.</p>
				
					<p ><b>aurora@gmail.com<br><br>
					(+94)11111111<br><br>No 248A, Colombo Road,Kurunegala</b></p>	

			</div>
		</div>
		
		<script>
			// Get the button
			let arrow = document.getElementById("arrow");

			// When the user scrolls down 30px from the top of the document, show the button
			window.onscroll = function() {scrollFunc()};

			function scrollFunc() {
			
			  if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
				arrow.style.display = "block";
				
			  } else {
				arrow.style.display = "none";
				
			  }
			}

			// When the user clicks on the button, scroll to the top of the document
			function Arrow() {
			  document.body.scrollTop = 0;
			  document.documentElement.scrollTop = 0;
			}
        </script>
		
		</div>
		
		
		
	
	</body>


</html>
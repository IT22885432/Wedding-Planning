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
 						<a href="#">Wedding Venues</a> 
						 <a href="vendor_decoration.php">Wedding Decorations</a> 
						 <a href="vendor_beautician.php"> Beauticians</a> 
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
	  
		<img src="P_img/u12.jpg" style="width:100%;height:500px;object-fit:cover;">
		<div class="content">
		
			<h1 style="font-size:60px;padding-top:40px;font-family:tahoma;color:#f5ffff;">STUNNING BACKDROP</h1>
			<h1>Excellent and creative coordination</h1>
			
		</div>
	</div>


	<div class="mySlides fade">
	  
	  <img src="P_img/u9.jpg" style="width:100%;height:500px;object-fit:cover;">
		<div class="content">
		
			<h1 style="font-size:60px;padding-bottom:40px;font-family:tahoma ;color:#f5ffff;">DISCOVER THE PERFECT BACKDROP</h1>
			<h1>Excellent and creative coordination</h1>
			
		</div>
	</div>
	

	
	

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span>
 
</div>

<script>
		let slide = 0;
		showSlide();

		function showSlide() {
		  let i;
		  let slides = document.getElementsByClassName("mySlides");
		  let dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  slide++;
		  if (slide > slides.length) {slide = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slide-1].style.display = "block";  
		  dots[slide-1].className += " active";
		  setTimeout(showSlide, 3000); // Change image every 3 seconds
		}
</script>

			
	
		
		<div id="subMain">
		
		<center><h1 style="color:#821442;font-family:verdana;"> Top Wedding Venue</h1></center>
		
			<div id="slide_banner">
				
				<img src="P_img/u15.jpg" width="300" height="350" style="webkit-transform: scaleX(-1);transform: scaleX(-1);box-shadow: 4px 4px 8px gray;" >
				
				<img id="venue13" src="P_img/u13.jpg" >
				
				<img src="P_img/u15.jpg" width="300" height="350"  style="object-fit:cover;box-shadow: 4px 4px 8px gray;">
				
			</div>
			
			<p style="text-align:center;font-size:20px;color:#40373b;font-family:verdana;">Welcome to our breathtaking wedding venue, where your special day will become an unforgettable memory.</p>
			<hr class="venue">
			<center>
			<h1 style="color:#3f1282;font-family:cursive;">Villa Resort&#160;&#160;<img id="heart" src="P_img/uheart.png"></h1>
			
		

			<p style="color:#c1a7e8;font-family:verdana;">No 92,Kandy Road,Kurunegala</p>
			</center>
			<hr class="venue">
			
			<div id="descrip">
			<div id="textVen">
				<h2 style="margin-left:160px;font-family:Helvetica;">About This Vendor</h2>
					<p style="margin-left:100px;font-size:18px;font-family:verdana;">The option to spend prolonged time with family and friends in a quiet, 
					beautiful, and peaceful setting is one of the 
					advantages <br>of having your event or wedding at villa Resort. 
					You have access to the resort for the entire weekend.</p>
				
				<p style="margin-left:160px;font-size:18px;font-family:verdana;">Weddings at Villa Resort offer:</p>
					<ul style="font-size:18px;font-family:verdana;">
						<li>--Exclusive use of the resort for larger celebrations and events</li><br>
						<li>--Dining room and separate reception hall</li><br>
						<li>--Seating for up to 150 guests</li><br>
						<li>--Menu options that are creative and flexible</li><br>
						<li>--Full liquor license</li><br>
					</ul>
			</div>
			<br><br><br>
				<div id="imgVen">
					<img src="P_img/u16.jpg" style="width:400px;
					height:306px;margin-left:70px;object-fit:cover;box-shadow: 4px 4px 8px #2f0c91;">
				
				</div>
			</div>
			<br><br><br>
			<hr class= "venue">
				<h2 style="margin-left:160px;font-family:Helvetica;">Facilities</h2>
					<ul style="font-size:18px;font-family:verdana;">
						<li>--Ceremony area</li><br>
						<li>--Outdoor event space</li><br>
						<li>--Indoor event space</li><br>
						<li>--Wireless internet</li><br>
						<li>--Dressing room</li><br>
						<li>--reception area</li><br>
					</ul>	
		
			<hr class= "venue">
			
			<h2 style="margin-left:160px;font-family:Helvetica;">Pricing for Villa Resort</h2>
			<p style="margin-left:160px;padding-top:1px;font-size:19px;font-family:verdana;"><img src="P_img/uprice.png">&#160;&#160;LKR&#160;100&#160; 000</p>
		
			
			<hr class= "venue">
				<h2 style="margin-left:160px;font-family:Helvetica;">Contact Info for Villa Resort</h2>
				
				<div id="Vcontact">
					<div class="Vcont">
						<div class="Vimg">
						<img src="P_img/ulocation.png">
						</div>
							<div class="Vtext">
								<p>No 92,Kandy Road,Kurunegala</p>
							</div>
					</div>
					
					<div class="Vcont">
						<div class="Vimg">
						<img src="P_img/uphone.png">
						</div>
							<div class="Vtext">
								<p>(037)3456111</p>
							</div>
					</div>
					
					<div class="Vcont">
						<div class="Vimg">
						<img src="P_img/umail.png">
						</div>
							<div class="Vtext">
								<p>villa@gmail.com</p>
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
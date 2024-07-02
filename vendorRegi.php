<!DOCTYPE html>

<html>

	<head>
	
		<title>AURORA Wedding Planning</title>
		<link rel="stylesheet" type="text/css" href="styles/style.css"/>
		
	</head>
	
	<body>
	
		<div id="main">
				<div id="logo">
			
					<img class="imglogo" src="img/logonew.png" alt="logo" width="30%"><br>
					
				</div>
				
		</div>			
	
		<div class="slideshow-container">

			<div class="mySlides fade">
				<div class="banner-text"></div>
					<img src="img/vpage.jpg" style="width:100%;height:600px;object-fit:cover;">
				<div class="content">
				
					<div class="text_content">
					<h1 style="font-size:60px;">OUR DREAMY LOVE</h1>
					<h1>Excellent and creative coordination</h1>
				
				</div>	
				</div>
			</div>

		
			
			<div class="mySlides fade">
				<div class="banner-text"></div>
					<img src="img/vendor2.jpg" style="width:100%;height:600px;object-fit:cover;">
				<div class="content">
					
				<div class="text_content">
					<h1 style="font-size:60px;">OUR DREAMY LOVE</h1>
					<h1>Excellent and creative coordination</h1>
						
				</div>	
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
			
			<div id ="vPage">		
			<div id="vRegiForm">
				<h1 id="suhead" style="text-align:center;">Everything your wedding business needs to thrive</h1>
				<p class="supara"style="text-align:center;font-size:20px;">AURORA provides vendors with advertising solutions and resources designed to make running wedding businesses easier.
				Fill out the form below to get started.</p>
				
				<form action="submitvendorRegi.php" method="post" autocomplete="off">

				<?php
					if(isset($_GET['msg'])){
						if($_GET['msg']=="already"){
						echo '<div class="message">E-mail has already taken</div>';
						}
					}
				?>
				
				<?php
					if(isset($_GET['msg'])){
						if($_GET['msg']=="not match"){
						echo '<div class="message">Password does not match</div>';
						}
					}
				?>
					<label>First Name</label>
						
						<input class="vtext"type="text" id="fname" name="firstName" class="txtf" required>
				<br>
					<label>Last Name</label>
						
						<input  class="vtext" type="text" id="lname" name="lastName" class="txtf"required>
					

					<label>Bussiness Category</label>
						
						<select id="bussi" name="businessesName" required>
							<option value="Wedding Venue">Wedding Venue</option>
							<option value="Wedding Decorations">Wedding Decorations</option>
							<option value="Wedding Beautician">Wedding Beautician</option>
							<option value="Wedding Cake">Wedding Cake</option>
							<option value="Wedding Photography">Wedding Photography</option>
							<option value="Wedding Entertainment">Wedding Entertainment</option>
						</select>
						<br><br>
					
					<label>Address</label>
						
						<textarea cols="50" rows="5" id="add" name="address" required></textarea>
				
					<br>	
					<label>E-mail</label>
						
						<input  class="vtext" type="email" id="eml" name="email" class="txtf" required>
					

					<label>Password</label>
					
					<input  class="vtext" type="password" id="pass" name="password" class="txtf" minlength="5"  >
			
					
					<label>Confirm Password</label>
					
					<input  class="vtext" type="password" id="compass" name="confirmPassword" class="txtf" >

					<p class="supara"style="text-align:center;font-size:20px;">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
					
					<button type="submit" class="signupbtn" name="vsignup"><b>Sign Up<b></button>
					<p class="supara"style="text-align:center;font-size:20px;">Already a member? <a href="vlogin.php" style="color:dodgerblue;">Log In</a></p>
					
				</form>
			</div>
		</div>




		<div id="vcontent1">

		<div id="vtext1">

		<h1 style="font-size:40px;font-family:Arial">Whatever your business needs-we have your back</h1><br>
		<p style="font-size:20px;font-family:Arial"> You will receive visibility, credibility,<br>
		 space to promote your reviews, <br>
		 tools to track the impact of your investment,<br>
		 and more by collaborating with AURORA, a leading wedding marketplace. </p>

		</div>


		<div id="vimg1">
			<img id="vendorimg"src="img/vpage1.jpeg" alt="vendor">
		</div>


		</div>

		<div class="part">
			
			<div class="vpart">
				
				<h1 class="text">Visibility among<br>millions of couples</h1>
				<p style="text-align:center;">ACTIVELY PLANNING THEIR WEDDINGS</P>
				
			</div>
				
			<div class="vpart">
					
				<h1 class="text">Meaningful<br> matches between pros and couples</h1>
				<p style="text-align:center;">IN LOCAL MARKETS</P>
			</div>
				
			<div class="vpart">
				
				<h1 class="text">More leads that<br> turn into bookings</h1>
				<p style="text-align:center;">TO DRIVE BUSINESS GROWTH</P>
			</div>
				
		</div>
		
		<div id="vcontent2">

			<div id="vtext2">

			<h1 style="font-size:40px;font-family:Arial">Connect with more couples</h1><br>
			<p style="font-size:20px;font-family:Arial"> The AURORA attract millions of unique visitors every month,<br>
			 so there are always new couples in your area<br>
			 tools looking for a business just like yours.

			</div>


			<div id="vimg2">
				<img id="vendorimg"src="img/banner2.jpg" alt="vendor">
			</div>


		</div>		
			
	
	</body>


</html>
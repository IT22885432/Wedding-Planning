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
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>AURORA Wedding Planning</title>
		
		<link rel="stylesheet" type="text/css" href="styles/style.css"/>
		
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
			
			
		
		<div id="dvMenu">
		<hr>
				<ul>
					
					<li><a  href="#">Home</a></li>
					<li><a  href="aboutus.php">About Us</a></li>
					<li><a  href="products.php">Our Services</a></li>
					<li><a  href="vendor.php">Vendor</a></li>
					<li><a  href="contact.php">Contact Us</a></li>
					
				</ul>
				
		</div>
		<hr>

		<div class="slideshow-container">

		<div class="mySlides fade">
			<div class="banner-text"></div>
				<img src="img/banner.jpg" style="width:100%;height:600px;object-fit:cover;">
			<div class="content">
			
				<div class="text_content">
				<h1 style="font-size:60px;">OUR DREAMY LOVE</h1>
				<h1>Excellent and creative coordination</h1>
				
				<?php
			if(!isset($_SESSION['id'])){
				echo '
			<button class="btn"type="submit"  onclick = "location.href='."'signup.php'".'"><span>Sign Up</span></button>
			<button  class="btn"type="submit"  onclick = "location.href='."'login.php'".'"><span>Login</span></button>
			';
			}else{
				
				echo '<button  class="btn"type="submit"  onclick = "location.href='."'logout.php'".'"><span>Logout</span></button>';
			}
			?>
			</div>	
			</div>
		</div>

	
		
			<div class="mySlides fade">
				<div class="banner-text"></div>
					<img src="img/new.jpg" style="width:100%;height:600px;object-fit:cover;">
				<div class="content">
				
				<div class="text_content">
					<h1 style="font-size:60px;">OUR DREAMY LOVE</h1>
					<h1>Excellent and creative coordination</h1>
					
					
					<?php
				if(!isset($_SESSION['id'])){
					echo '
				<button class="btn"type="submit"  onclick = "location.href='."'signup.php'".'"><span>Sign Up</span></button>
				<button  class="btn"type="submit"  onclick = "location.href='."'login.php'".'"><span>Login</span></button>
				';
				}else{
					
					echo '<button  class="btn"type="submit"  onclick = "location.href='."'logout.php'".'"><span>Logout</span></button>';
				}
				?>
				</div>	
				</div>
			</div>
	
	
			<div class="mySlides fade">
				<div class="banner-text"></div>
					<img src="img/blue.jpg" style="width:100%;height:600px;object-fit:cover;">
				<div class="content">
				
				<div class="text_content">
				<h1 style="font-size:60px;">OUR DREAMY LOVE</h1>
				<h1>Excellent and creative coordination</h1>
				
				<?php
			if(!isset($_SESSION['id'])){
				echo '
			<button class="btn"type="submit"  onclick = "location.href='."'signup.php'".'"><span>Sign Up</span></button>
			<button  class="btn"type="submit"  onclick = "location.href='."'login.php'".'"><span>Login</span></button>
			';
			}else{
				
				echo '<button  class="btn"type="submit"  onclick = "location.href='."'logout.php'".'"><span>Logout</span></button>';
			}
			?>
				</div>	
				</div>
			</div>
	
		
			<div class="mySlides fade">
				<div class="banner-text"></div>
					<img src="img/couple2.jpg" style="width:100%;height:600px;object-fit:cover;">
			<div class="content">
				
				<div class="text_content">
				<h1 style="font-size:60px;">OUR DREAMY LOVE</h1>
				<h1>Excellent and creative coordination</h1>
				
				<?php
			if(!isset($_SESSION['id'])){
				echo '
			<button class="btn"type="submit"  onclick = "location.href='."'signup.php'".'"><span>Sign Up</span></button>
			<button  class="btn"type="submit"  onclick = "location.href='."'login.php'".'"><span>Login</span></button>
			';
			}else{
				
				echo '<button  class="btn"type="submit"  onclick = "location.href='."'logout.php'".'"><span>Logout</span></button>';
			}
			?>
				</div>	
				</div>
			</div>

		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
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
				
	
		<h1 style="text-align:center;color:#006680;font-size:40px;font-family:Arial;" >Start your journey to the prefer wedding</h1>
		<h2 style="text-align:center;color:#006680;font-size:30px;font-family:Arial;">Main Features</h2><br>
		
		<div id="sphoto">

			<div class="dvfeatur">
					
				<img class="photo" src="img/featur1.png" alt="venue">
					
			</div>
						
			<div class="dvfeatur">
					
				<img class="photo" src="img/featur2.png" alt="decoration">
					
			</div>
						
			<div class="dvfeatur">
					
				<img class="photo" src="img/featur3.png" alt="beautician">
					
			</div>
					
			<div class="dvfeatur">
				
				<img class="photo" src="img/featur4.png" alt="entertainment">
					
			</div>
				
			<div class="dvfeatur">
				
				<img class="photo" src="img/featur5.png" alt="cake">
				
			</div>
					
			<div class="dvfeatur">
				
				<img class="photo" src="img/featur6.png" alt="photography">
					
			</div>

			</div>	
			
	
		<div class="wedding">
			<img src="img/newphoto.jpg" alt="wedding" class="wedding_image" style="width:1500px;height:600px;object-fit:cover;">
		<div class="overlay">
		<div class="paragraph">
				<h1 style="text-align:center;font-size:40px;font-family:sans-serif;">OUR STORY</h1> <br>
				<h2 style="text-align:center;font-size:30px;font-family:sans-serif;">Welcome from AURORA Wedding Planning Company!</h2> <br>
				<p style="text-align:center;font-size:20px; font-family:sans-serif;">
				Aurora, a dreamer who believed in the power of love, started our narrative.<br>She founded AURORA to make fantasies a reality, inspired by the beauty of nature.<br>
				AURORA realizes couples' aspirations with a team of experienced planners.<br> Every element,
				from modest ceremonies to big celebrations, is meticulously created.<br> 
				AURORA provides a stress-free experience by partnering with reputable providers and providing individual help.<br>
				We think that every couple deserves a one-of-a-kind, spectacular wedding. Allow us to plan your special day,<br>
				creating a celebration that will live on in your memory. AURORA will light the way to your happily ever after.</p>
			</div>
			</div>
		</div>
		
	
		<div class="parallax"></div>

			<div style="height:200px;">
			
			<h2 style="text-align:center;font-size:50px;color:#006680;font-family:Arial;">Top Categories</h2>
			<h3 style="text-align:center;font-size:30px; color:#006680;font-family:Arial;">Get inspired with latest trend</h3>
		</div>
			
			
			
		<div class="section">
		
		<div class="category">
			
			<img class="cp cursor" src="img/venue.jpg" width="60%">
			<h4 class="text">Wedding Venue</h4>
			
		</div>
			
		<div class="category">
			
			<img class="cp cursor" src="img/deco.jpg" width="60%">
			<h4 class="text">Wedding Decorations</h4>
			
		</div>
			
		<div class="category">
			
			<img class="cp cursor" src="img/bridal.jpg" width="60%">
			<h4 class="text">Wedding Beautician</h4>
			
		</div>
			
		</div>
		
		<div class="section">
		
			<div class="category">
			
				<img class="cp cursor" src="img/cake4.jpg" width="60%">
				<h4 class="text">Wedding Cake</h4>
			
			</div>
			
			<div class="category">
			
				<img class="cp cursor" src="img/beauty1.jpg" width="60%">
				<h4 class="text">Wedding Photography</h4>
			
			</div>
			
			<div class="category">
			
				<img class="cp cursor" src="img/en.jpg" width="60%">
				<h4 class="text">Wedding Entertainment</h4>
			
			</div>
			
		</div>
		
		<div class="wedding">
			<img src="img/c5.jpg" alt="wedding" class="wedding_image" style="width:1500px;height:600px;object-fit:cover;">
		<div class="overlay">
		<div class="paragraph"><h1 style="text-align:center;font-size:36px;font-family:sans-serif;">Planner of Your Perfect Wedding</h1>
			
			<p style="text-align:center;font-size:20px;font-family:sans-serif;"><br><br><br>At our wedding planning company,<br>we strive to turn dreams into reality by meticulously 
			orchestrating perfect weddings that leave lasting impressions.<br> With a passion for design, creativity,
			and impeccable attention to detail, <br>we work closely with couples to curate personalized experiences <br>
			that reflect their unique love stories.<br> From conceptualization to execution, 
			our expert team is dedicated to crafting unforgettable moments that exceed expectations.  </p></div>
		</div>
		</div>
		
		
		<br><br><br>
		<h1 style="text-align:center;font-size:36px;font-family:Arial;"> OUR AMAZING WORK </h2><br>
		<div id="image_gallery">
		
			<div class="row">
			
				<div class="row_img">
				 <img src="img/shoes2.jpg" style="width:300px;height:400px;object-fit:cover;">
				 <div class="overlay1"> </div>
				 </div>
				 
				 <div class="row_img">
				 <img src="img/c12.jpg" style="width:300px;height:200px;object-fit:cover;">
				<div class="overlay1"> </div>
				 </div>
			</div>
			
		<div class="row">
			
				<div class="row_img">
				<img src="img/c6.jpg" style="width:300px;height:600px;object-fit:cover;">
				<div class="overlay1"> </div>
				 </div>
			</div>
			
			<div class="row">
			
					<div class="row_img">
					<img src="img/c8.jpg" style="width:300px;height:200px;object-fit:cover;">
					<div class="overlay1"> </div>
				 </div>
				 
					<div class="row_img">
					<img src="img/cake3.jpg" style="width:300px;height:400px;object-fit:cover;">
					<div class="overlay1"> </div>
				 </div>
					
				

			</div>
		
		<div class="row">
			
				<div class="row_img">
				<img src="img/c7.jpg" style="width:300px;height:600px;object-fit:cover;">
				<div class="overlay1"> </div>
				 </div>

			</div>
		</div>

		<div id="des">
		<h1 style="text-align:center;font-size:36px;font-family:Arial;">Why AURORA?</h2><br>

		<div id="text_img">

		<p style="text-align:center;font-size:20px;font-family:Arial;">AURORA provides the most comprehensive wedding site 
		available,with the broadest network of local wedding providers.<br> You'll be able to discover the finest provider 
		for your budget and organize your wedding precisely as you want it.<br>We make it easy to acquire price, availability,
		and answers from wedding venues and wedding providers in any town.<br><br>Meanwhile, when it comes to wedding preparation,
		our dedicated team of editors offers you with the greatest wedding ideas and<br>curated wedding photographs full of 
		inspiration to help you pick between florists,cakes, photographers, and wedding locations.<br> 
		AURORA will assist you in making your concept a reality!</p>

		</div>
		</div>
		<br><br><br><br><br><br><br><br>

		
		<img src="img/uarrow1.png" onclick="Arrow()" title="Scroll to top" id="arrow">
		
		
		
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
		
	</body>


</html>

















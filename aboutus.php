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
		<link rel="stylesheet" type="text/css" href="Pr_styles/style.css"/>
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
		
		
	
	<div id="dvMenu">
	<hr>
			<ul>
  				
				<li><a  href="home.php">Home</a></li>
  				<li><a  href="#">About Us</a></li>
  				<li><a  href="products.php">Our Services</a></li>
  				<li><a  href="vendor.php">Vendor</a></li>
				<li><a  href="contact.php">Contact Us</a></li>
				
			</ul>
			
	</div>
	<hr>
	
	
	
			
	<div class="banner-img">
	  <div class="banner-text">
		<h1 style="font-size:60px">OUR DREAMY LOVE</h1>
		<h1>Excellent and creative coordination</h1>
		
	  </div>
	</div>
	
	<div class="about-us">
      <div class="about">
        <img src="Pr_img/nice.jpg" alt="image" style="width:30%"/>
        <div class="text">
          <h2>About Us</h2>
          
          <p>Welcome to our page, Our goal is to make your special day genuinely unforgettable. With our knowledge and enthusiasm for weddings, we work to make the planning process simple and fun for couples.Every wedding is different and personal, and our team of skilled professionals is aware of this. We are here to learn your preferences, hear your vision, and make your dreams come true. We are dedicated to making your wedding day a representation of your love story, in both the little and big things.
		  We are dedicated about putting together stunning, stress-free weddings that go above and beyond your expectations at our wedding planning system. Let us be a part of your love story and assist you in making lifelong memories.</p>
         
        </div>
      </div>
    </div>

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
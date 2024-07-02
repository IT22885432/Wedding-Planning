<?php

	session_start();
	require 'config.php';
	
	if(!empty($_SESSION["id"])){
		
		$id = $_SESSION["id"];
		$result = mysqli_query($conn,"SELECT * FROM customer WHERE id ='$id'");
	}

?>

<!DOCTYPE  html>
 
 <html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>AURORA Wedding Planning</title>
		
		<link rel="stylesheet" type="text/css" href="Main_styles/style.css"/>
		<link rel="stylesheet" type="text/css" href="S_styles/style.css"/>
		
		
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
  				<li><a  href="aboutus.php">About Us</a></li>
  				<li><a  href="#">Our Services</a></li>
  				<li><a  href="vendor.php">Vendor</a></li>
				<li><a  href="contact.php">Contact Us</a></li>
				
			</ul>
			
	</div>
	<hr>
	
	<div id="ours">
		<img id="ourimg" src="S_img/9.jpg" >
	</div>

   <div id="topic">
       <h2> Wedding Plannig by Aurora</h2>
    </div>

<div id="service">
    

<div id="one-img">
        <img src="S_img/1.jpg"  width="140%" height="170px">
</div>

<div id="one-dis">
    <h3>Venue Selection</h3>
    <p>From elegant ballrooms to rustic barns, we offer a wide range of options to suit every couple's preferences.</p>
</div>


<div id="two-dis">
<h3>TimeLine creation</h3>
<p>Minimizing stress and allowing them to fully enjoy their special day.</p>
</div>

<div id="two-img">
    <img src="S_img/2.jpg"  width="110%" height="250px">
</div>


<div id="three-dis">
    <h3>Design & Decoration</h3>
    <p>Ensuring that everything runs smoothly and efficiently.</p>
    </div>
    
    <div id="three-img">
        <img src="S_img/3.jpg"  width="110%" height="200px">
    </div>


    <div id="four-dis">
        <h3>Budget  management</h3>
        <p> Enjoy your special day without any financial burdens.</p>
        </div>
        
        <div id="four-img">
            <img src="S_img/4.jpg"  width="110%" height="200px">
        </div>

        <div id="last-border">
             <h2>  About our Services </h2>
			 <p>Welcome to Aurora, where your dream wedding becomes an enchanting reality. Discover top-tier vendors, 
			 navigate effortlessly with our checklist, manage your budget wisely, find inspiration in our curated collection, 
			 and connect with a vibrant wedding planning community.</p>
			 <p>Experience the wedding of your dreams with our exceptional services. 
			 Our team of dedicated professionals understands that every wedding is unique, and we pride ourselves on creating a personalized experience tailored to your vision.
			 With meticulous attention to detail and a commitment to perfection, we offer a range of services that encompass everything from venue selection and decor to catering and entertainment.
			 Trust us to bring your wedding dreams to life, as we seamlessly weave together every element to create a magical celebration that reflects your love story.
			 Let us be your partners in this extraordinary journey, ensuring that your wedding day is filled with joy, elegance, and cherished memories that will last a lifetime.</p>
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
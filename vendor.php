<?php

	session_start();
	require 'config.php';
	
	if(!empty($_SESSION["vid"])){
		
		$vid = $_SESSION["vid"];
		$result = mysqli_query($conn,"SELECT * FROM vendor WHERE VID ='$vid'");
		
	}
	
?>



<!DOCTYPE html>

<html>

	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>AURORA Wedding Planning</title>
		<link rel="stylesheet" type="text/css" href="P_styles/style.css"/>
		<link rel="stylesheet" type="text/css" href="Main_styles/style.css"/>
		<script src="js/wedding.js"></script>
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
  				<li><a  href="products.php">Our Services</a></li>
  				<div class="dropdown">
  				<li><a  href="#">Vendor</a></li>
				<br><br><br>
					<div class="dropdown-content">
 						<a href="vendor_venue.php">Wedding Venues</a> 
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
	  
	  <img src="P_img/u13.jpg" style="width:100%;height:500px;object-fit:cover;">
		<div class="content">
		
			<h1 style="font-size:60px;padding-bottom:40px;">PLAN YOUR DREAM DAY WITH US</h1>
			<h1>Excellent and creative coordination</h1>
			
		</div>
	</div>


	<div class="mySlides fade">
	 
	  <img src="P_img/u2.jpg" style="width:100%;height:500px;object-fit:cover;">
		<div class="content">
		
			<h1 style="font-size:60px;padding-bottom:40px;">PLAN YOUR DREAM DAY WITH US</h1>
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
		<div id="dvAd1">
			<div id="ad1">
				<div class="container">
				<?php
				echo
					'<h2 style="color:#672980;cursor:pointer;text-align:center;"><a href="vendor_venue.php">Wedding Venues</a></h2>
					<img id="Venue" src="P_img/u3.jpg" style="box-shadow:2px 2px 8px #006680;">
						<p class="overlay">We assist you in deciding between the greatest 
						star-studded wedding hotels in Sri Lanka quiet venues where you see your wedding 
						taking place. Allow us to handle everything.</p>';
						?>
				</div>
			</div>
			
			<div id="ad2">
				<div class="container">
				<?php
				
					echo'<h2 style="color:#672980;cursor:pointer;text-align:center;" ><a href="vendor_decoration.php">  Wedding Decorations</a></h2>
					<img id="Decora" src="P_img/u4.jpg" style="box-shadow:2px 2px 8px #006680;">
					<p class="overlay">Your wedding will be a floral-adorned day.
					We will let you choose the perfect flower to represent your happiness.
					So come along with us. </p>';
				?>
				</div>
			</div>
		
			
			<div id="ad3">
				<div class="container">
				<?php
					echo'<h2 style="color:#672980;cursor:pointer;text-align:center;"><a href="vendor_beautician.php">  Beauticians</a></h2>
					<img id="Beauti" src="P_img/u5.jpg" style="box-shadow:2px 2px 8px #006680;">
					<p class="overlay">Every wedding requires the services of a beautician. 
					Some brides prefer a life-changing appearance for their wedding
					So everything will be in the hands of one of Sri Lankas experienced beauticians who best meets your taste and budget! </p>';
				?>	
				</div>
			</div>
			</div>
		
		
		<br><br>
		
		<div id="dvAd1">
			
			
			<div id="ad1">
				<div class="container">
				<?php
					echo'<h2 style="color:#672980;cursor:pointer;text-align:center;"><a href="vendor_entertainment.php">Wedding Entertainments</a></h2>
					<img id="Band" src="P_img/u6.jpeg" style="box-shadow:2px 2px 8px #006680;">
					<p class="overlay" >All you need is good music to brighten an already pleasant attitude. 
					You can choose from the most popular wedding entertainments in Sri Lanka at Aurora. </p>';
				?>
				</div>
			</div>
			
			<div id="ad2">		
				<div class="container">
				<?php
					echo'<h2 style="color:#672980;cursor:pointer;text-align:center;"><a href="vendor_cake.php">Wedding Cakes</a></h2>
					<img id="Cake" src="P_img/u7.jpg" style="box-shadow:2px 2px 8px #006680;">
					
					<p class="overlay" style="padding-bottom:0;"> Everyone attention is drawn to the wedding cake in the wedding.
					We will introduce you to the greatest wedding cake makers in Sri Lanka. </p>';
				?>
				</div>
			</div>
			
			<div id="ad3">		
				<div class="container">
				<?php
					echo'<h2 style="color:#672980;cursor:pointer;text-align:center;"><a href="vendor_photography.php">Wedding Photography</a></h2>
					<img id="Studio" src="P_img/u8.jpg" style="box-shadow:2px 2px 8px #006680;">
					
					<p class="overlay" >Weddings must be caught in snapshots to be saved for the future by
					skilled professionals in Sri Lanka wedding photography. 
					At Aurora, we help you choose  the right videographer & photographer  </p>';
				?>
				
				</div>
			</div>
		</div>
		<br><br><br>
		<?php
				echo'<p style="padding-right:10px;padding-left:20px;text-align:justify;font-size:15px;font-family:verdana;color:#04265e;">Choosing wedding suppliers and services is largely a question of personal preference, although reputation is important, and you should always trust your instincts. Professionals with whom you work should make you feel at ease, not worried. Wedding planning should be enjoyable and exciting, and the greatest wedding suppliers and service providers will be just as excited about your Big Day as you are. Ask prospective wedding vendors many questions and be prepared to walk away if you feel forced to sign a contract. Your goal should be to identify wedding specialists who can advise you on the best selections for your ceremony and reception.We offer best wedding vendors for you.</p>';
		?>
		
		
		</div>
	
	<br><br>
	
	<div id="upload">
	<hr>
	<center><h1 style="color:#090580;"> Details Concerning Vendors</h1></center>
	<?php
	require 'config.php';
	

$sql = "SELECT * FROM vendor_service ";
//$sql2="SELECT Email FROM vendor";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    echo '<table cellpadding="20"  width="1350">';
	
		while ($row = $result->fetch_assoc()) {
        
		$imagePath = $row['image'];
		echo"<tr>";
		
        echo "<td width=370>"."<img src=".$imagePath." width='350' style='box-shadow:6px 6px 4px gray;'>"."</td>" ;
		
        echo "<td>"."<h2 style='font-family:verdana;'>".$row['S_name']."</h2>".
		"<p style='font-size:18px;font-family:verdana;'>".$row['description'].
		"<br><br>".$row['address']."</p>".
		//"<br><br>".$row['Email'].
		"<br><br><p style='font-size:18px;font-family:verdana;'>LKR"." ".$row['price']."</p></td>";

        echo"</tr>";
		
            
    }
	echo'</table>';
}


?>		
	</div>
		
	
		
	
		<img src="p_img/uarrow1.png" onclick="Arrow()" title="Scroll to top" id="arrow">
		
		
		
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
				<img class="imglogo" src="img/logonew.png" alt="logo" width="30%">
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
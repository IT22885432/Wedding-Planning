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
	
		<title>AURORA Wedding Planning</title>
		<link rel="stylesheet" type="text/css" href="Vs_styles/style.css"/>
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
			

			
	<div class="banner-img">
	<img src="P_img/5.jpeg" width="100%" height="600px" style="object-fit:cover;">
	  <div class="banner-text">
		<h1 style="font-size:60px">OUR DREAMY LOVE</h1>
		<h1>Excellent and creative coordination</h1>
		<?php
		if(isset($_SESSION['vid'])){
		
			echo '<button  class="btn"type="submit"  onclick = "location.href='."'logout.php'".'"><span>Logout</span></button>';
		}
		?>
	  </div>
	
	</div>	
	<div id ="vPage" style="height:840px;">		
	<div id="vRegiForm" style="height:auto;">

		<h1 id="suhead" >Add Vendor Services</h1>
		<form action="vendorSubmit.php" method="POST" enctype="multipart/form-data">
		
			<label>Name of service station / Name of Vendor </label>
				
				<input class="vtext"type="text" id="sname" name="sname" class="txtf" >
			
			<label>Address of service station</label>
				
				<textarea cols="50" rows="3" id="address" name="address" ></textarea>
			
			<label>Description</label>
				
				<textarea cols="60" rows="10" id="descrip" name="descrip" required></textarea>	
				
			<label>Price</label>
				
				<input class="vtext"type="text" id="price" name="price" class="txtf" >
				
			<label>Image</label><br><br>
			
				<input type="file" name="sImage" id="sImage" class="vtext">
			
			<br><br>
			<input type="submit" class="btnAdd" name="btnAdd" value="Add Service">

		</form>
	</div>
</div>





<br><br>		
	<div id="footer">
			<div id="ft1">
				<h2 style="text-align:center;">AURORA WEDDING PLANNING</h2>
				<h3 style="text-align:center;"> Excellent and creative coordination</h3>
				<img class="imglogo" src="img/logonew.png" alt="logo" width="50%">
				<br><p>Copyrights @ AURORA WEDDING PLANNING</p>
			</div>
			<div id="ft2">
			
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
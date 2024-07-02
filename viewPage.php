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
		
	<hr>	
	<?php
	require 'config.php';
	

$sql = "SELECT * FROM vendor_service ";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
	echo "<center><h2>New Service added successfully!</h2></center>";
    echo '<center><table cellpadding="20"  width="1350">';
	
		while ($row = $result->fetch_assoc()) {
        
		$imagePath = $row['image'];
		echo"<tr>";
		
        echo "<td width=370>"."<img src=".$imagePath." width='350'>"."</td>";
		
        echo "<td>"."<h2 style='font-family:verdana;'>".$row['S_name']."</h2>".
		"<p style='font-size:18px;font-family:verdana;'>".$row['description'].
		"<br><br>".$row['address']."</p>".
		//"<br><br>".$row['Email'].
		"<br><br><p style='font-size:18px;font-family:verdana;'>LKR"." ".$row['price']."</p>"."</td>";
		

        echo"</tr>";
		
            
    }
	echo'</table></center>';
}


?>		
	
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
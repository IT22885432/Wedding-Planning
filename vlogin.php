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
	
	
			<div class="vForm">
				
				
				
			
			<form action="validatevlogin.php" method="post" style="max-width:500px;margin:auto;" autocomplete="off" class="container">
			
				<h1 class="suhead" > Vendor Login </h1>
				<p class="supara" > You already have an account Login here</p>
				<label> </label>
				<?php
					if(isset($_GET['msg'])){
						if($_GET['msg']=="Registered"){
						echo '<div class="message">User Not Registered</div>';
						}
					}
					?>
					
				<?php
					if(isset($_GET['msg'])){
						if($_GET['msg']=="Password"){
						echo '<div class="message">Wrong Password</div>';
						}
					}
					?>		
					<input style="background-color:white;"class="input-field" type="text" placeholder="Email" name="email" id="eml" required>
			
				<label> </label>
					<input  style="background-color:white;"class="input-field" type="password" placeholder="Password" name="Password" id="pass" required>

				<p class="supara" style="text-align:center;">Not a member yet? <a href="vendorRegi.php" style="color:white;">start here</a></p>
				<button type="submit" id="btn1" name="vlogin" >Login</button>
			</form>
				
				
		</div>
			
		
	
	</body>


</html>
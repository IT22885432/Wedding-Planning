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
	

			<div class="loginForm">
				
			
			<form action="validatelogin.php" method="post" style="max-width:500px;margin:auto;" autocomplete="off" class="container">
			
				
				<h1 class="suhead">Login </h1>
				<p class="supara"> You already have an account Login here</p>
				
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
				<label> </label>
		  
					<input style="background-color:white;"class="input-field" type="text" placeholder="Email" name="email" id="eml" required>
			
				<label> </label>
					<input  style="background-color:white;"class="input-field" type="password" placeholder="Password" name="Password" id="pass" required>

				<p class="supara">Not a member yet? <a href="signup.php" style="color:white;">start here</a></p>
				<button type="submit" id="btn1" name="login">Login</button>
				<p class="supara">Are you vendor? <a href="vlogin.php" style="color:white;">Vendor login</a></p>
				
			</form>
				
				
		</div>
				

	</body>


</html>
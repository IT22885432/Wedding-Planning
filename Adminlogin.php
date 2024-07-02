<!DOCTYPE html>

<html>

	<head>
	
		<title>AURORA Wedding Planning</title>
		<link rel="stylesheet" type="text/css" href="Admin_styles/style.css"/>
		

	</head>
	
	<body>

		<div id="main">
			<div id="logo">
		
				<img class="imglogo" src="img/logonew.png" alt="logo" width="30%"><br>
				
			</div>
			
		</div>	

	<div class="SignFormadmin">
	
	<div class="scontainer">
	<div class="contentf">
	
	<form action="AdminSignInProcess.php" method="post" autocomplete="off" style="max-width:800px;margin:auto" >
		<div class="form">
		<h1>Admin Login</h1>
		</div>
			
			<?php
			if(isset($_GET['msg'])){
				if($_GET['msg']=="invalid"){
				echo '<div class="ermessage">Invalid Email or Password</div>';
				}
			}
			?>
			
			
			<div class="formGroup">
			
				<input type="text" id="fname" name="email" class="txtf" Placeholder="Email" required >
			</div>	
			<br><br>
			<div class="formGroup">
				
				<input type="text" id="lname" name="password" class="txtf" Placeholder="Password" required>
			</div>		
			
			<br>
			
			<button type="submit" id="btnSubmit"class="signupbtn" name="signup" value="sign up" >Login</button>
			
			
		</form>
	</div>
	</div>	
		
</div>
		
		
</div>
	
	
	
	

	
	
	</body>


</html>
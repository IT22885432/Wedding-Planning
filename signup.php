<!DOCTYPE html>

<html>

	<head>
	
		<title>AURORA Wedding Planning</title>
		<link rel="stylesheet" type="text/css" href="signup_styles/style.css"/>
		<link rel="stylesheet" type="text/css" href="Main_styles/style.css"/>
		

	</head>
	
	<body>

	
		<div id="main">
				<div id="logo">
			
					<img class="imglogo" src="img/logonew.png" alt="logo" width="30%"><br>
					
				</div>
				
		</div>
	

			<div class="SignForm">
			
			<div class="scontainer">
			<div class="contentf">
			
			<form action="submitregistration.php" method="post" autocomplete="off" style="max-width:800px;margin:auto">
				<div class="form">
				<h1>Sign Up</h1>
				<p>Please fill in this form to create an account.</p>
				<p>Are you vendor? <a href="vendorRegi.php" style="color:dodgerblue;">start here</a></p>	
				</div>
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
					<div class="formGroup">
					
						<input type="text" id="fname" name="firstName" class="txtf" Placeholder="First Name" required >
					</div>	
					<br><br>
					<div class="formGroup">
						
						<input type="text" id="lname" name="lastName" class="txtf" Placeholder="Last Name" required>
					</div>		
					
					<div class="formGroup">	
						<textarea cols="60" rows="5" id="add" name="address" Placeholder="Address" required></textarea>
					</div>	
						
					<div class="formGroup">	
						<input type="email" id="eml" name="email" class="txtf" Placeholder="E-mail" required>
					</div>	
						
					<div class="formGroup">
					<input type="password" id="psw" name="password" class="txtf" Placeholder="Password" minlength="5" >
					</div>
						
					<div class="formGroup">
					<input type="password" id="conpsw" name="confirmPassword" Placeholder="Confirm Password" class="txtf" >
					</div>
					
					<br>
					<p class="supara">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
					<br>
					
					<button type="submit" id="btnSubmit"class="signupbtn" name="signup" value="sign up" >Sign Up</button>
					
					<p>Already a member? <a href="login.php" style="color:dodgerblue;">Log In</a></p>
				</form>
			</div>
			</div>	
				
		</div>
				
				
		</div>
	
	
	
	</body>


</html>
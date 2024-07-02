<?php

	session_start();
	require 'config.php';
	
	
	if(!empty($_SESSION["vid"])){
		
		header("location:vendorservice.php");
		
	}


	if(isset($_POST['vlogin'])){
	
		$email = $_POST['email'];
		$password = $_POST['Password'];
		
	
		$result = mysqli_query($conn,"SELECT * FROM vendor WHERE Email = '$email'");
		$row = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result)>0){
			
			if($password == $row["VPassword"]){
				
				$_SESSION["login"] = true;
			    $_SESSION["vid"] = $row["VID"];
				$_SESSION['fname'] = $row["Fname"];
				header("Location: vendorservice.php");
			
			}else{
				
				header("location:vlogin.php?msg=Password");
				
			}
			
		}else{
			
				header("location:vlogin.php?msg=Registered");
			
				
			}
			
		
		
	}

?>
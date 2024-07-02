<?php

	session_start();
	require 'config.php';
	
	
	if(!empty($_SESSION["vid"])){
		
		header("location:vendorservice.php");
	}
	if(isset($_POST['vsignup'])){
		
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$bname = $_POST['businessesName'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$email = $_POST['email'];
		$duplicate = mysqli_query($conn,"SELECT * FROM vendor WHERE Email = '$email'");
		
		if (mysqli_num_rows($duplicate)>0){
			
		
			header("location:vendorRegi.php?msg=already");
		}else{
			
			if ($password == $confirmPassword){
				
				$query = "INSERT INTO vendor (Fname,Lname,VAddress,VPassword,Email,busi_category ) VALUES ('$fname', '$lname', '$address', '$password', '$email','$bname')";
				mysqli_query($conn,$query);
				header("Location: vlogin.php");
				
			}else{
				
				header("location:vendorRegi.php?msg=not match");
				
				
			}
			
		}
		
	}


?>
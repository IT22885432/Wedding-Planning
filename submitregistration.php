<?php

	require 'config.php';

	$status = 1;

	if(!empty($_SESSION["id"])){
		
		header("location:home.php");
	}

	if(isset($_POST['signup'])){
		
		$fname = $_POST['firstName'];
		$lname = $_POST['lastName'];
		$address = $_POST['address'];
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];
		$email = $_POST['email'];
		$duplicate = mysqli_query($conn,"SELECT * FROM customer WHERE Email = '$email'");
		
		if (mysqli_num_rows($duplicate)>0){
			
			header("location:signup.php?msg=already");
			
		}else{
			
			if ($password == $confirmPassword){
				
				$query = "INSERT INTO customer (Fname,Lname,CAddress,CPassword,Email,status_id) VALUES ('$fname', '$lname', '$address', '$password', '$email','$status')";
				mysqli_query($conn,$query);
				
				header("Location: login.php");
		
			}
			else{
				
				
				header("location:signup.php?msg=not match");
		
				
				
				
			}
			
		}
		
	}
?>
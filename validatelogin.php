<?php

	session_start();
	require 'config.php';
	
	
	if(!empty($_SESSION["id"])){
		
		header("location:home.php");
		
	}


	if(isset($_POST['login'])){
	
		$email = $_POST['email'];
		$password = $_POST['Password'];
		
	
		$result = mysqli_query($conn,"SELECT * FROM customer WHERE Email = '$email'");
		$row = mysqli_fetch_assoc($result);
		if (mysqli_num_rows($result)>0){
			
			if($password == $row["CPassword"]){
				
				$_SESSION["login"] = true;
			    $_SESSION['id'] = $row["CID"];
				$_SESSION['fname'] = $row["Fname"];
				header("Location: home.php");
			
			}else{
				
				header("location:login.php?msg=Password");
				
			}
			
		}else{
			
			header("location:login.php?msg=Registered");
					
			}
	}

?>

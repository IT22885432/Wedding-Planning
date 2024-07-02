<?php

session_start();

require "config.php";

$email = $_POST["email"];
$password = $_POST["password"];

// echo $email;
// echo $password;

if(empty($email)){
	
    echo "Please enter your Email Address...";
	

}else{
    $resultset = mysqli_query($conn,"SELECT * FROM `admin` WHERE `email` = '".$email."' AND `password` = '".$password."'");
    $n = $resultset->num_rows;

    //echo $n;

    if($n == 1){

    echo "success";
    $d = $resultset->fetch_assoc();
    $_SESSION["admn"] = $d;

    header("Location: adminpage.php");

    if($rememberMe == "true"){
        setcookie("email",$email,time()+(60*60*24*365));
        setcookie("password",$password,time()+(60*60*24*365));
    }else{
        setcookie("email","",-1);
        setcookie("password","",-1);
    }

    }else{

	header("location:Adminlogin.php?msg=invalid");
    
    }
}


?>
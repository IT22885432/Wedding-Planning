<?php
	require 'config.php';
	
header("location:viewPage.php");

if(isset($_POST['btnAdd'])){
	
$target_Dir="uploads/";
$target_File=$target_Dir.basename($_FILES["sImage"]["name"]);


$servicename =$_POST['sname'];
$address     =$_POST['address'];
$description =$_POST['descrip'];
$price       =$_POST['price'];
$id=0;
//$image       =$_POST['sImage'];

$sql = "INSERT INTO vendor_service (S_name,address,description,price) VALUES ('$servicename', '$address', '$description','$price');";

if(mysqli_query($conn,$sql)){
	echo "New service added successfully.";
	$id=mysqli_insert_id($conn);
}else{
	echo "Service not added.".mysqli_error($conn);
}



if(isset($_FILES["sImage"])) {
		
		$imageFileType=pathinfo($target_File,PATHINFO_EXTENSION);
		$saveFile=$target_Dir.$id.".".$imageFileType;
		
		if (move_uploaded_file($_FILES["sImage"]["tmp_name"],$saveFile)){
			echo "<br>The file is uploaded.";
			$sql2="UPDATE vendor_service SET image='$saveFile' WHERE serviceID='$id'";
			if(mysqli_query($conn,$sql2)){
				echo 'updated';
				header("location:viewPage.php");
			}else{
				
			}
		}
		else {
			echo "<br>Error while uploading your file.";
		}
	}

	



mysqli_close($conn);
}
?>


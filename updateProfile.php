<?php

require 'config.php';

session_start();

if (!empty($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $fname = $_POST['firstName'];
    $lname = $_POST['lastName'];
    $email = $_POST['email'];

    if (isset($_POST['submit']) && isset($_FILES['imgFile'])) {
        // echo "goda";
        // echo "<pre>";
        // print_r($_FILES['imgFile']);
        // echo "<pre>";

        move_uploaded_file($_FILES["imgFile"]["tmp_name"], "M_img/profile/" . $_FILES["imgFile"]["name"]);
        $file = "M_img/profile/" . $_FILES["imgFile"]["name"];

        
        $profilers = mysqli_query($conn,"SELECT * FROM `pro_img` WHERE `customer_id`='".$id."'");
        $in = $profilers->num_rows;

        if($in == 1){

            //update

            mysqli_query($conn,"UPDATE `pro_img` SET `code`='".$file."' WHERE `customer_id`='".$id."'");

            echo "Profile image updated successfully.";

        }else{

            //insert
            mysqli_query($conn,"INSERT INTO `pro_img` (`code`,`customer_id`) VALUES ('".$file."','".$id."')");

            echo "New profile image saved successfully";

        }

    }else {
        header("location:profile.php");
    }


    mysqli_query($conn,"UPDATE `customer` SET `Fname`='".$fname."',`Lname`='".$lname."',`Email`='".$email."' WHERE `CID`='".$id."'");
    
    header("location:profile.php");

}

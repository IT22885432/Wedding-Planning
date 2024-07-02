<?php

require 'config.php';

session_start();

if (!empty($_SESSION["id"])) {

    $id = $_SESSION["id"];

    $date = $_POST['date'];
    $qty = $_POST['qty'];
    $dscptn = $_POST['dscptn'];

    mysqli_query($conn,"INSERT INTO `contact_us` (`CID_id`,`date`,`qty`,`description`) VALUES ('".$id."','".$date."','".$qty."','".$dscptn."')");
    
    header("location:contact.php");

}

?>
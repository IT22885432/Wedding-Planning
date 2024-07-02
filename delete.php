<?php

session_start();

require 'config.php';

$id = $_SESSION["id"];

mysqli_query($conn,"DELETE FROM `customer` WHERE `CID` = '".$id."'");

header("location:signup.php");


?>
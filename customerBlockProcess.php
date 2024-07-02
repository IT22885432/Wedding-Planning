<?php

require "config.php";

if (isset($_POST["CID"])) {
    $product_id = $_POST["CID"];
    ?>
    <h1><?php echo $product_id; ?></h1>
    <?php
    $product_rs = mysqli_query($conn,"SELECT * FROM `customer` WHERE `CID` = '" . $product_id . "'");
    $product_num = $product_rs->num_rows;

    if ($product_num == 1) {
        $product_data = $product_rs->fetch_assoc();
        $product_status = $product_data["status_id"];

        if ($product_status == 1) {
            mysqli_query($conn,"UPDATE `customer` SET `status_id`='2' WHERE `CID` = '" . $product_id . "'");

            header("location:customermanage.php");
            // echo "success1";
        } else if ($product_status == 2) {
            mysqli_query($conn,"UPDATE `customer` SET `status_id`='1' WHERE `CID` = '" . $product_id . "'");
            // echo "success2";
            header("location:customermanage.php");
        }
    }
}

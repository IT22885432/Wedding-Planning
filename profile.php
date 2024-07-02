<?php

session_start();
require 'config.php';

if (!empty($_SESSION["id"])) {

    $id = $_SESSION["id"];
    $result = mysqli_query($conn, "SELECT * FROM customer WHERE CID ='$id'");
    $row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>AURORA Wedding Planning</title>
		
		<link rel="stylesheet" type="text/css" href="M_styles/style.css"/>
		<link rel="stylesheet" type="text/css" href="Main_styles/style.css"/>
	
	</head>
	
	<body>
	
	<div id="main">
		<div id="logo">
	
			<img class="imglogo" src="img/logonew.png" alt="logo" width="30%"><br>
			
		</div>
		
	


            <div id="user" onclick="changeView();">

                <img class="imglogo" src="img/user.png" alt="logo" width="50%">

            </div>
		<div id="username"><?php echo isset($_SESSION['fname'])?$_SESSION['fname']:"";?></div>
		
		</div>	
		
		
	
	<div id="dvMenu">
	<hr>
			<ul>
  				
				<li><a  href="home.php">Home</a></li>
  				<li><a  href="aboutus.php">About Us</a></li>
  				<li><a  href="products.php">Our Services</a></li>
  				<li><a  href="vendor.php">Vendor</a></li>
				<li><a  href="contact.php">Contact Us</a></li>
				
			</ul>
			
	</div>
	<hr>
            <div style="width: 100%;" id="profileBox">
                <h2 class="pt1" style="margin-top: 25px;">Profile</h2>

                <div class="profileInput">

                    <form action="updateProfile.php" method="post" enctype="multipart/form-data">

                        <h3 class="pt2" style="text-align: center;">Basic Information</h3>

                        <div class="pif" style="text-align: center;">
                            <div class="imglogo1">

                                <?php
                                $profileImg = mysqli_query($conn, "SELECT * FROM `pro_img` WHERE `customer_id` = '" . $id . "' ");
                                $pn = $profileImg->num_rows;

                                if ($pn == 1) {
                                    $p = $profileImg->fetch_assoc();
                                ?>

                                    <img class="imglogo" src="<?php echo $p["code"]; ?>" width="25%" id="prev0">

                                <?php
                                } else {
                                    
                                ?>

                                    <img class="imglogo" src="M_img/profile/user.png" width="25%" id="prev0">

                                <?php
                                }
                                ?>

                                <!-- <img class="imglogo" src="img/user.png" width="25%" id="prev0"> -->
                            </div>


                            <input type="file" class="d-none cout111" id="profileimg" name="imgFile">
                            <label class="cout1" for="profileimg" onclick="changeImage();">Upload Profile Image</label>
                            <!-- <input type="submit" class="cout1" name="submit" value="Upload"> -->
                        </div>


                        <div class="pif">
                            <h5>First Name</h5>
                            <input type="text" style="width: 90%;height: 26px;border-radius: 8px;" name="firstName" value="<?php echo $row["Fname"]; ?>" />
                        </div>

                        <div class="pif">
                            <h5>Last Name</h5>
                            <input type="text" style="width: 90%;height: 26px;border-radius: 8px;" name="lastName" value="<?php echo  $row["Lname"]; ?>" />
                        </div>

                        <div class="pif">
                            <h5>Email</h5>
                            <input type="email" style="width: 90%;height: 26px;border-radius: 8px;" name="email" value="<?php echo  $row["Email"]; ?>">
                        </div>

                        <div class="pif" style="text-align: center;">
                            <button type="submit" class="cout2" name="submit" value="Upload">Save</button>
                        </div>

                    </form>

                </div>

                <div class="dAcc">

                    <form action="delete.php" method="post">

                        <div style="width: 100%;height: 1px;"></div>

                        <h3 class="pt2" style="text-align: center;">Delete Account</h3>

                        <div class="pif" style="text-align: center;">
                            <button type="submit" class="cout3">Delete</button>
                        </div>

                    </form>

                </div>

            </div>

            <div id="footer">
			<div id="ft1">
				<h2 style="text-align:center;">AURORA WEDDING PLANNING</h2>
				<h3 style="text-align:center;"> Excellent and creative coordination</h3>
				<img class="imglogo" src="img/logonew.png" alt="logo" width="50%">
				<br><p>Copyrights @ AURORA WEDDING PLANNING</p>
			</div>
			<div id="ft2">
			<h2 style="padding-left:80px;">INFORMATION</h2>
				<p style="padding-left:90px;"><a href="home.php">Home</a><br><br>
				<a href="aboutus.php">About Us</a><br><br>
				<a href="products.php">Our services</a><br><br>
				<a href="vendor.php">Vendor</a><br><br>
				<a href="contact.php">Contact Us</a>
				</p>
			</div>
			<div id="ft1">
				<h2>CONTACT</h2>
				<p style="font-size:15px;">would you have any <br>enguiries.Please feel free <br>to contact us.</p>
				
					<p ><b>aurora@gmail.com<br><br>
					(+94)11111111<br><br>No 248A, Colombo Road,Kurunegala</b></p>	

			</div>
		</div>
        <script src="M_js/script.js"></script>

        <script>
            let display_products = document.getElementById('admin-display-products').style.display;
            let display_orders = document.getElementById('admin-display-orders').style.display;
            let display_appointments = document.getElementById('admin-display-appointments').style.display;
            let display_add_products = document.getElementById('admin-add-products').style.display;

            display_products = "none";
            display_orders = "none";
            display_appointments = "none";

            document.getElementById('deleteproducts').addEventListener("click", () => {
                display_add_products = "none";
                display_orders = "none";
                display_appointments = "none";
                display_products = "block";
            });

            document.getElementById('addproducts').addEventListener("click", () => {
                display_orders = "none";
                display_appointments = "none";
                display_products = "none";
                display_add_products = "block";
            });

            document.getElementById('neworders').addEventListener("click", () => {
                display_appointments = "none";
                display_products = "none";
                display_add_products = "none";
                display_orders = "block";
            });

            document.getElementById('newappointments').addEventListener("click", () => {
                display_products = "none";
                display_add_products = "none";
                display_orders = "none";
                display_appointments = "block";
            })
        </script>
    </body>

    </html>

<?php

} else {

    header("location:login.php");
}

?>
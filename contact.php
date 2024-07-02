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
			
		<div id="user">
			
			
			<a href="profile.php"><img class="imglogo" src="img/user.png" alt="logo" width="50%"></a>

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
            <div style="width: 100%;" id="contactBox">
                <h2 class="pt1" style="margin-top: 25px;">Contact Us</h2>

                <div class="profileInputCntct">

                    <form action="contactProcess.php" method="post" autocomplete="off">

                        <h3 class="pt2" style="text-align: center;">Make An Inquiry</h3>


                        <div class="pif">
                            <h5>Name</h5>
                            <input type="text" style="width: 90%;" name="Name" placeholder="Name" value="<?php echo $row["Fname"]; ?>" disabled />
                        </div>

                        <div class="pif">
                            <h5>Email</h5>
                            <input type="email" style="width: 90%;" name="email" placeholder="Email" value="<?php echo  $row["Email"]; ?>" disabled>
                        </div>

                        <div class="pif">
                            <h5>Wedding Date</h5>
                            <input type="date" style="width: 90%;" name="date" />
                        </div>

                        <div class="pif">
                            <h5>Number Of Guests</h5>
                            <input type="number" style="width: 90%;" value="0" min="0" max="1000" id="qty" name="qty">
                        </div>

                        <div class="pif">
                            <h5>What Would You Like To Know</h5>
                            <textarea name="dscptn" id="" cols="70" rows="8" placeholder="Text"></textarea>
                        </div>

                        <div class="pif" style="text-align: center;">
                            <button type="submit" class="cout2" name="update">Send An Inquiry</button>
                        </div>

                    </form>

                </div>


            </div>
            
            <div class="contactus">
                <h1>Contact Details.</h1>
                <p>AURORA WEDDING PLANING</P>

                <div class="pd1" style="margin-left: 100px;">
                    <img src="M_img\3.jpg" alt="" width="40px" height="40px">
                    <h3 style="margin-left: 30px;">NO 248A, Colombo Road,Kurunegala</h3>
                </div>

                <div class="pd1" style="margin-left: 100px;">
                    <img src="M_img\4.jpg" alt="" width="40px" height="40px">
                    <h3 style="margin-left: 30px;">+9411111111</h3>
                </div>

                <div class="pd1" style="margin-left: 100px;">
                    <img src="M_img\5.jpg" alt="" width="40px" height="40px">
                    <h3 style="margin-left: 30px;">aurora@gmail.com</h3>
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
		</div>
        <script src="M_js/script.js"></script>
    </body>

    </html>

<?php

} else {

    header("location:login.php");
}

?>
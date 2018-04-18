<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>


    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo_black.ico">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">



</head>

<body>
<?php
        $user = 'root';
        $password = '';
        $db = 'lavishdb';
        $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!");                                        
?>
        <div id="header">
            <header class="header-two-bars">
                <div class="header-first-bar">
                    <div class="header-limiter">
                        <h1><a href="home.php"><img alt="Lavish Logo" id="header_logo" src="images/logo_black.png"/></a></h1>
                        <a href="#" id="login-btn" class="logout-button">Login</a>
                        <a href="register.php" class="logout-button">Sign Up</a>
                    </div>
                </div>
                <div class="header-second-bar">
                    <div class="header-limiter">
                        <nav class="navtop"><b>
                        <a href="products.php">Face</a>
                        <a href="products.php">&ensp; Lips</a>
                        <a href="products.php">&ensp; Eyes</a>
                        <a href="products.php">&ensp; Fragrances</a></b>
                        </nav>
                    </div>
                </div>
            </header>

			 <div class="signIn">
				<div class="form">
					<form class="login-form" action="account_info.html">
						<input type="text" placeholder="Email" />
						<input type="password" placeholder="Password" />
						<button>login</button>
						<p class="message">Not registered? <a href="register.php">Create an account</a></p>
					</form>
				</div>
			</div>
        </div>

        <div id="register_account" class="main-body">
            <form name="registerForm" method="post" action="directRegistration.php">
                <table>
                    <tr>
                        <td colspan="2">
                            <h3>Registration Form:</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>First Name *</div>
                            <input class="textbox" type="text" id="fname" name="fname">
                        </td>
                        <td>
                            <div>Last Name *</div>
                            <input class="textbox" type="text" id="lname" name="lname">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Password *</div>
                            <input class="textbox" type="password" id="pass" name="pass">
                        </td>
                        <td>
                            <div>Confirm Password*</div>
                            <input class="textbox" type="password" id="cpass" name="cpass">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div>Email Address *</div>
                            <input class="textbox" type="text" id="email" name="email">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div>Delivery Address *</div>
                            <input class="textbox" type="text" id="daddress" name="daddress">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Billing Address *</div>
                            <input class="textbox" type="text" id="baddress" name="baddress">
                        </td>
                        <td>
                            <input class="checkbox" type="checkbox" id="asDelivery" onchange="deliveryAddress()">
                            <div class="align">Same as the Delivery Address.</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Phone Number*</div>
                            <input class="textbox" type="tel" id="phonenumber" name="phonenumber">
                        </td>
                        <td>
                            <div>Birthdate *</div>
                            <input class="textbox" type="date" id="bdate" name="bdate">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input class="checkbox" type="checkbox" id="t&c" value="checked">
                            <div class="align">I agree to <a href="#">Terms & Conditions</a></div>
                        </td>
                    </tr>
                </table>
                <button class="saveButton regButton" onclick="validateRegisterForm()" type="submit" value="register">Submit</button>
            </form>
        </div>

     <footer class="footer-distributed">
        <div class="footer-left">
            <img id="footer_logo" alt="Lavish Logo" src="images/logo_white.png" />
        </div>
        <div class="footer-center">
            <p class="footer-links">
                <a href="about.html">About Us</a> &nbsp;
                <a href="contact.html">Contact Us</a> &nbsp;
                <a href="shipping_billing.html">Shipping & Billing</a> &nbsp;
                <a href="returns.html">Returns & Exchange</a>
            </p>
            <p class="footer-company-name">Copyright&copy; 2018 Lavish, <a href="terms.html"> Terms of Use</a> |<a href="policy.html"> Privacy Policy</a> </p>
        </div>
        <div class="footer-right">
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
			<div id="site-map">
				<p><a href="sitemap.html">Site Map</a></p>
			</div>
        </div>
    </footer>
	
        <script src="includes/scripts/register.js"></script>
        <script src="includes/scripts/jquery-3.2.1.min.js"></script>
        <script src="includes/scripts/scripts.js"></script>
    </body>

</html>
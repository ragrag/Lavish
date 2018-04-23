<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lavish | HOME</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">   
	<link rel ="icon" href="images/logo_black.ico">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
</head>



<body  class="body" style="display:none;" onload="fade()">


<?php //Check user session and select proper header
require 'db_connect.php';
$conn = OpenCon();
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
		<div id="home" class="main-body">
				<div id="slider">
					<div class="main_slider" style="background-image:url(images/slider_3.jpg)">
					</div>
					<div class="main_slider" style="background-image:url(images/slider_5.jpg)">
					</div>
					<div class="main_slider" style="background-image:url(images/slider_6.jpg)">
					</div>
				</div>
		 
            
                <div class="banner">
                    <div class="row">                        
                                <div class="banner_item col" style="background-image:url(images/banner_1.jpg)">
                                    <div class="banner_category">
                                        <a href="products.php?type=Face">Face</a>
                                    </div>
                                </div>
                            <div class="banner_item  col" style="background-image:url(images/banner_2.jpg)">
                                <div class="banner_category">
                                    <a href="products.php?type=Eyes">Eyes</a>
                                </div>
                            </div>
                            <div class="banner_item col" style="background-image:url(images/banner_3.jpg)">
                                <div class="banner_category">
                                    <a href="products.php?type=Eyes">FRAGRANCE</a>
                                </div>
                            </div>
                        </div>

                    </div>
		</div>
           
     <footer class="footer-distributed">
        <div class="footer-left">
            <img id="footer_logo" alt="Lavish Logo" src="images/logo_white.png" />
        </div>
        <div class="footer-center">
            <p class="footer-links">
                <a href="about.php">About Us</a> &nbsp;
                <a href="contact.php">Contact Us</a> &nbsp;
                <a href="shipping_billing.php">Shipping & Billing</a> &nbsp;
                <a href="returns.php">Returns & Exchange</a>
            </p>
            <p class="footer-company-name">Copyright&copy; 2018 Lavish, <a href="terms.php"> Terms of Use</a> |<a href="policy.php"> Privacy Policy</a> </p>
        </div>
        <div class="footer-right">
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
			<div id="site-map">
				<p><a href="sitemap.php">Site Map</a></p>
			</div>
        </div>
    </footer>
		
    <script src="includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="includes/scripts/scripts.js"></script>
    <script src="includes/scripts/home_js.js"></script>
</body>

</html>
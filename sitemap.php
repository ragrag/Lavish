<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Sitemap</title>
	<link rel="icon" href="images/logo_black.ico">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
	<link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
</head>


<body>




<?php 
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
	
    <div id="sitemap">
        <div class="rowspan">
            <h1>CATEGORIES</h1>
			<br>
            <hr>
			<br>
        </div>
        <div class="row">
            <div class="column">
                <h3><a href="products.php">LIPS</a></h3>
            </div>
            <div class="column">
                <h3><a href="products.php">EYES</a></h3>
            </div>
            <div class="column">
                <h3><a href="products.php">FACE</a></h3>
            </div>
            <div class="column">
                <h3><a href="products.php">FRAGRANCE</a></h3>
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
</body>



</html>
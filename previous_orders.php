<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Orders</title>
	<link rel ="icon" href="images/logo_black.ico">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="includes/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>
<?php 
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
   
    <div id="previous_orders">
        <table id="order_table" class="table" >
            <tr>
                <th>Order #</th>
                <th>Status</th>
                <th>Date</th>
                <th>Order total</th>
            </tr>
            <tr>
                <td> <a href="order_info.php">13372</a></td>
                <td>Pending</td>
                <td>27/08/2018</td>
                <td>456</td>
            </tr>
        </table>
	
        <table id="account_panal">
            <tr class="tr"><td><h3 style="padding-left:10px;">My Account</h3></td></tr>
            <tr class ="tr">
                <td class="listItem td">
                    <a href="account_info.php">Account Information</a>
                </td>
            </tr>
            <tr class="tr">
                <td class="listItem td">
                    <a href="address_book.php">Address Book</a>
                </td>
            </tr>
            <tr class="tr">
                <td class="listItem td">
                    <a href="previous_orders.php">My Orders</a>
                </td>
            </tr>
        </table>
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
<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Address Book</title>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link rel ="icon" href="images/logo_black.ico">
		<link rel="stylesheet" type="text/css" href="includes/styles.css">


    </head>
    <body>
        <?php 
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
		
        <div id="address_book">
            <table>
                <tr>
                    <td><h3>Default Billing Address</h3></td>
                    <td><h3>Default Shipping Address</h3></td>
                    <td style="padding-left: 10px;"><h3>My Account</h3></td>
                </tr>
                <tr>
                    <td>
                        <div class="pad">
                            <label> Mr. Ahmed</label><br>
                            <label> Address</label><br>
                            <label> Zamalek,102</label><br>
                            <label> Cairo</label><br>
                            <label> T:01111147691</label><br>
                            <button type="submit" class ="saveButton">Change Billing Address</button>
                        </div>
                    <td>
                        <div class="pad">
                            <label> Mr. Ahmed</label><br>
                            <label> Address</label><br>
                            <label> Zamalek,102</label><br>
                            <label> Cairo</label><br>
                            <label> T:01111147691</label><br>
                            <button type="submit" class ="saveButton">Change Billing Address</button>
                        </div>
                    </td>
                    <td class="listItem cellSize">
                        <a href="account_info.php">Account Information</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px;">
                        <div class="pad">
                            <label> Mr. Ahmed</label><br>
                            <label> Address</label><br>
                            <label> Zamalek,102</label><br>
                            <label> Cairo</label><br>
                            <label> T:01111147691</label><br>
                            <button type="submit" class ="saveButton">Change Billing Address</button>
                        </div>
                    </td>
                    <td>
                        <div class="pad">
                            <label> Mr. Ahmed</label><br>
                            <label> Address</label><br>
                            <label> Zamalek,102</label><br>
                            <label> Cairo</label><br>
                            <label> T:01111147691</label><br>
                            <button type="submit" class ="saveButton">Change Billing Address</button>
                        </div>
                    </td>
                    <td class="listItem cellSize">
                        <a href="address_book.php">Address Book</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding-top: 10px;">
                        <div class="pad">
                            <label> Mr. Ahmed</label><br>
                            <label> Address</label><br>
                            <label> Zamalek,102</label><br>
                            <label> Cairo</label><br>
                            <label> T:01111147691</label><br>
                            <button type="submit" class ="saveButton">Change Billing Address</button>
                        </div>
                    </td>
                    <td>
                        <div class="pad">
                            <label> Mr. Ahmed</label><br>
                            <label> Address</label><br>
                            <label> Zamalek,102</label><br>
                            <label> Cairo</label><br>
                            <label> T:01111147691</label><br>
                            <button type="submit" class ="saveButton">Change Billing Address</button>
                        </div>
                    </td>
                    <td class="listItem cellSize">
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
		<script src="includes/scripts/account_info.js"></script>
    </body>
</html>
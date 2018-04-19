<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Account Info</title>
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
        
        $user = 'root';
        $password = '';
        $db = 'lavishdb';
        $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!"); 
        $user = $_SESSION['user_login'];
        $sql = "SELECT * FROM user WHERE U_username = '$user'";
        $result = $db->query($sql);
        $row = mysqli_fetch_assoc($result);
                                                                                        
    ?>
        <div id="register_account">
            <form name="accountInfoForm" action="changeAccountInfo.php" method="post">
                <table>
                    <tr>
                        <td ><h3>Account information</h3></td>
                        <td><h3>Change Password</h3></td>
                        <td style="padding-left: 10px;"><h3>My Account</h3></td>
                    </tr>
                    <tr>
                        <td>
                            <div>First Name *</div>
                            <input class="textbox" type="text" id="fname" name="fname" value="<?php echo $row["Fname"];?>">
                        </td>
                        <td>
                            <div>Current Password *</div>
                            <input class="textbox" type="password" id="cpass" name="cpass" value="<?php echo $row["U_password"];?>">
                        </td>
                        <td class="listItem">
                            <a href="account_info.php">Account Information</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Last Name *</div>
                            <input class="textbox" type="text" id="lname" name="lname" value="<?php echo $row["Lname"];?>">
                        </td>
                        <td>
                            <div>New Password *</div>
                            <input class="textbox" type="password" id="npass" name="npass">
                        </td>
                        <td class="listItem">
                            <a href="address_book.php">Address Book</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Email Address *</div>
                            <input class="textbox" type="text" id="email" name="email" value="<?php echo $row["Email"];?>">
                        </td>
                        <td>
                            <div>Confirm New Password *</div>
                            <input class="textbox" type="password" id="cnpass" name="cnpass">
                        </td>
                        <td class="listItem">
                            <a href="previous_orders.php">My Orders</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Phone number</div>
                            <input class="textbox" type="number" id="phonenumber" name="phonenumber" value="<?php echo $row["Mobile_number"];?>">
                        </td>
                        <td>
                            <div>Birthdate</div>
                            <input class="textbox" type="date" id="bdate" name="bdate" value="<?php echo $row["DOB"];?>">
                        </td>
                    </tr>
                </table>
                <button class="saveButton regButton" type="submit" name="save" onclick="saveData()">Save</button>
                <div id="req" class="align">* Required Field</div>
            </form>
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
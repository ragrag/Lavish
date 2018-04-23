<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <link rel="icon" href="images/logo_black.ico">
    <link rel="stylesheet" type="text/css" href="includes/plugins/bootstrap4/bootstrap.min.css">
    <link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
</head>

<body>
<?php //Check user session to select proper header
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
		<script>
			function newsletter()
			{
			var email = document.getElementById('newsletter_email').value;
			  $.ajax
			  ({
			  type:'post',
			  url:'newsletter.php',
			  data:{
			   newsletter:"newletter",
			   email:email
			  },
			  success:function(response) {
			  if(response == 1)
			  {
				  alert("Subscribed to newsletter");
			  }
			  else 
			  {
				  alert("Already Subscribed");
			  }
			  }
			  });
			 return false;
			}	
			</script>
    <div id="about_contact" class="container contact_container main-body">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs d-flex flex-row align-items-center">
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right"  ></i>About us</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-6 contact_col">
                <div class="contact_contents">
                    <h1>About us</h1>
                    <p>Lavish is one of the biggest online cosmetic retailers in Egypt </p>
                </div>

                <div class="follow_us_contents">
                    <h1>Follow Us</h1>
                    <ul class="social d-flex flex-row">
                        <li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook"  ></i></a></li>
                        <li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter"  ></i></a></li>
                        <li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram"  ></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsletter_text d-flex flex-column justify-content-center align-items-lg-start align-items-md-center text-center">
                        <h4>Newsletter</h4>
                        <p>Subscribe to our newsletter and get 20% off your first purchase</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form >
                        <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                            <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                            <button id="newsletter_submit" onclick="newsletter()" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                        </div>
                    </form>
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
</body>

</html>
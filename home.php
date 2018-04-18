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

<?php
require 'db_connect.php';
$conn = OpenCon();
echo("Connection successful");
CloseCon($conn);
?>

	<div id="header">
        <header class="header-two-bars">
            <div class="header-first-bar">
                <div class="header-limiter">
                    <h1><a href="home.htm"><img alt="Lavish Logo" id="header_logo" src="images/logo_black.png"/></a></h1>
                    <a href="#" id="login-btn" class="logout-button">Login</a>
                    <a href="register.html" class="logout-button">Sign Up</a>
                </div>
            </div>
            <div class="header-second-bar">
                <div class="header-limiter">
                    <nav class="navtop"><b>
                        <a href="products.html">Face</a>
                        <a href="products.html">&ensp; Lips</a>
                        <a href="products.html">&ensp; Eyes</a>
                        <a href="products.html">&ensp; Fragrances</a></b>
                    </nav>
                </div>
            </div>
        </header>

		<script>
		
function do_login()
{
 var email=$("#emailid").val();
 var pass=$("#password").val();
 if(email!="" && pass!="")
 {
  $("#loading_spinner").css({"display":"block"});
  $.ajax
  ({
  type:'post',
  url:'login.php',
  data:{
   do_login:"login",
   email:email,
   password:pass
  },
  success:function(response) {
  if(response=="success")
  {
      alert("Success");
  }
  else
  {
    $("#loading_spinner").css({"display":"none"});
    alert("Wrong Details");
  }
  }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}
		</script>
	


		<div class="signIn">
            <div class="form">
                <form class="login-form" method="post" action="do_login.php" onsubmit="return do_login();" >
                    <input type="text" name="emailid" id="emailid" placeholder="Username" />
                    <input type="password" name="password" id="password" placeholder="Password" />

                    <button type="submit" name="login" value="DO LOGIN" id="login_button" >login</button>
                    <p class="message">Not registered? <a href="register.html">Create an account</a></p>
                </form>
            </div>
        </div>
    </div>

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
                                        <a href="products.html">Face</a>
                                    </div>
                                </div>
                            <div class="banner_item  col" style="background-image:url(images/banner_2.jpg)">
                                <div class="banner_category">
                                    <a href="products.html">Eyes</a>
                                </div>
                            </div>
                            <div class="banner_item col" style="background-image:url(images/banner_3.jpg)">
                                <div class="banner_category">
                                    <a href="products.html">FRAGRANCE</a>
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
		
    <script src="includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="includes/scripts/scripts.js"></script>
    <script src="includes/scripts/home_js.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Information</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel ="icon" href="images/logo_black.ico">
    <link rel="stylesheet" type="text/css" href="includes/plugins/bootstrap4/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">


	

</head>

<body>
<?php 
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
            <div id="cart_order">
                <div class="container">
                    <div class="row bar">
                        <div class="col-lg-12">
                            <p class="text-muted lead">Order number #13372</p>
                        </div>
                        <div id="basket" class="col-lg-9">
                            <div class="box mt-0 pb-0 no-horizontal-padding">

                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Discount</th>	
												<th>Total</th>	
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#"><img alt="Product Image" src="images/mac1.jpg" class="img-fluid"></a></td>
                                                <td><a href="#">MAC Retro Matte Lipstick</a></td>
                                                <td>
                                                    <input type="number" value="2" class="form-control">
                                                </td>
                                                <td>$123.00</td>
                                                <td>$0.00</td>
                                                <td>$246.00</td>
                                            </tr>
                                            <tr>
                                                <td><a href="#"><img alt="Product Image" src="images/tresor1.jpg"  class="img-fluid"></a></td>
                                                <td><a href="#">Tresor Lancom Au De Toilet 104Oz</a></td>
                                                <td>
                                                    <input type="number" value="1" class="form-control">
                                                </td>
                                                <td>$200.00</td>
                                                <td>$0.00</td>
                                                <td>$200.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Status</th>
                                                <th colspan="1">Pending</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="box-footer d-flex justify-content-between align-items-center">
                                    <div class="left-col"><a href="orders.php" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to orders</a></div>
                                    <div class="right-col">

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-lg-3">
                            <div id="order-summary" class="box mt-0 mb-4 p-0">
                                <div class="box-header mt-0">
                                    <h3>Order summary</h3>
                                </div>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Order date</td>
                                                <th>27 Aug <br>2018</th>
                                            </tr>
                                            <tr>
                                                <td>Order subtotal</td>
                                                <th>$446.00</th>
                                            </tr>
                                            <tr>
                                                <td>Shipping and handling</td>
                                                <th>$10.00</th>
                                            </tr>
                                            <tr>
                                                <td>Tax</td>
                                                <th>$0.00</th>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <th>$456.00</th>
                                            </tr>

                                        </tbody>

                                    </table>
                                    &ensp; <a href="javascript:window.print();">Print Order Summary</a>
                                </div>
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
	
    <script src="includes/scripts/order.js"></script>
	<script src="includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="includes/scripts/scripts.js"></script>
</body>

</html>
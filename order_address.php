
	<?php  //Fetch user address info and count order total
		require 'db_connect.php';
		session_start();
		$connect = OpenCon();
		$username = $_SESSION['user_login'];
		$user = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM user WHERE U_username='$username'"));  
		$uid = $user ['U_id'];
		$query = "SELECT * FROM cart WHERE c_user_id='$uid'";
		$items = mysqli_query($connect,$query);
		
		$total =0;
		while ($item = mysqli_fetch_array($items))	
		{
			$pid = $item ['p_id'];
			$quantity = $item ['quantity'];
			$product = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM product WHERE p_id='$pid'"));  
			$price = $product ['price'];
			$curprice = ((int)$price*(int)$quantity);
			$total += $curprice;
		}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Order Address Information</title>
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

<body >
<?php //Check user session and select proper header
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
            <div id="cart_order">
                <div class="container">
                    <div class="row">
                        <div id="checkout" class="col-lg-9">
                            <div class="box border-bottom-0">
                                <form method="post" action="order_review.php">
                                    <ul class="nav nav-pills nav-fill">
                                        <li class="nav-item"><a href="order_address.php" class="nav-link active"> <i class="fa fa-map-marker"></i><br>Address</a></li>

                                        <li class="nav-item"><a href="#" class="nav-link disabled"><i class="fa fa-eye"></i><br>Order Review</a></li>
                                    </ul>
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="firstname">Firstname</label>
                                                    <input id="firstname" type="text" class="form-control" value="<?php echo $user['Fname']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="lastname">Lastname</label>
                                                    <input id="lastname" type="text" class="form-control" value="<?php echo $user['Lname']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="street">Shipping Address</label>
                                                    <input id="street" type="text" class="form-control" value="<?php echo $user['D_Address']; ?>">
                                                </div>
                                            </div>
											 <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="street">Billing Address</label>
                                                    <input id="street" type="text" class="form-control" value="<?php echo $user['B_Address']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="phone">Mobile</label>
                                                    <input id="phone" type="text" class="form-control" value="0<?php echo $user['Mobile_number']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input id="email" type="text" class="form-control" value="<?php echo $user['Email']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                                        <div class="left-col"><a href="cart.php" class="btn btn-secondary mt-0"><i class="fa fa-chevron-left"></i>Back to cart</a></div>
                                        <div class="left-col"><a href="account_info.php" class="btn btn-secondary mt-0">Edit Shipping Info</a></div>
                                        <div class="right-col">


                                            <button type="submit" class="btn btn-template-main">Continue to Order Review<i class="fa fa-chevron-right"></i></button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div id="order-summary" class="box mb-4 p-0">
                                <div class="box-header mt-0">
                                    <h3>Order summary</h3>
                                </div>
                                <p class="text-muted text-small">Shipping and additional costs are calculated based on the values you have entered.</p>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>Order subtotal</td>
                                                <th><?php echo $total; ?>.00</th>
                                            </tr>
                                            <tr>
                                                <td>Shipping and handling</td>
                                                <th>10.00</th>
                                            </tr>
                                            <tr>
                                                <td>Tax</td>
                                                <th>0.00</th>
                                            </tr>
                                            <tr class="total">
                                                <td>Total</td>
                                                <th><?php echo $total+10; ?>.00</th>
                                            </tr>
                                        </tbody>
                                    </table>
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

    <script src="includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="includes/scripts/scripts.js"></script>
    <script src="includes/scripts/order.js"></script>
</body>

</html>
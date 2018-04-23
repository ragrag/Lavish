<?php					//Fetch  items in cart to display in order review		
	require 'db_connect.php';
	session_start();
	$connect = OpenCon();
	$user = $_SESSION['user_login'];
	$uid = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM user WHERE U_username='$user'")) ['U_id'];  
	$query = "SELECT * FROM cart WHERE c_user_id='$uid'";
	$items = mysqli_query($connect,$query);
	$count = mysqli_num_rows($items);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Order Review
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="includes/plugins/bootstrap4/bootstrap.min.css">
    <link rel ="icon" href="images/logo_black.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <?php 
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>
    <div id="cart_order">
      <div class="container">
        <div class="row">
          <div id="checkout" class="col-lg-9">
            <div class="box">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a href="order_address.php" class="nav-link"> 
                    <i class="fa fa-map-marker">
                    </i>
                    <br>Address
                  </a>
                </li>
                <li class="nav-item">
                  <a href="order_review.php" class="nav-link active">
                    <i class="fa fa-eye">
                    </i>
                    <br>Order Review
                  </a>
                </li>
              </ul>
              <div class="content">
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th colspan="2">Product
                        </th>
                        <th>Quantity
                        </th>
                        <th>Unit price
                        </th>
                        <th>Discount
                        </th>
                        <th>Total
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					$total =0;
					while ($item = mysqli_fetch_array($items))   //Fill Html list 
					{
						$pid = $item ['p_id'];
						$quantity = $item ['quantity'];
						$product = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM product WHERE p_id='$pid'"));  
						$pimgurl = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM image WHERE fk_p_id='$pid'")) ['i_url'];  
						$pname = $product ['p_name'];
						$price = $product ['price'];
						$curprice = ((int)$price*(int)$quantity);
						$total += $curprice;
						echo "
						<tr>
						<td><a href='#'><img alt='Product Image' src='$pimgurl' class='img-fluid'></a></td>
						<td><a href='#'>$pname</a></td>
						<td>
						$quantity
						</td>
						<td>$price.00</td>
						<td>0.00</td>
						<td>$curprice.00</td>
						</tr>
						";
					}
?>
                      <script>										
                        function make_order()
                        {
                          $.ajax
                          ({
                            type:'post',
                            url:'makeorder.php',
                            data:{
                              makeorder:"make order",
                            }
                            ,
                            success:function(response) {
                              if(response == 1)
                              {
                                window.location.replace("previous_orders.php");
                              }
                              else 
                              {
                                alert("Order not succesfully made!");
                              }
                            }
                          }
                          );
                          return false;
                        }
                      </script>									
                    </tbody>
                    <tfoot>
                      <tr>
                        <th colspan="5">Total
                        </th>
                        <th>
                          <?php echo $total; ?>.00
                        </th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
              <div class="box-footer d-flex flex-wrap align-items-center justify-content-between">
                <div class="left-col">
                  <a href="order_address.php" class="btn btn-secondary mt-0">
                    <i class="fa fa-chevron-left">
                    </i>Back to address selection
                  </a>
                </div>
                <div class="right-col">
                  <button onclick="make_order()" class="btn btn-template-main">Place the order
                    <i class="fa fa-chevron-right">
                    </i>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="order-summary" class="box mb-4 p-0">
              <div class="box-header mt-0">
                <h3>Order summary
                </h3>
              </div>
              <p class="text-muted text-small">Shipping and additional costs are calculated based on the values you have entered.
              </p>
              <div class="table-responsive">
                <table class="table">
                  <tbody>
                    <tr>
                      <td>Order subtotal
                      </td>
                      <th>
                        <?php echo $total; ?>.00
                      </th>
                    </tr>
                    <tr>
                      <td>Shipping and handling
                      </td>
                      <th>10.00
                      </th>
                    </tr>
                    <tr>
                      <td>Tax
                      </td>
                      <th>0.00
                      </th>
                    </tr>
                    <tr class="total">
                      <td>Total
                      </td>
                      <th>
                        <?php echo $total+10; ?>.00
                      </th>
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
          <a href="about.php">About Us
          </a> &nbsp;
          <a href="contact.php">Contact Us
          </a> &nbsp;
          <a href="shipping_billing.php">Shipping & Billing
          </a> &nbsp;
          <a href="returns.php">Returns & Exchange
          </a>
        </p>
        <p class="footer-company-name">Copyright&copy; 2018 Lavish, 
          <a href="terms.php"> Terms of Use
          </a> |
          <a href="policy.php"> Privacy Policy
          </a> 
        </p>
      </div>
      <div class="footer-right">
        <div class="footer-icons">
          <a href="#">
            <i class="fa fa-facebook">
            </i>
          </a>
          <a href="#">
            <i class="fa fa-twitter">
            </i>
          </a>
          <a href="#">
            <i class="fa fa-instagram">
            </i>
          </a>
        </div>
        <div id="site-map">
          <p>
            <a href="sitemap.php">Site Map
            </a>
          </p>
        </div>
      </div>
    </footer>
    <script src="includes/scripts/order.js">
    </script>
    <script src="includes/scripts/jquery-3.2.1.min.js">
    </script>
    <script src="includes/scripts/scripts.js">
    </script>
  </body>
</html>

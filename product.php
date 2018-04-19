
			<?php
				require 'db_connect.php';
				$conn = OpenCon();
				$pid = $_GET['id'];
		
				$query = "SELECT * FROM product WHERE p_id='$pid'";
	
				$product = mysqli_fetch_array(mysqli_query($conn,$query));
				$pname = $product ['p_name'];
				$price = $product ['price'];
				$brand = $product ['p_brand'];
				$ptype = $product ['p_type'];
				$pdesc = $product ['p_description'];
				$pimages = mysqli_query($conn,"SELECT * FROM image WHERE fk_p_id='$pid'");
				
				
				
				$ratingQ =  mysqli_query($conn,"SELECT * FROM review WHERE fk_p_id='$pid'");
				$ratingSum =0;
				$prating=0;
				while ($review = mysqli_fetch_array($ratingQ))
				{
					$ratingSum += $review ['rating'];
				}
				
				if (mysqli_num_rows($ratingQ) )
					$prating = $ratingSum/mysqli_num_rows($ratingQ);	

				
				
				

					if($_POST['cart_add'] && isset($_SESSION['user_login']) )
					{
						$query = "SELECT * FROM admin WHERE A_username= '".$email."' and A_password='".$pass."'";
						$
					}
					else 
					{
						$query = "SELECT * FROM user WHERE U_username= '".$email."' and U_password='".$pass."'";

					}
					$result=mysqli_query($connect,$query);

				
				




				
			?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title><?php echo $pname; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="includes/plugins/bootstrap4/bootstrap.min.css">
    <link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="icon" href="images/logo_black.ico">
    <link rel="stylesheet" type="text/css" href="includes/styles.css">
    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>




</head>


<body class="body" style="display:none;" onload="fade()">

      <?php 
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>

<div class="body" style="display:none;" onload="fade()">
    <div id="product" class="main-body">
        <a id="backtotop"></a>
        <div class="container single_product_container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="products.php?type=<?php echo $ptype;?>"><i class="fa fa-angle-right"  ></i><?php echo $ptype;?></a></li>
                            <li class="active"><a href="#"><i class="fa fa-angle-right"  ></i><?php echo $pname;?></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <div class="single_product_pics">
                        <div class="row">
                            <div class="col-lg-3 thumbnails_col order-lg-1 order-2">
                                <div class="single_product_thumbnails">
                                    <ul>
                                        
										
										<?php
										while ($img = mysqli_fetch_array($pimages))
										{
											$imgurl = $img ['i_url'];
											echo "<li> <img alt='Product Image' src='$imgurl' data-image='$imgurl'></li>";
											
										}
										
											$ratingQ =  mysqli_query($conn,"SELECT * FROM review WHERE fk_p_id='$pid'");
										?>
										
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 image_col order-lg-2 order-1">
                                <div class="single_product_image">
                                    <div class="single_product_image_background" style="background-image:url(<?php echo $imgurl; ?>)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product_details">
                        <div class="product_details_title">
                            <h2><?php echo $pname;  ?></h2>
                            <ul>
                                <li><?php echo $pdesc; ?></li>
                                
                            </ul>
                        </div>
                        <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                            <span class="ti-truck"></span><span>free delivery</span>
                        </div>
                        <div class="product_price">$<?php echo "$price" ?>.00</div>
                        <ul class="star_rating">
						<?php 
						
						for($i=0;$i<5;$i++)
						{
							if($prating)
							{
								echo "<li><i class='fa fa-star'></i></li>";
								$prating--;
							}
							else echo "<li><i class='fa fa-star-o'></i></li>";
						}
						      
                          ?>
                        </ul>
						<form method="post">
                        <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                            <span>Quantity:</span>
                            <div class="quantity_selector">
                                <span class="minus"><i class="fa fa-minus"  ></i></span>
                                <span id="quantity_value">1</span>
                                <span class="plus"><i class="fa fa-plus"  ></i></span>
                            </div>
                         <div class="cart_button add_to_cart_button"><a href="#" name="cart_add" onclick="$(this).closest('form').submit()">add to cart</a></div>
						</form>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="tabs_section_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="tabs_container">
                            <ul class="tabs d-flex flex-sm-row flex-column align-items-left align-items-md-center justify-content-center">
                                <li class="tab" data-active-tab="tab_2"><span>Additional Information</span></li>
                                <li class="tab" data-active-tab="tab_3"><span>Reviews ( <?php echo mysqli_num_rows($ratingQ); ?> )</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <div id="tab_2" class="tab_container">
                            <div class="row">
                                <div class="col additional_info_col">
                                    <div class="tab_title additional_info_title">
                                        <h4>Additional Information</h4>
                                    </div>
                                    <p>Brand:<span><?php echo $brand; ?></span></p>
                                </div>
                            </div>
                        </div>

                        <div id="tab_3" class="tab_container">

                            <div class="row">

                                <div class="col-lg-6 reviews_col">
                                    <div class="tab_title reviews_title">
                                        <h4>Reviews ( <?php echo mysqli_num_rows($ratingQ); ?> )</h4>
                                    </div>

									<?php
									
									while ($review = mysqli_fetch_array($ratingQ))
									{
										$prating = $review ['rating'];
										$uid = $review ['fk_u_id'];
										$user_rev = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM user WHERE U_id='$uid'")) ['U_username'];
										$date_rev = $review ['review_date'];
										$desc_rev = $review ['description'];
										echo " <div class='user_review_container d-flex flex-column flex-sm-row'>
                                        <div class='user'>
                                            <div class='user_pic'></div>
                                            <div class='user_rating'>
                                                <ul class='star_rating'>";
                                                 for ($i=0;$i<5;$i++)
												{
													if($prating)
												{
														echo "<li><i class='fa fa-star'></i></li>";
														$prating--;
												}
												else echo "<li><i class='fa fa-star-o'></i></li>";
												}
                                           echo     "</ul>
                                            </div>
                                        </div>
                                        <div class='review'>
                                            <div class='review_date'>$date_rev</div>
                                            <div class='user_name'>$user_rev</div>
                                            <p>$desc_rev</p>
                                        </div>
                                    </div>";
									}
									
									
									?>
								
									
									
									
                                </div>



                                <div class="col-lg-6 add_review_col">

                                    <div class="add_review">
                                        <form id="review_form" action="post">
                                            <div>
                                                <h1>Add Review</h1>
                                                <input id="review_name" class="form_input input_name" type="text" name="name" placeholder="Name*" required="required" data-error="Name is required.">
                                                <input id="review_email" class="form_input input_email" type="email" name="email" placeholder="Email*" required="required" data-error="Valid email is required.">
                                            </div>
                                            <div>
                                                <h1>Your Rating:</h1>
                                                <ul class="user_star_rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                                <textarea id="review_message" class="input_review" name="message" placeholder="Your Review" rows="4" required data-error="Please, leave us a review."></textarea>
                                            </div>
                                            <div class="text-left text-sm-right">
                                                <button id="review_submit" type="submit" class="red_button review_submit_btn trans_300" value="Submit">submit</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>



        <div class="benefit">
            <div class="container">
                <div class="row benefit_row">
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-truck"></i></div>
                            <div class="benefit_content">
                                <h6>free shipping</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-money"></i></div>
                            <div class="benefit_content">
                                <h6>cash on delivery</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-undo"></i></div>
                            <div class="benefit_content">
                                <h6>45 days return</h6>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 benefit_col">
                        <div class="benefit_item d-flex flex-row align-items-center">
                            <div class="benefit_icon"><i class="fa fa-clock-o"></i></div>
                            <div class="benefit_content">
                                <h6>OPEN 24/7</h6>

                            </div>
                        </div>
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
                        <form action="post">
                            <div class="newsletter_form d-flex flex-md-row flex-column flex-xs-column align-items-center justify-content-lg-end justify-content-center">
                                <input id="newsletter_email" type="email" placeholder="Your email" required="required" data-error="Valid email is required.">
                                <button id="newsletter_submit" type="submit" class="newsletter_submit_btn trans_300" value="Submit">subscribe</button>
                            </div>
                        </form>
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

    </div>

    <script src="includes/scripts/jquery-3.2.1.min.js"></script>
    <script src="includes/scripts/scripts.js"></script>
    <script src="includes/scripts/product.js"></script>
</body>

</html>
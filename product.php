<!DOCTYPE html>
<html lang="en">

<head>
    <title>Victoria's Secret Night</title>
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
                    $user = 'root';
                    $password = '';
                    $db = 'lavishdb';
                    $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!");                    
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
                        <a href="products.php">Face</a>
                        <a href="products.php">&ensp; Lips</a>
                        <a href="products.php">&ensp; Eyes</a>
                        <a href="products.php">&ensp; Fragrances</a></b>
                    </nav>
                </div>
            </div>
        </header>


<div class="body" style="display:none;" onload="fade()">
    <div id="product" class="main-body">
        <a id="backtotop"></a>
        <div class="container single_product_container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs d-flex flex-row align-items-center">
                        <ul>
                            <li><a href="home.htm">Home</a></li>
                            <li><a href="product.html"><i class="fa fa-angle-right"  ></i>Fragrances</a></li>
                            <li class="active"><a href="#"><i class="fa fa-angle-right"  ></i>Victoria's Secret Night</a></li>
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
                                        
                                        <li id="red"><img alt="Product Image" src="images/single_1_thumb.jpg"  data-image="images/single_1.jpg"></li>
                                        <li id="black" class="active"><img alt="Product Image" src="images/single_2_thumb.jpg"  data-image="images/single_2.jpg"></li>
                                        <li id="blue"><img alt="Product Image" src="images/single_3_thumb.jpg"  data-image="images/single_3.jpg"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 image_col order-lg-2 order-1">
                                <div class="single_product_image">
                                    <div class="single_product_image_background" style="background-image:url(images/single_2.jpg)"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="product_details">
                        <div class="product_details_title">
                            <h2>Night by Victoria's Secret</h2>
                            <ul>
                                <li>100mL / 3.4 floz </li>
                                <li>New in box with cellophane wrap</li>
                                <li>Own the Night: this provocative eau de parfum is the perfect co-star, with a warm, sparkling fragrance inspired by midnight in Paris. </li>
                                <li>Black plum, velvet woods, luscious apple</li>
                            </ul>
                        </div>
                        <div class="free_delivery d-flex flex-row align-items-center justify-content-center">
                            <span class="ti-truck"></span><span>free delivery</span>
                        </div>
                        <div class="original_price">$629.99</div>
                        <div class="product_price">$495.00</div>
                        <ul class="star_rating">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                        <div class="product_color">
                            <span>Select Color:</span>
                            <ul>
                                <li class="red" style="background: #e54e5d"></li>
                                <li class="black" style="background: #252525"></li>
                                <li class="blue" style="background: #60b3f3"></li>
                            </ul>
                        </div>
                        <div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
                            <span>Quantity:</span>
                            <div class="quantity_selector">
                                <span class="minus"><i class="fa fa-minus"  ></i></span>
                                <span id="quantity_value">1</span>
                                <span class="plus"><i class="fa fa-plus"  ></i></span>
                            </div>
                            <div class="cart_button add_to_cart_button"><a href="#">add to cart</a></div>

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
                                <li class="tab" data-active-tab="tab_3"><span>Reviews (2)</span></li>
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
                                    <p>COLOR:<span>Gold, Red</span></p>
                                    <p>SIZE:<span>L,M,XL</span></p>
                                </div>
                            </div>
                        </div>

                        <div id="tab_3" class="tab_container">

                            <div class="row">

                                <div class="col-lg-6 reviews_col">
                                    <div class="tab_title reviews_title">
                                        <h4>Reviews (2)</h4>
                                    </div>



                                    <div class="user_review_container d-flex flex-column flex-sm-row">
                                        <div class="user">
                                            <div class="user_pic"></div>
                                            <div class="user_rating">
                                                <ul class="star_rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="review_date">13 March 2017</div>
                                            <div class="user_name">Amira Mohamed</div>
                                            <p>What's not to like? This fragrance is absolutely gorgeous and perfect, and much cheaper here than anywhere else. I got the 3.4 oz for the same price as the 1.7 oz is sold in stores. Plus I received the item way ahead of schedule, like, under a week. Awesome.</p>
                                        </div>
                                    </div>


                                    <div class="user_review_container d-flex flex-column flex-sm-row">
                                        <div class="user">
                                            <div class="user_pic"></div>
                                            <div class="user_rating">
                                                <ul class="star_rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <div class="review_date">27 Aug 2017</div>
                                            <div class="user_name">Sarah Atef</div>
                                            <p>This is my favorite perfume. As a JH teacher students often tell me I smell good. That is high praise indeed coming from teenagers. It was well packaged and came quickly. I think this is their largest sized bottle.</p>
                                        </div>
                                    </div>
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

    </div>

    <script src="includes/scripts/jquery-3.2.1.min.js"></script>
    <script src="includes/scripts/scripts.js"></script>
    <script src="includes/scripts/product.js"></script>
</body>

</html>
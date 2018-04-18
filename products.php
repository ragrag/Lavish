<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products</title>
    <link href="includes/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <meta name="description" content="An interactive getting started guide for Brackets.">

    <link rel="stylesheet" type="text/css" href="includes/styles.css">

    <link rel="icon" href="images/logo_black.ico">

    <link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body class="body" style="display:none;" onload="fade()">

    <?php
        $user = 'root';
        $password = '';
        $db = 'lavishdb';
        $db = new mysqli('localhost',$user, $password,$db) or die("Unable to connect!");                                        
    ?>
	
<?php 
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>

       

	<div  style="position:absolute;padding-top:1%;	" class="breadcrumbs d-flex flex-row align-items-center">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li class="active"><a href="#"><i class="fa fa-angle-right"  ></i>Eyes</a></li>
		</ul>
	</div>
	
    <div id="products" class="main-body" >
        <a id="backtotop"></a>
        <div class="dropdown">
            <button class="drop-button">Sort by</button>
            <ul class="dropdown-menu">
                <li>
                    <button id="byPrice">Price</button>
                </li>
                <li>
                    <button id="byName">Name</button>
                </li>

            </ul>
        </div>

        <div class="row">
            <div class="rtcolumn">

                <h4>Brand</h4><br>


            <h5 class="check_tag"> 
				<input type="radio" name="brand" value="stila">Stila<br>
			</h5>				


            <h5 class="check_tag"> 
				<input type="radio" name="brand" value="tarte"> Tarte<br>	
			</h5>

            <h5 class="check_tag"> 
					<input type="radio" name="brand" value="colourpop"> Colourpop<br>
			</h5>
          
            <h5 class="check_tag"> 
					<input type="radio" name="brand" value="all"> None<br>
			</h5>
			
                <div class="filter_button" onclick="filter()"><span>filter</span></div>

            </div>

            <div class="table">

                <div class="row">
                    <div class="column stila">
                        <div class="product-item">
                            <div class="product_filter">
                                <div class="product_image">

                                    <a href="product.php?id=12" name="id"><img alt="Product Image" src="images/metal_stila.jpg" ></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Matte n' metal
                                    </h6>
                                    <div class="product_price"> 890</div>
                                </div>
                            </div>
                            <div class="add_to_cart_button">
                                <a href="#">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="column stila">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/perfect_stila.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Perfect me, perfect hue
                                    </h6>
                                    <div class="product_price">670</div>
                                </div>
                            <div class=" add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column stila">
                        <div class="product-item">
                                <div class="product_image">

                                    <a href="product.php"><img alt="Product Image" src="images/window_stila.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Window shadow
                                    </h6>
                                    <div class="product_price">865</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column stila">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/vault_stila.jpg" ></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Stellar gaze vault 
                                    </h6>
                                    <div class="product_price">3450</div>
                                </div>
                            <div class="black_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column colourpop">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/col_atHello.jpg" ></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">You had me at hello
                                    </h6>
                                    <div class="product_price">317</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column colourpop">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/col_endo.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">In-nude-endo
                                    </h6>
                                    <div class="product_price">317</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column colourpop">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/col_lokey.jpg" ></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Lo-key
                                    </h6>
                                    <div class="product_price">212</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column colourpop">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/col_bus.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Unfinished business
                                    </h6>
                                    <div class="product_price">388</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/tarte_mermaid.jpg"></a>

                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Be a mermaid
                                    </h6>
                                    <div class="product_price">1000</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">

                                    <a href="product.php"><img alt="Product Image" src="images/tarte_money.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Your money maker
                                    </h6>
                                    <div class="product_price">800</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/tarte_paint.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Paint pretty
                                    </h6>
                                    <div class="product_price">240</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/tarte_rainforest.jpg"></a>

                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Rainforest of the sea
                                    </h6>
                                    <div class="product_price">900</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/tarte_maneater.jpg"></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Maneater vol. 2
                                    </h6>
                                    <div class="product_price">800</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/tarte_magic.jpg" ></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Make magic happen
                                    </h6>
                                    <div class="product_price">800</div>
                                </div>
                        </div>
                    </div>
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                    <a href="product.php"><img alt="Product Image" src="images/tarte_clay.jpg" ></a>
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Tartellete in bloom clay
                                    </h6>
                                    <div class="product_price">1000</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
                        </div>
                    </div>
                    <div class="column tarte">
                        <div class="product-item">
                                <div class="product_image">
                                   <img alt="Product Image" src="images/tarte_flirt.jpg">
                                </div>
                                <div class="product_info">
                                    <h6 class="product_name">Tartelette flirt
                                    </h6>
                                    <div class="product_price">600</div>
                                </div>
                            <div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
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
            <p class="footer-company-name">Copyright&copy; 2018 Lavish,
                <a href="terms.php"> Terms of Use</a> |
                <a href="policy.php"> Privacy Policy</a>
            </p>
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
    <script src="includes/scripts/filter.js"></script>
</body>

</html>
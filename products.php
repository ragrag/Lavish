


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


	<p id="type" style="display:none"><?php echo $_GET['type'] ?></p>
<?php 
require 'db_connect.php';
$conn = OpenCon();
session_start();
if(isset($_SESSION['user_login']))
	include 'header_logged.php'; 
else include 'header_not_logged.php'; 
?>

       
<script>
function filter_brand()
{
var brand = $("input:radio[name='brand']:checked").val();
var type = document.getElementById("type").innerHTML;
var url = "products.php?type="+type+"&filter="+brand;
window.location.href = url;

}
</script>
	<div  style="position:absolute;padding-top:1%;	" class="breadcrumbs d-flex flex-row align-items-center">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li class="active"><a href="#"><i class="fa fa-angle-right"  ></i><?php echo $_GET['type']; ?></a></li>
		</ul>
	</div>
	
    <div id="products" class="main-body" >
        <a id="backtotop"></a>
        <div class="dropdown">
            <button class="drop-button">Sort by</button>
            <ul class="dropdown-menu">
                <form method="post">
					<li>
						<button id="byPrice" type="submit" name="price">Price</button>
					
					</li>
					<li>
						<button id="byName" type="submit" name="name">Name</button>
					</li>
				</form>	
            </ul>
        </div>

        <div class="row">
            <div class="rtcolumn">

                <h4>Brand</h4><br>
<?php 

$type = $_GET['type'];
	$query = "SELECT DISTINCT p_brand FROM product WHERE p_type='$type' ";
					$products= mysqli_query($conn,$query);
				while ($prod = mysqli_fetch_array($products))
				{
					$b = $prod ['p_brand'];
					
					echo" <h5 class='check_tag'> 
				<input type='radio' name='brand' value='$b'>$b<br>
			</h5>";
					
				}



?>

            <h5 class="check_tag"> 
					<input type="radio" name="brand" value="none"> None<br>
			</h5>
			
                <div class="filter_button" onclick="filter_brand()"><span>filter</span></div>

            </div>
<script>
			function add_cart(pid)
{

 var quantity= 1;

 
  $.ajax
  ({
  type:'post',
  url:'addtocart.php',
  data:{
   cartadd:"cart add",
   quantity:quantity,
   pid:pid
  },
  success:function(response) {

  if(response == 1)
  {
	  window.location.replace("cart.php");
  }
  else if (response == 0)
  {
	  alert("Item Already In Cart");
  }
  else 
  {
    alert("Please Login");
  }
  }
  });
  
}
 </script>
			
			<?php

				$type = $_GET['type'];
		
				
				
				
				
				if(isset($_POST['price'])){
					$byPrice = "SELECT * FROM product WHERE p_type='$type' ORDER BY price";
					$products= mysqli_query($conn,$byPrice);
				}
				else if(isset($_POST['name'])){
					$byName= "SELECT * FROM product WHERE p_type='$type' ORDER BY p_name";
					$products= mysqli_query($conn,$byName);
				}
				else if(isset($_GET['filter']) && $_GET['filter'] != 'none' )
				{
					$brand = $_GET['filter'];
					$byName= "SELECT * FROM product WHERE p_type='$type' AND p_brand='$brand'";
					$products= mysqli_query($conn,$byName);
					
				}
				else{
					$query = "SELECT * FROM product WHERE p_type='$type'";
					$products= mysqli_query($conn,$query);
				}
				echo "<div class='table'>";
				for ($i =0 ; $i<(mysqli_num_rows($products)/2)+1;$i++)
				{
					echo "<div class='row'>";
						for ($j = 0; $j<4;$j++)
						{
							if (!$row = mysqli_fetch_array($products))
								break;
							$pname = $row ['p_name'];
							$price = $row ['price'];
							$pid = $row ['p_id'];
							$q = "'";
							$brand = $row ['p_brand'];
							$imgurl = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM image WHERE fk_p_id='$pid'")) ['i_url'];
							echo "
							
								<div class='column $brand'>
									<div class='product-item'>
										<div class='product_filter'>
											<div class='product_image'>
												<a href='product.php?id=$pid' name='id'><img alt='Product Image' src='$imgurl' ></a>
											</div>
										<div class='product_info'>
												<h6 class='product_name'>$pname
												</h6>
											<div class='product_price'> $price</div>
										</div>
									</div>
                            <div class='add_to_cart_button'>";?>
                                <a href="javascript:add_cart('<?php echo $pid; ?>')"><?php echo "add to cart</a>
                            </div>
                        </div>
                    </div>";
						}
					echo "</div>";
							
				}
				echo "</div>";
				?>
				
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
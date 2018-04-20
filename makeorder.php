
<?php


session_start();
require 'db_connect.php';

if(isset($_POST['makeorder']))
{

$connect = OpenCon();


$user = $_SESSION['user_login'];

$uid = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM user WHERE U_username='$user'")) ['U_id'];    


$products =  mysqli_query($connect,"SELECT * FROM cart WHERE c_user_id='$uid'");    

$orderquery = "INSERT INTO `order`( `fk_U_id`,  `O_status`) VALUES ('$uid','Placed')";
mysqli_query($connect,$orderquery);
$order_id = mysqli_insert_id($connect);

while ( $product = mysqli_fetch_array($products))
{
	$pid = $product['p_id'];
	$quantity = $product ['quantity'];
	$po_query = "INSERT INTO `product_order`(`fk_p_id`, `fk_o_id`, `quantity`) VALUES ('$pid','$order_id','$quantity')";
	mysqli_query($connect,$po_query);
}

$cart_del = "DELETE FROM `cart` WHERE c_user_id=$uid";
 
 
if (mysqli_query($connect,$cart_del))
 {
  echo 1;
 }
 else
 {
echo 0;  
 }
   
 CloseCon($connect);
 exit();
 
}
else echo -1;
?>
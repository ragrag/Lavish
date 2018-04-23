
<?php  //Adding item to cart 
session_start();
require 'db_connect.php';

if(isset($_POST['cartadd']) && isset($_SESSION['user_login']))
{
	$connect = OpenCon();
	$pid=$_POST['pid'];
	$quantity=$_POST['quantity'];
	$user = $_SESSION['user_login'];
	$uid = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM user WHERE U_username='$user'")) ['U_id'];    
	$query = "INSERT INTO `cart`( `c_user_id`, `p_id`, `quantity` ) VALUES ('$uid','$pid','$quantity')";
	if (mysqli_query($connect,$query))
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
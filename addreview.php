
<?php


session_start();
require 'db_connect.php';

if(isset($_POST['addreview']))
{

$connect = OpenCon();


$user = $_SESSION['user_login'];
$uid = mysqli_fetch_array(mysqli_query($connect,"SELECT * FROM user WHERE U_username='$user'")) ['U_id'];    

$review = $_POST['review'];
$pid = $_POST['pid'];
$rating = $_POST['rating'];

$query = "INSERT INTO `review`( `description`, `rating`, `confirmed`, `fk_p_id`, `fk_u_id`) VALUES ('$review','$rating','0','$pid','$uid')";

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

?>
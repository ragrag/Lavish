
<?php
session_start();
require 'db_connect.php';
if(isset($_POST['do_login']))
{
$connect = OpenCon();
$email=$_POST['email'];
$pass=$_POST['password'];
 
 
$email = stripslashes($email);
$pass = stripslashes($pass);
$email = mysqli_real_escape_string($email);
$pass = mysqli_real_escape_string($pass);
 
$message = "wrong answer"; 
 echo "<script type='text/javascript'>alert('$message');</script>";
  echo "<script type='text/javascript'>alert('$pass');</script>";
$query = mysqli_query($connect, "SELECT * from user WHERE U_username='$email' AND password='$pass'") or die(mysql_error());
   
$rows = mysqli_num_rows($query);

if ($rows == 1)
 {
  $_SESSION['user_login']=$email;
  echo "success";
 }
 else
 {
  echo "fail";
  
 }
 
 CloseCon($connect);
 exit();
}
?>

<?php


session_start();
require 'db_connect.php';
	
if(isset($_POST['plogin']))
{

$connect = OpenCon();
$email=$_POST['emailid'];
$pass=$_POST['password'];

$email = stripslashes($email);
$pass = stripslashes($pass);
$email = mysql_real_escape_string($email);
$pass = mysql_real_escape_string($pass);
 


if($_POST['plogin'] == 'admin')
{
	$query = "SELECT * FROM admin WHERE A_username= '".$email."' and A_password='".$pass."'";
	
}
else 
{
	$query = "SELECT * FROM user WHERE U_username= '".$email."' and U_password='".$pass."'";

}
    $result=mysqli_query($connect,$query);
    $count = mysqli_num_rows($result);

if ($count== 1)
 {

if($_POST['plogin'] == 'admin')
{
	 $_SESSION['admin_login']=$email;
}
else 
{
	 $_SESSION['user_login']=$email;
}
  
  echo 1;
 
 }
 else
 {
	 
	  
  
  echo 2;
  
 }
 
 CloseCon($connect);
 exit();
}
?>
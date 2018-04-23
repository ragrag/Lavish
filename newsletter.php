
<?php	//Add user email to newsletter list
session_start();
require 'db_connect.php';
if(isset($_POST['newsletter']))
{
	$connect = OpenCon();
	$email = $_POST['email'];
	 
	if (mysqli_query($connect,"INSERT INTO `newsletter`(`email`) VALUES ('$email')"))
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
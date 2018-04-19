<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
	<title>Admin | Login</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">
	<link rel="stylesheet" href="../includes/styles.css">
</head>

<body class="log-body">
	<?php 
session_start();
if(isset($_SESSION['admin_login']))
{
 header("Location: dashboard.php");
exit();
}
?>
	<div id="admin">
	<script>
			
function do_login()
{
	
 var email=$("#userN").val();
 var pass=$("#userP").val();
 if(email!="" && pass!="")
 {
	
  $.ajax
  ({
  type:'post',
  url:'../login.php',
  data:{
   plogin:"admin",
   emailid:email,
   password:pass
  },
  success:function(response) {

  if(response == 1)
  {
	   
	  location.reload();
  }
  else
  {
    alert("Wrong Username/Password combination");
  }
  }
  });
 }

 else
 {
  alert("Please Fill All The Details");
 }

 return false;
}	
	</script>
	
	
	
	<form id="formaction" class="login" autocomplete="off" method="post" action="../login.php" onsubmit="return do_login();">
		<h3 class="admin-head">Admin log in</h3>
		<div class="in-left">
			<input id="userN" class="inputt" type="text" name="username" placeholder='Admin name' onfocus="inpfocus(this)" onblur="inpblur(this)" 
			 required="required">
			<i class="fas fa-user"></i>
		</div>
		<div class="in-right">
			<input id="userP" class="inputt" type="password" name="password" placeholder="password" onfocus="inpfocus(this)" onblur="inpblur(this)"
			 required="required">
			<i class="fas fa-unlock-alt"></i>
		</div>
		
		<input class="inputs" type="submit" name="login-bottom" value="login">

	</form>


	<script src="../includes/scripts/jquery-3.2.1.min.js"></script>
	<script src="../includes/scripts/adminscript.js"></script>
	</div>
</body>

</html>
	<div id="header">
        <header class="header-two-bars">
            <div class="header-first-bar">
                <div class="header-limiter">
                    <h1><a href="home.php"><img alt="Lavish Logo" id="header_logo" src="images/logo_black.png"/></a></h1>
                    <a href="#" id="login-btn" class="logout-button">Login</a>
                    <a href="register.php" class="logout-button">Sign Up</a>
                </div>
            </div>
            <div class="header-second-bar">
                <div class="header-limiter">
                    <nav class="navtop"><b>
                    <a href="products.php?type=Face">Face</a>
					<a href="products.php?type=Lips">&ensp; Lips</a>
					<a href="products.php?type=Eyes">&ensp; Eyes</a>
					<a href="products.php?type=Fragrances">&ensp; Fragrances</a></b>
                    </nav>
                </div>
            </div>
        </header>

	<script>			
		function do_login()
		{
		 var email=$("#emailid").val();
		 var pass=$("#password").val();
		 if(email!="" && pass!="")
		 {
		  $.ajax
		  ({
		  type:'post',
		  url:'login.php',
		  data:{
		   plogin:"user",
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
	
	
		<div class="signIn">
            <div class="form">
                <form class="login-form" method="post" action="login.php" onsubmit="return do_login();" >
                    <input type="text" name="emailid" id="emailid" placeholder="Username" />
                    <input type="password" name="password" id="password" placeholder="Password" />

                    <button type="submit" name="plogin" value="DO LOGIN" id="login_button" >login</button>
                    <p class="message">Not registered? <a href="register.php">Create an account</a></p>
                </form>
            </div>
        </div>
    </div>


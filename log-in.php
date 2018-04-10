<!Doctype html>
<html>
<head>
<title>Admin Login</title>
<link rel="icon" href="images/logo1.jpg">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="Login_v12/images/icons/logo1.jpg"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v12/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v12/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v12/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v12/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="Login_v12/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v12/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="Login_v12/css/util.css">
	<link rel="stylesheet" type="text/css" href="Login_v12/css/main.css">
<!--===============================================================================================-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- <style>
.margin
{
	margin-top:15px;
}
</style> -->

</head>

<body>
<!--LOGIN FORM-->
<!-- <form action="loginmodule.php" method="post">
<div class="margin">
Enter username :
<input type="text"  name="username" value=""/>
</div>
<div class="margin">
Enter Password:
<input type="password"  name="password" value="" />
</div>
<div class="margin">
<input type="submit"  name="login" value="Login"/>
</div>
</form> -->

<div class="limiter">
		<div class="container-login100" style="background-image: url('Login_v12/images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
				<form action="loginmodule.php" method="post" class="login100-form validate-form">
					<div class="login100-form-avatar">
						<img src="Login_v12/images/logo1.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						WINDMILL VENTURES LIMITED
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button type="submit"  name="login" value="Login" class="login100-form-btn">
							Login
						</button>
					</div>
				
				 	<div class="text-center w-full p-t-25 p-b-230">
						<a href="registration.php" class="txt1">
							Create new Admin account
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--end of form-->

<!--===============================================================================================-->	
	<script src="Login_v12/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v12/vendor/bootstrap/js/popper.js"></script>
	<script src="Login_v12/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v12/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="Login_v12/js/main.js"></script>

</body>
</html>
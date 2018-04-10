<!Doctype html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="icon" href="images/logo1.jpg">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<!-- Website CSS style -->
		<link rel="stylesheet" type="text/css" href="css/registration.css">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>


<!-- <style>
.margin
{
margin-top:15px;
}
</style> -->
<!-- </head>
<body>
 <!--Registration form -->
 <!-- <form action="registerre.php" method="post">
<div class="margin">
Enter Name:
<input type="text" name="name" />
</div>
<div class="margin">
Enter Username:
<input type="text" name="username"/>
</div>
<div class="margin">
Enter Password:
<input type="password" name="password"/>
</div>
<div class="margin">
Enter E-mail Id:
<input type="email" name="email"/>
</div>
<div class="margin">
<input type="submit" name="Register" value="submit"/>
</div>
</form> -->
 <!--end of form
 <!-- <div>
 	Already have an accout <a href="log-in.php">Log in</a> Here.
 </div>  --> 

<div class="container">
				<p><center><strong>Admin Registration</strong></center></p>
				<br>
				<br/>
				<div class="main-login main-center">
					<form action="registerre.php" method="post" class="form-horizontal">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" name="name" class="form-control" id="name"  placeholder="Enter your Name"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" name="username" class="form-control" id="username"  placeholder="Enter your Username"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" name="email" class="form-control" id="email"  placeholder="Enter your Email"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button  type="submit" name="Register" value="submit" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="log-in.php">Login</a>
				         </div>
					</form>
				</div>
			</div>
		</div>

		<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>
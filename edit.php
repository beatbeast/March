<?php
	include('conn.php');
	$id=$_GET['id'];
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	$query=mysqli_query($conn,"select * from `requests` where id=".$id);
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/laolu.css">
    <!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"></script>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/logo1.jpg">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap2.3.2.min.js"></script>
  	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, shrink-to-fit=no">
   <style>
     section, div {
  height: ;
}

body {
  color: #dee2e6;
  font-size: 1.25rem;
  line-height: 100%;
}

article {
  position: relative;
  top: 50%;
  bottom: 50%;
  text-align: center;
  transform: translate(0, -50%);
  padding: 0.5rem;
}

h1 {
  font-size: 1.75rem;
  margin: 0 0 0.75rem 0;
}

/* Pattern styles */
.container {
  display: grid;
}

.left-half {
  background: green;
  grid-column: 1;
  padding: 20px;
}

.right-half {
  background: white;
  grid-column: 2;
}
.btn{
    height:100px;
    width:200px;
}
</style>
</head>
<body>
	<nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">  
              <a class="navbar-brand" href="laolu.html">Windmill Ventures Limited</a>
            </div>
            <div float="right" text="white">
                <a href="adminpage.php">Admin Page</a> 
                <a href="log-out.php">Logout</a>
            </div>
          </div>
        </nav> 


        
	<!-- <h2>Edit</h2>
	<form method="POST" action="update.php">
		<label>First Name:</label><input type="text" value="<?php //echo $row['firstname']; ?>" name="firstname">
		<label>Last Name:</label><input type="text" value="<?php //echo $row['lastname']; ?>" name="lastname">
		<label>E-mail:</label><input type="email" value="<?php //echo $row['email']; ?>" name="email">
		<label>Phone Number:</label><input type="tel" value="<?php //echo $row['phonenumber']; ?>" name="phonenumber">
		<input type="hidden" value="<?php //echo $row['id']; ?>" name="id">
		<label>Message:</label><input type="text" value="<?php //echo $row['message']; ?>" name="message">
		<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		<button type="back" class="btn btn-danger">Back</button>
	</form> -->
<section class="container">
<div class="well left-half">
	<article>
        <forms method="POST" action="update.php">
            <label><h1>First Name</h1></label><br><br/>
            <input type="text" value="<?php echo $row['firstname']; ?>" name="firstname" class="form-control"><br><br/>
            <label><h1>Last Name</h1></label><br><br/>
            <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" class="form-control"><br><br/>
            <label><h1>Email</h1></label><br><br/>
            <input type="email" value="<?php echo $row['email']; ?>" name="email" class="form-control"><br><br/>
            <label><h1>Phone Number</h1></label><br><br/>
            <input type="tel" value="<?php echo $row['phonenumber']; ?>" name="phonenumber" class="form-control"><br><br/>
            <label><h1>Message</h1></label><br><br/>
            <input type="text" value="<?php echo $row['message']; ?>" name="message" class="form-control"><br><br/>
            </article>
        </div>

            <div class="right-half">
            	<article>
          	<div>
        	    <!--<button class="btn btn-primary">Update</button>-->
        	    <button type="submit" name="submit" class="btn btn-primary">Update</button><Br><br/>
        	    <br><br/>
        	    <br><br/>
        	    <br><br/>
				<a href="adminpage.php"><button type="back" class="btn btn-danger">Back</button></a><br><br/>
        	</div>
        	</article>
        	</div>
        </form>
      </div>
      
  </div>
</div>
</section>
<style>
.footer {
    display: block;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: grey;
    text-align: center;
    padding: 10px;
}
</style>

<div class="footer">
  <p><center><!--©--> &copy; 2018 Copyright: <a href="laolu.html">Windmill Ventures Limited.</a> Designed by: <a href="https://twitter.com/_beatbeast_">@beatbeast</a></center> </p>
</div>    	
</body>
</html>
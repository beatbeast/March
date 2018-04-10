<?php
	include('conn.php');
	$id=$_POST['id'];
 
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phonenumber=$_POST['phonenumber'];
	$message=$_POST['message'];
 
 $result = mysqli_query($conn,"update `requests` SET firstname='$firstname', lastname='$lastname', email='$email', phonenumber='$phonenumber', message='$message' where id=".$id);
 echo $result;
	if ($result) 
  {
  	header('location:adminpage.php');
  }
  else{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
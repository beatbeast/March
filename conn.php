<?php
$conn = mysqli_connect("localhost","root","","windmill_ventures_limited");
 
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
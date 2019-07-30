<?php
$db="pen-paper";
$username="root";
$password="";
$host="127.0.0.1";
$conn=mysqli_connect($host,$username,$password,$db);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  //echo "Successfully Connected";
 ?>

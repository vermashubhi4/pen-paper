<?php

include 'dbconnect.php';

$uname=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["password"];

if(isset($uname) && isset($email) && isset($pass))
{
  $qry = "INSERT INTO `userinfo`(`username`, `email`, `password`) VALUES ('$uname','$email', '$pass')";
  $result = mysqli_query($conn,$qry);
  if($result)
     echo"true";
    else {
      echo "Error: " . $qry . "<br>" . mysqli_error($con);
    }
    header("Location:signin.html");
}
else{
  $msg="ENTER CORRECT VALUES";
  header("Location:index.php?msg=".$msg);
}

 ?>

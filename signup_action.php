<?php

include 'dbconnect.php';

$uname=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["password"];
$defaultprofilepic="assets/images/profilepic.png";

if(isset($uname) && isset($email) && isset($pass))
{
  $qry = "INSERT INTO `userinfo`(`username`, `email`, `password`,`profilepic`) VALUES ('$uname','$email', '$pass','$defaultprofilepic')";
  $result = mysqli_query($conn,$qry);
  if($result)
     echo"true";
    else {
      echo "Error: " . $qry . "<br>" . mysqli_error($con);
    }
    header("Location:signin.php");
}
else{
  $msg="ENTER CORRECT VALUES";
  header("Location:index.php?msg=".$msg);
}

 ?>

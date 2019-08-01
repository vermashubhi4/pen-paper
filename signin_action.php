<?php
include 'dbconnect.php';

 $uname=$_POST['username'];
 $pass=$_POST['password'];

 if(isset($uname) && isset($pass))
 {
   $qry = "SELECT `password` FROM `userinfo` WHERE `username`='$uname'";
   $result = mysqli_query($conn,$qry);
   $row=mysqli_fetch_assoc($result);
    //print_r($row);
   if($row['password']==$pass)
   {
     echo "true";
     session_start();
     $_SESSION["USERNAME"]=$uname;

     header("Location:profile.php?uname: ".$uname);
   }
   else{
     $msg="Invalid Arguments";
     header("Location:signin.php?msg= ".$msg);
   }
 }
 ?>

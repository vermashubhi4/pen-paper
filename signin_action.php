<?php
include 'dbconnect.php';

 $uname=$_POST['username'];
 $pass=$_POST['password'];
 $defaultprofilepic="assets/images/profilepic.png";
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


     $qry2="SELECT `profilepic` FROM `userinfo` WHERE `username`='$uname'";
     $result2=mysqli_query($conn,$qry2);
     $row=mysqli_fetch_assoc($result2);
      if($result2){
        echo $row['profilepic'];
        print_r($row['profilepic']);
        echo "<img src='".$row['profilepic']."' />";
        $pp=$row['profilepic'];
        header("Location:profile.php?uname: ".$uname."?profilepic: ". $pp);
      }
      else {
        echo "wtf";
      }
     }
    else{
           $msg="Invalid Arguments";
           header("Location:signin.php?msg= ".$msg);
         }
       }
?>

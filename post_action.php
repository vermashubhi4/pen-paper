<?php
include 'dbconnect.php';
 session_start();
 $uname=$_SESSION["USERNAME"];
 // echo $uname;
 $posts=$_POST['textarea1'];
 // $uname="verma_5";
 // $posts="sabxkbkcqkwclw k";
 if(isset($posts) && isset($uname) && $posts != "")
 {
   $qry= "INSERT INTO `userposts`(`username`, `posts`) VALUES ('$uname','$posts')";
   $result = mysqli_query($conn,$qry);
   if($result)
      echo"true";
     else {
       echo "Error: " . $qry . "<br>" . mysqli_error($conn);
     }
   // $qry2= "SELECT `posts` FROM `userposts` WHERE `username`='$uname'";
   // $result2=mysqli_query($conn,$qry2);
      header("Location:profile.php");
      // header("Location:profile.php?msg: ".$posts);
 }
 else {
   echo 'Input some posts';
   header("Location:profile.php?msg: ".$posts);
 }
 ?>

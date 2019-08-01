<?php
include 'dbconnect.php';
 session_start();
 $uname=$_SESSION["USERNAME"];
 // echo $uname;
 $posts=$_POST['textarea1'];
 if(isset($posts) && isset($uname))
 {
   $qry= "INSERT INTO `userposts`(`username`, `posts`) VALUES ('$uname','$posts')";
   $result = mysqli_query($conn,$qry);
   if($result)
      echo"true";
     else {
       echo "Error: " . $qry . "<br>" . mysqli_error($con);
     }
      header("Location:home.php?msg: ".$posts);
 }
 else {
   echo 'Input some posts';
 }
 ?>

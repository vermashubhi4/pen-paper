<?php
 include 'dbconnect.php';

 if(isset($_POST['edit']))
 {
   $post=$_POST['post'];
   $postid=$_POST['postid'];
   session_start();
   $uname=$_SESSION["USERNAME"];
   $qry = "UPDATE `userposts` SET `posts`='pph' WHERE `Post_id`='$postid'";
   $result=mysqli_query($conn,$qry);
   // header("Location:profile.php");
 }
 if(isset($_POST['delete']))
 {
   // print_r($_POST['post']);
   // print_r($_POST['postid']);
   // exit("error");
   $post=$_POST['post'];
   $postid=$_POST['postid'];
   session_start();
   $uname=$_SESSION["USERNAME"];


   $qry= "DELETE FROM `userposts` WHERE `username`='$uname' AND `posts`='$post' AND `Post_id`='$postid' limit 1";
   $result=mysqli_query($conn,$qry);
   if($result)
      echo "deleted";
   else {
       echo "Error: " . $qry . "<br>" . mysqli_error($conn);
     }

  // $row = mysqli_fetch_assoc($result2);
  // echo $row['Post_id'];
  // $qry2="DELETE FROM `userposts` WHERE `Post_id`=$row['Post_id']";
  // $result2=mysqli_query($conn,$qry2);
  // if($result2)
  //    echo "";
  // else {
  //     echo "Error: " . $qry2 . "<br>" . mysqli_error($conn);
  //   }
   header("Location:profile.php");
 }
 else {
   echo "wtf!!!";
 }
 ?>

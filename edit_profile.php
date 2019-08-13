<?php
 include 'dbconnect.php';
  if(isset($_POST['upload']))
  {
    session_start();
    $uname=$_SESSION["USERNAME"];
    echo "button pressed";
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_temp_loc = $_FILES['file']['tmp_name'];
    $file_store ="upload/".$file_name;

    move_uploaded_file($file_temp_loc,$file_store);
    $qry = "UPDATE `userinfo` SET `profilepic`='$file_store' WHERE `username`='$uname'";
    $result=mysqli_query($conn,$qry);
    // $qry2="SELECT `profilepic` FROM `userinfo` WHERE `username`='$uname'";
    // $result2=mysqli_query($conn,$qry2);
    // $row=mysqli_fetch_assoc($result2);
    //
    //  if($result2){
    //    echo $row['profilepic'];
    //    print_r($row['profilepic']);
    //    echo "<img src='".$row['profilepic']."' />";
    //    $pp=$row['profilepic'];
    //
    //  }
    //  else {
    //    echo "wtf";
    //  }
    // print_r($file);
     header("Location:profile.php?uname: ".$uname."?profilepic: ". $pp);
  }

  if(isset($_POST['textarea2']))
  {
    $bio=$_POST['textarea2'];
    session_start();
    $uname=$_SESSION["USERNAME"];
    $qry = "UPDATE `userinfo` SET `bio`='$bio' WHERE `username`='$uname'";
    $result=mysqli_query($conn,$qry);
    header("Location:profile.php?uname: ".$uname."?profilepic: ". $pp);

  }
 ?>

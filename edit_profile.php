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
    $qry2="SELECT `profilepic` FROM `userinfo` WHERE `username`='$uname'";
    $result2=mysqli_query($conn,$qry2);
    $row=mysqli_fetch_assoc($result2);
    // print_r($file);

 ?>
  <script type="text/javascript">
    document.getElementById('avatar').innerHTML= <?php  echo "<img src='".$row['profilepic']."' />";?>;
  </script>

<?php
header("Location:profile.php");
 } ?>

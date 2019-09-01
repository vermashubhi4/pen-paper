<?php
include 'dbconnect.php';
session_start();
$uname=$_SESSION["USERNAME"];
$qry2="SELECT `posts`,`Post_id` FROM `userposts` WHERE `username`='$uname' ORDER BY `Post_id` DESC";
$result2=mysqli_query($conn,$qry2);
if($result2)
  echo "";
else {
   echo "Error: " . $qry2 . "<br>" . mysqli_error($conn);
 }
if (mysqli_num_rows($result2) > 0) {
  // array_reverse($result2);

        while($row = mysqli_fetch_assoc($result2)) {
          echo `<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>`;
                echo "<br><br>";
         }
       }
 ?>

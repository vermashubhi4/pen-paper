<?php
 include 'dbconnect.php';
  session_start();
  if(!isset($_SESSION["USERNAME"]))
  header("Location:signin.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body>
    <!-- Navigation bar starting -->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper cyan darken-4 mynavbar">
          <a href="#!" class="brand-logo margin_left_5">PEN-PAPER</a>
          <ul class="right">
            <li><a href="logout_action.php">Log Out</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Navigation bar ending -->

<div class="left userinfo">

  <img src="assets/images/profilepic.png" alt="Avatar" class="circle avatar" >
  <a class="waves-effect waves-light btn">edit</a>
  <br>
  <h6 id="uname">Hello, <span name='uname' id='username'><?php  echo $_SESSION["USERNAME"] ?> </span></h6>
  <p class="bio"><span id="bio">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></p>
</div>
<!-- <div class="center">
  <div class="vl">
  </div>
</div> -->
<div class="userpost">
<div class="posts">
  <div class="row">
    <form action="post_action.php" method="post" class="col s12">
      <div class="row">
        <div class="input-field col s10">
          <textarea name="textarea1" id="textarea1" class="materialize-textarea" onkeyup="stoppedTyping()"></textarea>
          <!-- <label for="textarea1">Textarea</label> -->
        </div>
      </div>
      <input class="waves-effect waves-light btn mysigninbtn" type="submit" name="post" value="Post" id="post" onclick="verify()" disabled>
    </form>
  </div>
  <div class="row">
    <div class="col s10" id="new_post">
dguqdblqkqax
    </div>
  </div>
</div>

<?php
 $uname=$_SESSION["USERNAME"];
$qry2="SELECT `posts` FROM `userposts` WHERE `username`='$uname'";
$result2=mysqli_query($conn,$qry2);
if($result2)
   echo "";
else {
    echo "Error: " . $qry2 . "<br>" . mysqli_error($conn);
  }
if (mysqli_num_rows($result2) > 0) {
         while($row = mysqli_fetch_assoc($result2)) {
            echo $row["posts"]. "<br>";}}
 ?>

 <!-- <script type="text/javascript">
 var iDiv = document.createElement('div');
 iDiv.id = 'new_post';
 iDiv.className = 'row';
 document.getElementsByTagName('body')[0].appendChild(iDiv);

 // Now create and append to iDiv
 var innerDiv = document.createElement('div');
 innerDiv.className = 'col s10';

 // The variable iDiv is still good... Just append to it.
 iDiv.appendChild(innerDiv);

 innerDiv.innerHTML=;
 </script>-->

  </div>

  <script type="text/javascript">
    function stoppedTyping(){
        if(document.getElementById('textarea1')!= "") {
            document.getElementById('post').disabled = false;
        } else {
            document.getElementById('post').disabled = true;
        }
    }
    function verify(){
        if (document.getElementById('textarea1')==""){
            alert ("Put some text in there!")
            return
        }
        else{
             document.getElementById('post').disabled = false;
        }
    }
</script>

  </body>
</html>

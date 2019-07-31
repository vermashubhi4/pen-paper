<?php
  session_start();
  if(isset($_SESSION["USERNAME"]))
  header("Location:profile.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
  <body class="lime lighten-4">

    <!-- Navigation bar starting -->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper cyan darken-4 mynavbar">
          <a href="#!" class="brand-logo margin_left_5">PEN-PAPER</a>
          <ul class="right">
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="index.php">Sign Up</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Navigation bar ending -->
<div class="left first_section">

</div>
<div class="center second_section">
    <div class="container">
      <div class="row">
 <form class="col s12 blue-grey lighten-5 mycontainer2" name="signinform" action="signin_action.php" method="post">
  <div class="row">
    <div class="input-field col s8 offset-s2">
      <input id="username" name="username" type="text" class="validate" required autocomplete="username">
      <label for="username" >USERNAME</label>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s8 offset-s2">
      <input id="password" name="password" type="password" class="validate" required autocomplete="password">
      <label for="password">PASSWORD</label>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </div>
  <input class="waves-effect waves-light btn mysigninbtn" type="submit" name="signin" value="SIGN IN">
</form>
</div>

    </div>
  </div>
  <!-- <div class="right third_section">
    vyjvk
  </div> -->
 <?php
  if(isset($msg)){
  ?>
  <script type="text/javascript">
    alert("<?php echo $_GET['msg']; ?>");
  </script>

  <?php
   }
   ?>
    <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  </body>
</html>

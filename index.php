<?php
  session_start();
  if(isset($_SESSION["USERNAME"]))
  header("Location:profile.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/materialize/css/materialize.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <title></title>
  </head>
  <body class="lime lighten-4">

    <!-- Navigation bar starting -->
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper cyan darken-4 mynavbar">
          <a href="#!" class="brand-logo margin_left_5">PEN-PAPER</a>
          <ul class="right">
            <li><a href="signin.php">Sign In</a></li>
            <li><a href="index.php" >Sign Up</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Navigation bar ending -->

    <div class="left info ">
      <div class=" inside_info">
        <h3>Welcome to the world of</h3> <h2>ink-less pen & paper-less paper.</h2>
      </div>
    </div>
    <div class="right signup">
      <div class="row">
 <form class="container col s12 blue-grey lighten-5 mycontainer1" name="signupform" action="signup_action.php" method="post" >
  <div class="row">
    <div class="input-field col s8 offset-s2 ">
      <input id="username" name="username" type="text" class="validate" required autocomplete="username">
      <label for="username">USERNAME</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-s2">
      <input id="email" name="email" type="email" class="validate" required autocomplete="email">
      <label for="email">EMAIL</label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s8 offset-s2">
      <input id="password" name="password" type="password" class=" validate" required autocomplete="password">
      <label for="password">PASSWORD</label>
    </div>
  </div>
  <input  class="waves-effect waves-light btn mysignupbtn" type="submit" name="signup" value="SIGN UP">
</form>
</div>

  </div>

  <?php
    if(isset($msg)){
   ?>
   <script type="text/javascript">
     alert("<?php echo $_GET['msg'] ?>");
   </script>

 <?php } ?>

  <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
  </body>
</html>

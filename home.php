<?php
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
            <li><a href="signin.php">Log Out</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Navigation bar ending -->
<!-- <div class="postsonhome">
  <table class="center">

  <tbody>
    <tr>
      <td>"
      <span>
      <?php if(isset($_GET['posts'])){
        echo $posts;
      } ?>
      </span>
      "</td>
    </tr>
    <tr>
      <td>Alan</td>
    </tr>
    <tr>
      <td>Jonathan</td>
    </tr>
  </tbody>
  </table>
</div> -->
  </body>
</html>

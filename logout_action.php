<?php
include 'dbconnect.php';

session_start();
if(isset($_SESSION["USERNAME"]))
  unset($_SESSION["USERNAME"]);

header("Location:signin.php");

 ?>

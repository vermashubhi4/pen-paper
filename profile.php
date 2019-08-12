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
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


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

  <!-- <img src="upload/PhotoGrid_1467199291609.jpg" alt="Avatar" class="circle avatar " >
  <input class="waves-effect waves-light btn " name="post" value="Edit" id="changeProfilePicbtn" onclick="document.getElementById('file-input').click();">
  <button onclick="document.getElementById('file-input').click();">Open</button>
 <input id="file-input" type="file" name="name" style="display: none;" /> -->


 <form method="post" action="edit_profile.php" enctype="multipart/form-data">
   <div  id="avatar">
     <!-- <img src="upload/PhotoGrid_1467199291609.jpg" alt="Avatar" class="circle avatar " > -->
   </div>
   <input type="file" name="file" >
   <input type="submit" value="Upload image" name="upload" >
 </form>
 <?php

 $uname=$_SESSION["USERNAME"];
 $qry2="SELECT `profilepic` FROM `userinfo` WHERE `username`='$uname'";
 $result2=mysqli_query($conn,$qry2);
 $row=mysqli_fetch_assoc($result2);
  if($result2){
    // echo $row['profilepic'];
    // print_r($row['profilepic']);
    // echo "<img src='".$row['profilepic']."' />";
    $pp=$row['profilepic'];
    // echo "<img src='".$pp."' />";
 // if(isset($pp))
 // {
  // echo "<img src='".$pp."' />";

 ?>
 <script type="text/javascript">
 // <img src='" .$row['profilepic']."' />;
 // document.getElementById('avatar').innerHTML="xhdbqadkbjlq";
   document.getElementById('avatar').innerHTML= "<?php echo "<img src='".$pp."' class='circle' width='150px' height='150px' margin='5px' padding='5px'/>  "; ?>";
 </script>
 <?php
 }
 else {
   echo "path not found";
 }
 ?>
  <h6 id="uname">Hello, <span name='uname' id='username'><?php  echo $_SESSION["USERNAME"] ?> </span></h6>

  <p class="bio"><span id="bio">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</span></p>

    <!-- <input class="waves-effect waves-light btn editbtn" type="submit" name="post" value="Edit Bio" id="edit"> -->

    <!-- Modal Trigger -->
    <button data-target="modal1" class="btn modal-trigger">EDIT</button>
  <!-- <a class="waves-effect waves-light btn modal-trigger" href="#modal1">EDIT BIO</a> -->

  </div>


  <!-- <script type="text/javascript">
     $(window).ready(function(){
         $("#modal1").modal('show');
     });
  </script> -->
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
          <!-- <i class="material-icons prefix">mode_edit</i>
          <textarea name="textarea1" id="icon_prefix2" class="materialize-textarea" onkeyup="stoppedTyping()"></textarea>
          <label for="icon_prefix2">First Name</label> -->
          <textarea name="textarea1" rows="10" cols="30"  id="textarea1" onkeyup="stoppedTyping()"></textarea>
           <!-- class="materialize-textarea" removed -->
          <!-- <label for="textarea1">Textarea</label> -->
        </div>
      </div>
      <input class="waves-effect waves-light btn mysigninbtn" type="submit" name="post" value="Post" id="post" onclick="verify()" disabled>
    </form>
  </div>
  <!-- <textarea placeholder="Remember, be nice!" cols="30" rows="5"></textarea> -->

  <!-- <div class="row">
    <div class="col s10" id="new_post">
dguqdblqkqax
    </div>
  </div> -->
</div>

<?php
 $uname=$_SESSION["USERNAME"];
$qry2="SELECT `posts` FROM `userposts` WHERE `username`='$uname' ORDER BY `Post_id` DESC";
$result2=mysqli_query($conn,$qry2);
if($result2)
   echo "";
else {
    echo "Error: " . $qry2 . "<br>" . mysqli_error($conn);
  }
if (mysqli_num_rows($result2) > 0) {
   // array_reverse($result2);

         while($row = mysqli_fetch_assoc($result2)) {

          //  echo $row["posts"]. "<br>";}}
 ?>

 <script type="text/javascript">
 var i
 var iDiv = document.createElement('div');
 iDiv.id = 'new_post';
 iDiv.className = 'row';
 var x=document.getElementsByClassName('userpost');
 x[0].appendChild(iDiv);

 // Now create and append to iDiv
 var innerDiv = document.createElement('div');
 innerDiv.className = 'col s10';

 // The variable iDiv is still good... Just append to it.
 iDiv.appendChild(innerDiv);

 innerDiv.innerHTML="<?php echo $row['posts'];?>";

 </script>
<?php
 }
}
?>

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

<!-- Modal Structure -->
<div id="modal1" class="modal">

  <div class="modal-content">
        <textarea name="editbio" rows="10" cols="80"  ></textarea>
  </div>
  <div class="modal-footer">
    <input class="waves-effect waves-light btn mysigninbtn" type="submit" name="done" value="Done" id="Done"/>

    <!-- <button class="btn modal-trigger">EDIT</button> -->
    <!-- <a href="#!" class="modal-close waves-effect waves-green btn-flat">Done</a> -->
  </div>

</div>

<!-- <script type="text/javascript">
  function stoppedTyping2(){
      if(document.getElementById('textarea2')!= "") {
          document.getElementById('post').disabled = false;
      } else {
          document.getElementById('post').disabled = true;
      }
  }
  function verify2(){
      if (document.getElementById('textarea2')==""){
          alert ("Put some text in there!")
          return
      }
      else{
           document.getElementById('post').disabled = false;
      }
  }
</script> -->

<script type="text/javascript">
 $('.modal').modal({
   dismissible: true
 });
   $(document).ready(function(){
       $("#modal1").modal('open');
   });

</script>

  </body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>communication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--stylesheets-->
  <link rel="stylesheet" type="text/css" href="./css/style.css">
  <!--animations-->
  <link rel="stylesheet" href="./css/animate.min.css">
  <!--BOOTSTRAP-4-->
  <style type="text/css">
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
 li {
  float: left;
  border-right:1px;
}
 li:last-child {
  border-right: none;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  color:#F44336;
}
li a.current {
  background-color:#0B9444;
  color:white;
}
</style>
</head>
<body background="wall.png">
   <nav style="position:fixed;background-color:#0B9444;width:100%;top:0;left:0;">
      <ul style="list-style-type:none;">
        <li style="color:white;text-align:center;display:block;padding: 14px 16px;"><i style="font-family:Messenger;">ST-</i><i>&nbsp COMMUNICATIONS<small>&nbsp Lets Chat</small></i></li>
        <li style="margin-left:350px;"><a href="home.php">HOME</a></li>
        <li ><a href="login.php" class="current">LOGIN</a></li>
        <li ><a href="register.php">REGISTER</a></li>
        <li style="margin-left:500px;"><a href="about.php">ABOUT US</a></li>
      </ul>
   </nav>
</div>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
 <div style="margin-left:550px;margin-right:550px;margin-top:100px;background-color:white;">
    	<section style="border:2px solid black;height:460px;">
    <center>
    	<h1 style="font-family:Sugar;font-size:2.5vw;">Login</h1>
    	<img src="logo2.jpg" alt="no-connection" height="120px" width="120px" class="wow bounceInDown"><br>
    	<form action="" method="post">
    <input type="text" placeholder="Enter Username" name="uname" required=""><br>
    <input type="password" placeholder="Enter Password" name="password" id="myInput" required=""><br>
    <input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()" style="margin-left:5px;">
	<label class="check">Show password</label><span style="margin-right:5px;">
</span><br>
    <button type="submit" name="sbt">Login</button><br><br>
</form>
    </center>
</section>
</div>
<script type="text/javascript">
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<?php 
 if(isset($_POST['sbt']))
 {
  require 'dbconfig.php';
  $uid=$_POST['uname'];
  $pwd=$_POST['password'];
  $r=mysqli_query($conn,"SELECT * FROM login");
  $f=0;
  while($row=mysqli_fetch_assoc($r))
  {
    if(($uid==$row['UserName'])&&($pwd==str_rot13($row['Password'])))
    {
      print_r("Login Allowed");
      $f=1;
      session_start();
      $_SESSION['user']=$uid;
      header("Location:/web/sam.php");
    }
  }
  if($f==0)
  {
    print_r("<script>alert('ID and Password not correct')</script>");
  }
 }
 ?>
 <br>
 <br>
 <?php
include 'footer.php';
?>
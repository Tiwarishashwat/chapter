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
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
  }
  </style>
</head>
<body background="wall.png">
   <nav style="position:fixed;background-color:#0B9444;width:100%;top:0;left:0;">
      <ul style="list-style-type:none;">
        <li style="color:white;text-align:center;display:block;padding: 14px 16px;"><i style="font-family:Messenger;">ST-</i><i>&nbsp COMMUNICATIONS<small>&nbsp Lets Chat</small></i></li>
        <center>
        <li style="margin-left:320px;"><a href="home.php" class="current">HOME</a></li>
        <li ><a href="login.php">LOGIN</a></li>
        <li ><a href="register.php">REGISTER</a></li>
        <li style="margin-left:500px;"><a href="about.php">ABOUT US</a></li>
      </center>
      </ul>
   </nav>
</div>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
<div class="bg-text">
  <h1>YOU ARE SUCCESSFULLY REGISTERED</h1>
  <h2>CLICK ON THE BELOW BUTTON TO SIGN-IN!</h2>
  <button id="anyid">CLICK-ME</button>
</div>
<script type="text/javascript">
  document.getElementById("anyid").onclick=function ()
  {
    open("login.php");
  };
</script>
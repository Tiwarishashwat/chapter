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
.what {
  float:right;
  padding: 20px;
  width: 70%;
  border: 3px solid #f1f1f1;
  border-radius:20px;
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
   /* only for demonstration, should be removed */
}

</style>
</head>
<body background="wall.png">
   <nav style="position:fixed;background-color:#0B9444;width:100%;top:0;left:0;">
      <ul style="list-style-type:none;">
        <li style="color:white;text-align:center;display:block;padding: 14px 16px;"><i style="font-family:Messenger;">ST-</i><i>&nbsp COMMUNICATIONS<small>&nbsp Lets Chat</small></i></li>
        <center>
        <li style="margin-left:350px;"><a href="home.php">HOME</a></li>
        <li ><a href="login.php">LOGIN</a></li>
        <li ><a href="register.php">REGISTER</a></li>
        <li style="margin-left:500px;"><a href="about.php" class="current">ABOUT US</a></li>
      </center>
      </ul>
   </nav>
</div>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
              <section style="margin-top:80px;">
    <span>
      <img src="OC.jpeg" alt="Avatar" style="width:300px;border-radius:50%;margin-left:20px;">
    </span>
      <span class="what">
        <h3 style="color:white;"><i>What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

Why do we use it?
It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).


Where does it come from?
Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
</i></h3>      
<h2 style="color:white;text-align:right;">-Shashwat Tiwari</h2>
     </span>
   </section>
   <?php
include 'footer.php';
?>
 </body>
 </html>

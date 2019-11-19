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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
.footer {
			position:fixed;
            left: 0;
            bottom: 0;
            right: 0;
            background-color:#333;
            color: white;
}
ul#foot li {
  display:inline;
}
</style>
</head>
<body background="wall.png">
     <nav style="position:fixed;background-color:#0B9444;width:100%;top:0;left:0;">
        <ul style="list-style-type:none;">
            <li style="color:white;text-align:center;display:block;padding: 14px 16px;"><i style="font-family:Messenger;">ST-</i><i>&nbsp COMMUNICATIONS<small>&nbsp Lets Chat</small></i></li>
            <center>
            <li style="margin-left:330px;"><a href="home.php">HOME</a></li>
            <li ><a href="login.php">LOGIN</a></li>
            <li ><a href="register.php" class="current">REGISTER</a></li>
            <li style="margin-left:500px;"><a href="about.php">ABOUT US</a></li>
        </center>
        </ul>
   </nav>
</div>
    <script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>
        
<center>
<div style="border:2px solid black;height:1080px; margin-top:100px;width:50%;background-color:white;">
	<h1 style="font-family:Sugar;font-size:2.5vw;">Register-Now</h1>
      <img src="logo2.jpg" alt="no-connection" height="120px" width="120px" class="wow bounceInDown"><br>
		<form method="post" action="db.php" target="_self" onsubmit="return validate()">
			<label>Enter Your Details</label><br>
            <span><input type="text" name="firstName" placeholder="Enter first name" required id="1">
            <input type="text" name="lastName" placeholder="Enter last name" required id="2"></span><br>
            <span><input type="text" name="usern" placeholder="Enter username" required id="3"></span><br>
            <span style="font-family:Messenger;">ST-</span>
            <input type="text" name="mobile" placeholder="Enter mobile number..." minlength="10" maxlength="10" required id="4">
            <span style="font-family:Messenger;">ST-</span><br>
            <label>Enter Your Date of birth:</label>
            <input type="date" name="birthday" style="margin-left:10px;" required id="5"><br><br>
            <label>Gender:</label>
            <input type="radio" name="choice" value="Male" class="edit" required>Male
			<input type="radio" name="choice" value="Female" class="edit" required>Female
			<input type="radio" name="choice" value="Others" class="edit" required>Others<br><br>
            <label>Create your password:</label>
            <input type="password"  placeholder="Enter password" id="yInput" name="pass" required><br>
            <input type="password"  placeholder="Confirm password" id="zInput"  style="margin-left:163px;" required><br>
            <span id="message"></span>	
	<p align="center"><iframe src="t&c.html" style="height:200px;width:600px;"></iframe><br><br>
	<span><input type="checkbox" name="tc" value="tc" required><b>AGREE TO TERMS AND CONDITIONS BEFORE SUBMITTING</b></p></span>
		<p align="center"><button type="reset" >Reset</button>&nbsp<button type="submit" id="btn" name="exists" onclick ="getValue();">Submit</button></p>
	</form>
</div>
</center>
<script type="text/javascript">
    function getValue() {
        var password = document.getElementById("yInput").value;
        var confirmPassword = document.getElementById("zInput").value;
        var fname = document.getElementById("1").value;
		var lname = document.getElementById("2").value;
		var mob = document.getElementById("4").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        else if(fname==null||fname=="")
			{
				alert("Name field cannot be empty");
			}
			else if(lname==null||lname=="")
			{
				alert("surname field cannot be empty");
				return false;
			}
			else if(pass.length<8)
			{
				alert("password length cannot be less than 8");
				return false;
			}
			else if(isNaN(mob))
			{
               alert("Mobile number field can only contain digits");
               return false;
			}
			else
			{
				return true;
			}
        
    }
</script>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="footer">
	<div>
		<ul id="foot" style="width: 100%;">
			<li style="padding-left:10px;text-decoration-style:none;"><a><i>Follow us on:</i></a></li>
			<li><a href="https://www.facebook.com/shashwat.tiwari.313" class="fa fa-facebook"></a></li>
			<li><a href="https://www.linkedin.com/in/shashwat-tiwari-a41461134" class="fa fa-linkedin"></a></li>
			<li><a href="https://www.instagram.com/shashwattiwari17" class="fa fa-instagram"></a></li>
			<li><a href="https://twitter.com/shashwatt89" class="fa fa-twitter"></a></li>
			<!--<li><img src="follow.png" usemap="#image-map"></li>-->
			<li style="margin-left:750px;color:white;"><a>©ST-COMMUNICATIONS.<small>All rights reserved</small></a></li>
	</ul>
	</div>
</div>
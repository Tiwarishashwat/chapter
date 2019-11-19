<?php 
require 'dbconfig.php';
?>
<?php
$username = $_POST['usern'];
  	$sql_u = "SELECT * FROM Login WHERE UserName='$username'";
  	$res_u = mysqli_query($conn, $sql_u);
  	if (mysqli_num_rows($res_u) > 0) {
  	  echo '<script language="javascript">';
      echo 'alert("user already exists")';
      echo '</script>'; 	
  	}
  	else
  	{
    $pro=$_POST['pass'];
    $encoded = str_rot13($pro); 
    $query = mysqli_query($conn,"INSERT INTO Register (FirstName, LastName, UserName, ContactNo, DOB, Gender,Password)VALUES('$_POST[firstName]','$_POST[lastName]','$_POST[usern]','$_POST[mobile]','$_POST[birthday]','$_POST[choice]','$encoded')") or die(mysqli_error($conn));
    $again = mysqli_query($conn,"INSERT INTO Login (UserName, Password)VALUES('$_POST[usern]','$encoded')") or die(mysqli_error($conn));
    header("Location:/web/registered.php");
}
?>

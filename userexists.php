<?php
  	$username = $_POST['usern'];
  	$sql_u = "SELECT * FROM Login WHERE UserName='$username'";
  	$res_u = mysqli_query($conn, $sql_u);
  	if (mysqli_num_rows($res_u) > 0) {
  	  echo '<script language="javascript">';
      echo 'alert("message successfully sent")';
      echo '</script>'; 	
  	}
?>
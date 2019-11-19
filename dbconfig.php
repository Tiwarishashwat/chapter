<?php
$user='root';
$pass='Stiwari1999';
$host='localhost';
$db='Ogi';
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn)
{
	echo"check your internet";
	die("error");
}
?>

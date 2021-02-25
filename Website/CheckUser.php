<?php
$username=$_GET['uname'];
include('DBConnection.php');
$query='select username from users where username="'.$username.'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
if($n==0)
	echo "Username is valid";
else
	echo "Username already exist";
mysqli_close($con);
?>
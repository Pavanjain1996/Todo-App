<?php
session_start();
$pass=$_POST['password'];
include('DBConnection.php');
$query='update users set password="'.$pass.'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
unset($_SESSION['username']);
$_SESSION['logstatus']='NO';
header('location:Index.php');
?>
<?php
session_start();
include('DBConnection.php');
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$query='update users set name="'.$name.'", age='.$age.', email="'.$email.'", mobile="'.$mobile.'" where username="'.$_SESSION['username'].'"';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Home.php');
?>
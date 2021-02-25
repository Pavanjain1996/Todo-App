<?php
session_start();
$listname=$_POST['listname'];
include('DBConnection.php');
$query='insert into '.$_SESSION['username'].'_lists values ("'.$listname.'")';
mysqli_query($con,$query);
header('location:Home.php');
?>
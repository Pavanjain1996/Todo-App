<?php
session_start();
$taskname=$_POST['taskname'];
include('DBConnection.php');
$query='insert into '.$_SESSION['username'].'_tasks values ("'.$taskname.'","'.$_SESSION['listname'].'","Incomplete")';
mysqli_query($con,$query);
header('location:ListView.php');
?>
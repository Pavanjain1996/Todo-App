<?php
session_start();
$taskname=$_POST['taskname'];
include('DBConnection.php');
$query='update '.$_SESSION['username'].'_tasks set status="Complete" where task="'.$taskname.'" and listname="'.$_SESSION['listname'].'"';
mysqli_query($con,$query);
header('location:ListView.php');
?>
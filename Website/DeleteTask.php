<?php
session_start();
$taskname=$_POST['taskname'];
include('DBConnection.php');
$query='delete from '.$_SESSION['username'].'_tasks where task="'.$taskname.'" and listname="'.$_SESSION['listname'].'"';
mysqli_query($con,$query);
mysqli_close();
header('location:ListView.php');
?>
<?php
session_start();
include('DBConnection.php');
$query='delete from '.$_SESSION['username'].'_tasks where listname="'.$_SESSION['listname'].'"';
mysqli_query($con,$query);
$query='delete from '.$_SESSION['username'].'_lists where listname="'.$_SESSION['listname'].'"';
mysqli_query($con,$query);
mysqli_close($con);
header('location:Home.php');
?>
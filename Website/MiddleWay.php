<?php
session_start();
$_SESSION['listname']=$_POST['listname'];
header('location:LIstView.php');
?>
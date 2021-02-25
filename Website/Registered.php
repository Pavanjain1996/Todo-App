<?php
session_start();
$name=$_POST['name'];
$age=$_POST['age'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$username=$_POST['username'];
$password=$_POST['password'];
$pic=$_FILES['photo'];
include('DBConnection.php');
$query='insert into users values ("'.$name.'",'.$age.',"'.$email.'","'.$mobile.'","'.$username.'","'.$password.'","'.$_SESSION['username'].'_profile_'.$pic['name'].'")';
mysqli_query($con,$query);
$query='create table '.$username.'_lists (listname varchar(20))';
mysqli_query($con,$query);
$query='create table '.$username.'_tasks (task varchar(20),listname varchar(20),status varchar(20))';
mysqli_query($con,$query);
move_uploaded_file($pic['tmp_name'],"Profiles/".$_SESSION['username'].'_profile_'.$pic['name']);
$_SESSION['username']=$username;
$_SESSION['logstatus']='YES';
header('location:Home.php');
?>
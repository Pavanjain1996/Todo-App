<?php
session_start();
$_SESSION['logstatus']='NO';
unset($_SESSON['username']);
header('location:Index.php');
?>
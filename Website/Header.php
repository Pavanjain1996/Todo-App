<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="Images/Logo.jpg">
</head>
<style>
body{
	font-family:Comic sans ms;
}
</style>
<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-danger" style="height:97px;">
<img src="Images/Logo.jpg" width="60" height="60" class="d-inline-block align-top">&nbsp;&nbsp;&nbsp;
<?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo '<a class="navbar-brand" href="Home.php" style="color:white;font-size:60px;">Just Do It</a>';
  }
  else{
	  echo '<a class="navbar-brand" href="index.php" style="color:white;font-size:60px;">Just Do It</a>';
  }
}
else{
	echo '<a class="navbar-brand" href="index.php" style="color:white;font-size:60px;">Just Do It</a>';
}
?>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="nav navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="Profile.php" style="color:white;font-size:20px;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo '<i class="fa fa-user-circle"></i> '.$_SESSION['username'].' (Edit)';
  }
}
?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="Logout.php" style="color:white;font-size:20px;"><?php 
if(isset($_SESSION['logstatus'])){
  if($_SESSION['logstatus']=='YES'){
    echo '<i class="fa fa-sign-out"></i>Logout';
  }
}
?></a>
</li>
<li class="nav-item">
<a class="nav-link" href="About.php" style="color:white;font-size:20px;"><i class="fa fa-info-circle"></i> About</a>
</li>
</ul>
</div>
</nav>
<br/><br/><br/><br/>
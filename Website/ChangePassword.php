<?php
include('Header.php');
?>
<head>
<title>Just Do It - Password Reset</title>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/><br/><br/><br/><br/><br/><br/><br/>
<form method="post" action="PasswordChanged.php" onsubmit="return validation()">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="text-align:center;">
<span style="font-size:40px;color:green;"><u>Reset Password</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="password" class="form-control" placeholder="New Password" name="password" id="pass" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="password" class="form-control" placeholder="Re-Type New Password" name="newpassword" id="newpass" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<button type="submit" class="btn btn-success" style="width:100%;">Reset Password</button>
</div>
</div>
<br/>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<script>
function validation(){
	var pass=document.getElementById('pass').value;
	var newpass=document.getElementById('newpass').value;
	var res=true;
	if(pass!=newpass){
		alert('Passwords do not match');
		res=false;
		return res;
	}
	return res;
}
</script>
<?php
include('Footer.php');
?>
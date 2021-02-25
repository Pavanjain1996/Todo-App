<?php
include('Header.php');
?>
<head>
<title>Just Do It - Register</title>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/><br/><br/><br/><br/><br/><br/><br/>
<form method="post" action="Registered.php" onsubmit="return validation()" enctype="multipart/form-data">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="text-align:center;">
<span style="font-size:40px;color:green;"><u>Register Here</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="file" class="form-control" accept="image/*" name="photo" required>
<small class="form-text">Upload a Profile Picture</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Full Name" name="name" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="number" class="form-control" placeholder="Age" name="age" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="email" class="form-control" placeholder="Email-ID" name="email" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="number" class="form-control" placeholder="Mobile Number" name="mobile" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Username" name="username" onchange="finduser(this.value)" required>
<small class="form-text" id="textshow">Create an username for yourself.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="password" class="form-control" placeholder="Password" name="password" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-2">
<button type="submit" class="btn btn-success" style="width:100%;">Register</button>
</div>
<div class="col-md-2">
<button type="Reset" class="btn btn-danger" style="width:100%;">Clear</button>
</div>
</div>
<br/>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<script>
function finduser(uname){
	if(uname.length>=10){
		var req=new XMLHttpRequest();
		req.open("GET","CheckUser.php?uname="+uname,true);
		req.send();
		req.onreadystatechange=function(){
			if(req.readyState==4 && req.status==200){
				alert(req.responseText);
				document.getElementById("textshow").innerHTML=req.responseText;
			}
		};
	}
}
function validation(){
	var uservalid=document.getElementById('textshow').innerHTML;
	var res=true;
	if(uservalid=="Username already exist"){
		alert('Username Exists');
		res=false;
		return res;
	}
	return res;
}
</script>
<?php
include('Footer.php');
?>
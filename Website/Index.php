<?php
include('Header.php');
?>
<head>
<title>Just Do It - Login</title>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/><br/><br/><br/><br/><br/><br/><br/>
<form method="post" action="Login.php">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="text-align:center;">
<span style="font-size:40px;color:green;"><u>Login Here</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="text" class="form-control" placeholder="Username" name="username" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<input type="password" class="form-control" placeholder="Password" name="password" required>
<small class="form-text text-muted">Successful login will redirect you to home page else you will stay on same page.</small>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-2">
<button type="submit" class="btn btn-success" style="width:100%;">Login</button>
</div>
<div class="col-md-2">
<button type="Reset" class="btn btn-danger" style="width:100%;">Clear</button>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<a href="Register.php">New Here ? Click to Register</a>
</div>
</div>
</form>
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>
<?php
include('Footer.php');
?>
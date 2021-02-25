<?php
include('Header.php');
if($_SESSION['logstatus']=='NO')
	header('location:Index.php');
include('DBConnection.php');
$query='select name,age,email,mobile,username,profile from users';
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<head>
<title>Just Do It - <?php echo $_SESSION['username']; ?></title>
<style>
label{
	font-size:20px;
	color:green;
}
</style>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/><br/><br/><br/>
<form method="post" action="EditProfile.php">
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="text-align:center;">
<span style="font-size:40px;color:green;"><u>Profile</u></span>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-2" style="text-align:center">
<img src="Profiles/<?php echo $row['profile']; ?>" class="img-fluid" alt="Profile Pic" style="height:250px;border-radius:50%;border:3px dashed red;">
</div>
<div class="col-md-2">
<label>Name</label>
<input type="text" class="form-control" value="<?php echo $row['name']; ?>" name="name" required>
<label>Age</label>
<input type="number" class="form-control" value="<?php echo $row['age']; ?>" name="age" required>
<label>Email-ID</label>
<input type="email" class="form-control" value="<?php echo $row['email']; ?>" name="email" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Mobile Number</label>
<input type="number" class="form-control" value="<?php echo $row['mobile']; ?>" name="mobile" required>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<label>Username</label>
<input type="text" class="form-control" value="<?php echo $row['username']; ?>" readonly>
</div>
</div>
<br/>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4">
<button type="submit" class="btn btn-success" style="width:100%;">Save Changes</button>
</div>
</div>
<br/>
</form>
<div class="row">
<div class="col-md-4"></div>
<div class="col-md-4" style="text-align:center;">
<form method="post" action="ChangePassword.php">
<button type="submit" class="btn btn-warning" style="width:100%;">Change Password</button>
</form>
</div>
</div>
<br/>
<br/><br/><br/><br/><br/><br/>
</div>
<?php
include('Footer.php');
?>
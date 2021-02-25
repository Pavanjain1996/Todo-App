<?php
include('Header.php');
if($_SESSION['logstatus']=='NO')
	header('location:Index.php');
?>
<head>
<title>Just Do It - <?php echo $_SESSION['listname']; ?></title>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/></br><br/></br><br/></br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-2" style="background-color:white;padding:20px;border:2px solid black;border-radius:10px;height:140px;">
<form method="post" action="CreateTask.php">
<input type="text" class="form-control" placeholder="New Task" style="background-color:yellow;" name="taskname" required><br/>
<button type="submit" class="btn btn-success" style="width:100%;">Add Task</button>
</form>
</div>
<div class="col-md-1"></div>
<div class="col-md-7" style="background-color:white;padding:20px;border:2px solid black;border-radius:10px;">
<?php
include('DBConnection.php');
$query='select * from '.$_SESSION['username'].'_tasks where listname="'.$_SESSION['listname'].'"';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
for($i=0;$i<$n;$i++){
	$row=mysqli_fetch_array($res);
	echo '<div class="row">';
	echo '<div class="col-md-4">';
	echo '<span style="font-size:20px;color:blue;font-weight:bold;">'.($i+1).'. '.$row['task'].'</span>';
	echo '</div>';
	echo '<div class="col-md-1">';
	if($row['status']=='Complete')
		echo '<span style="font-size:20px;color:blue;font-style:italic;"><i class="fa fa-check-square" style="color:green;font-size:25px;"></i></span>';
	else
		echo '<span style="font-size:20px;color:blue;font-style:italic;"><i class="fa fa-close" style="color:red;font-size:25px;"></i></span>';
	echo '</div>';
	echo '<div class="col-md-3">';
	if($row['status']=='Incomplete'){
		echo '<form method="post" action="MarkComplete.php">';
		echo '<input type="text" class="form-control" name="taskname" value="'.$row['task'].'" hidden>';
		echo '<button type="submit" class="btn btn-success" style="width:100%;">Mark Complete</button>';
		echo '</form>';
	}
	else{
		echo '<form method="post" action="MarkIncomplete.php">';
		echo '<input type="text" class="form-control" name="taskname" value="'.$row['task'].'" hidden>';
		echo '<button type="submit" class="btn btn-Warning" style="width:100%;">Mark Incomplete</button>';
		echo '</form>';
	}
	echo '</div>';
	echo '<div class="col-md-2">';
	echo '<form method="post" action="DeleteTask.php">';
	echo '<input type="text" class="form-control" name="taskname" value="'.$row['task'].'" hidden>';
	echo '<button type="submit" class="btn btn-danger" style="width:100%;">Delete</button>';
	echo '</form>';
	echo '</div>';
	echo '</div>';
}
?>
<div class="row">
<div class="col-md-10">
<?php
if($n>0){
	echo '<form method="post" action="DeleteList.php">';
	echo '<button type="submit" class="btn btn-info" style="width:100%;">Delete List - '.$_SESSION['listname'].'</button>';
	echo '</form>';
}
?>
</div>
</div>
</div>
<div class="col-md-1"></div>
</div>
<br/><br/><br/></br><br/></br><br/><br/><br/></br><br/></br><br/><br/><br/></br><br/></br>
</div>
<?php
include('Footer.php');
?>
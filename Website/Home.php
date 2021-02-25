<?php
include('Header.php');
if($_SESSION['logstatus']=='NO')
	header('location:Index.php');
?>
<head>
<title>Just Do It - <?php echo $_SESSION['username']; ?></title>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/></br><br/></br><br/></br>
<div class="row">
<div class="col-md-1"></div>
<div class="col-md-2" style="background-color:white;padding:20px;border:2px solid black;border-radius:10px;height:140px;">
<form method="post" action="CreateList.php">
<input type="text" class="form-control" placeholder="New List" style="background-color:yellow;" name="listname" required><br/>
<button type="submit" class="btn btn-success" style="width:100%;">Create List</button>
</form>
</div>
<div class="col-md-1"></div>
<div class="col-md-7" style="background-color:white;padding:20px;border:2px solid black;border-radius:10px;">
<?php
include('DBConnection.php');
$query='select * from '.$_SESSION['username'].'_lists';
$res=mysqli_query($con,$query);
$n=mysqli_num_rows($res);
$count=0;
for($i=0;$i<=$n/3;$i++){
	echo '<div class="row">';
	for($j=0;$j<3 && $count<$n;$j++){
		$row=mysqli_fetch_array($res);
		echo '<div class="col-md-4">';
		echo '<form method="post" action="MiddleWay.php">';
		echo '<input type="text" class="form-control" name="listname" value="'.$row['listname'].'" hidden>';
		echo '<button type="submit" class="btn btn-info" style="width:100%;">'.$row['listname'].'</button>';
		echo '</form>';
		echo '</div>';
		$count++;
	}
	echo '</div>';
}
?>
</div>
<div class="col-md-1"></div>
</div>
<br/><br/><br/></br><br/></br><br/><br/><br/></br><br/></br><br/><br/><br/></br><br/></br>
</div>
<?php
include('Footer.php');
?>
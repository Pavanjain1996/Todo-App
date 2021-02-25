<?php
include('Header.php');
?>
<head>
<title>Just Do It - <?php echo $_SESSION['username']; ?></title>
</head>
<div class="container-fluid" style="background-image:url('Images/Background.jpg');background-size:cover;">
<br/><br/><br/>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8" style="font-size:20px;color:red;text-align:center;">
<span style="font-weight:bold;">This is a ToDo application which provides you the feature to keep the records of various tasks and to manage them. It provides you features like :-</span>
<br/><br/>
<div style="font-style:italic;">
<ul class="list-group">
<li class="list-group-item list-group-item-success">It allows you to create various lists.</li>
<li class="list-group-item list-group-item-info">It allows you to add various tasks to a list.</li>
<li class="list-group-item list-group-item-warning">It allows you to mark the completed task as incomplete.</li>
<li class="list-group-item list-group-item-danger">It allows you to mark the incompleted task as complete.</li>
<li class="list-group-item list-group-item-primary">It allows you to delete a completed or incomplete task.</li>
</ul>
</div>
<br/><br/>
<span style="font-weight:bold;">
This application is made by Pavan Jain.<br/>There is No CopyRight Issue on this platform.<br/>All the Rights are Reserved.
</span>
</div>
<div class="col-md-2"></div>
</div>
<br/><br/><br/><br/><br/><br/>
</div>
<?php
include('Footer.php');
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf_8">
	<title>Attendan system</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
	<script type="text/javascript" src="inc/bootstrap.min.js"></script>
	
</head>
<body>
<div class="container">
	<div class="alert alert-primary" role="alert">
	<div class="well text-center">
	<h2>Student/Employee Attendance system</h2>
	</div>
</div>
<a class="btn btn-info pull-right" href="index.php">Back</a>
<div clas="panel panel-default">
<div class="panel-heading">
		
</div>

<div class="panel-body">
	
		<table class="table table-striped">
			<tr>
				<th width="50%">Serial</th>
				
				<th width="50%">Date</th>
				<th width="35%">Show attendance</th>

			</tr>
<?php
include"config.php";
$query=mysqli_query($conn,"select distinct attndate  FROM attn_tbl");
//$query=mysqli_query($conn,"SELECT *FROM attn_tbl");
$Serial=0;
while($row=mysqli_fetch_array($query))
{  $Serial++;
   ?>
<tr> 
<td><?php echo $Serial;?></td>
<td><?php echo $row['attndate'];?></td>

<td>
	<form action="singleAttn.php" method="POST">
		<input type="hidden" value="<?php echo $row['attndate'];?>" name="currenDate">
		<input type="submit" class="btn btn-info"  value="Show Attendance">
	</form>
</td> 
</td>

 </tr>
<?php 
}?>
 </table>
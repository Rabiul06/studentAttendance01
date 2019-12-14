
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
	<h2>Details All Student Information</h2>
	</div>
</div>

<div clas="panel panel-default">
<div class="panel-heading">
		
</div>

<div class="panel-body">
	<form action="" method="POST">
		<table class="table table-striped">
			<tr>
				<th width="25%">Serial</th>
				<th width="25%">Name</th>
				<th width="25%">Roll</th>
				<th width="25%">Atten_statis</th>
				<th width="25%">Edit</th>
			</tr>
			 <a class="btn btn-success pull-right" href="attendance.php">Back</a>

<?php
include "config.php";
//$roll = $_POST['roll'];
$date=$_POST['currenDate'];
$query=mysqli_query($conn,"SELECT *FROM attn_tbl   WHERE attndate = '$date' ORDER BY roll ASC ");
$Serial=0;
while($row=mysqli_fetch_array($query))
{  
	$Serial++;
?>
	<tr> 
	<td><?php echo $Serial;?></td>

	<td><?php echo $row['name'];?></td>

	<td><?php echo $row['roll'];?></td>

	<td><?php echo $row['Attendance'];?></td>
		<td>
			<?php
				$d_date=$row['attndate'];
				$t_date=date("Y-m-d");

				$roll=$row['roll'];

			 	if ($d_date==$t_date){
			 		echo "<a class=\"btn btn-success\" href=\"updateAttn.php?roll=$roll\">Update</a>";
			 	}else {
			 		echo "<a class='btn btn-success'>Not Update</a>";
			 	}
			?>	
				
		</td>
	</tr>
<?php 
}
?>
</table></form>	

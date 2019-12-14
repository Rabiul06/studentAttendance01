
<?php
include "config.php";
$roll=$_GET["roll"];


$query=mysqli_query($conn,"SELECT * from attn_tbl WHERE roll='$roll' ");

while($row=mysqli_fetch_array($query))
{
	$roll=$row['roll'];
	$attn=$row['Attendance'];
}
	

if(isset($_POST['update']))
{  
    $u_roll=$_POST["roll"];
	$u_attn=$_POST["Attendance"];
	
	$update=mysqli_query($conn,"UPDATE attn_tbl SET  Attendance='$u_attn' WHERE roll='$u_roll' ");
	if($update)
	{
		echo '<script type="text/javascript">
		alert("Update Successfull.");
		window.location =  "attendance.php";       	
		</script>'; 
		
	}
	else
	{
		echo '<script type="text/javas-cript">
		alert("Something Wrong Happened.Try Again.");        
		</script>';
	}
}

?>


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
	<h2>Update student information here</h2>
	</div>
</div>
<form action="" method="POST">

  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Roll</strong></label>
    <input type="text" class="form-control" name="roll" value="<?php echo $roll ?>" >
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1"><strong>Student Attendance</strong></label>
    <input type="text" class="form-control" name="Attendance" value="<?php echo $attn ?>" >
   </td>


  </div>
  
  <input type="submit" class="btn btn-success" name="update" value="Update">
  
   	<a class="btn btn-info pull-right" href="index.php">Back</a>
</form>
<br>
	<div class="alert alert-primary" role="alert">
		<div class="well text-center">
		<a href="https://www.google.com/search?q=vu.edu.bd&oq=vu.&aqs=chrome.1.69i57j69i59j69i60.6298j0j7&sourceid=chrome&ie=UTF-8"><h4>Website:www.vu.edu.bd.com</h4></a>
	</div>
</div>

</div>
</body>
</html>
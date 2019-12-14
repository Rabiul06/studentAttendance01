
<?php
include "config.php";

$roll=$_GET["roll"];

$query=mysqli_query($conn,"SELECT * from db_tbl WHERE roll='$roll' ");

while($row=mysqli_fetch_array($query))
{
	
	$name= $row['name'];
	$roll=$row['roll'];

}
	

if(isset($_POST['update']))
{
	$u_name=$_POST["name"];
	$u_roll=$_POST["roll"];
	$update=mysqli_query($conn,"UPDATE db_tbl SET name='$u_name' WHERE roll='$u_roll' ");
	if($update)
	{
		echo '<script type="text/javascript">
		alert("Update Successfull.");
		window.location =  "index.php";         
		</script>'; 
		
	}
	else
	{
		echo '<script type="text/javascript">
		alert("Something Wrong Happened.Try Again.");        
		</script>';
	}
}

if(isset($_POST['delete']))
{
	
$del=mysqli_query($conn,"DELETE FROM db_tbl WHERE roll='$roll' ");
$del=mysqli_query($conn,"DELETE FROM attn_tbl WHERE roll='$roll' ");

if($del)
{
	echo '<script type="text/javascript">
	alert("Successfully Deleted.");
	window.location =  "index.php";         
	</script>'; 
	// header("location: leave-profile.php");
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
	<h2>Update/Delete student information here</h2>
	</div>
</div>
<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Student Name</strong></label>
    <input type="text" class="form-control" name="name" value="<?php echo $name ?>" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Student Roll</strong></label>
    <input type="text" class="form-control" name="roll" value="<?php echo $roll ?>" placeholder="Enter your roll" readonly>
  </div>
  
  <input type="submit" class="btn btn-success" name="update" value="Update">
   <input type="submit" class="btn btn-success" name="delete" value="Delete">
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
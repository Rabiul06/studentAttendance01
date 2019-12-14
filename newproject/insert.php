
<br>
<?php
include "config.php";

if(isset($_POST['Submit']))
{
 
    $name=$_POST['name'];
    $roll=$_POST['roll'];

     $query=mysqli_query($conn,"select * from db_tbl where roll='$roll'");
	$count=mysqli_num_rows($query);

	// echo $count;
	if($count>0)
	{
		echo '<script type="text/javascript">
		        alert("Student have already Added.");
		        window.location = "index.php";         
		        </script>';  
	}
	else{
  
    
	$q =  mysqli_query($conn,"insert into db_tbl (name,roll) values('$name','$roll')");

	  if($q)
		    {
		        echo '<script type="text/javascript">
		        alert("insert Successfull.");
		       window.location = "index.php";       
		        </script>'; 
		    }
		    else
		    {

		        echo '<script type="text/javascript">
		        alert("Something Wrong Happened.Try Again.");        
		        </script>';
		    }	   
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
	<h2>Add new student</h2>
	</div>
</div>
<form action="" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1"><strong>Student Name</strong></label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name" required="1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Student Roll</strong></label>
    <input type="text" class="form-control" name="roll" placeholder="Enter your roll" required="1">
  </div>
  
  <button type="submit" class="btn btn-success" name="Submit">Submit</button>
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
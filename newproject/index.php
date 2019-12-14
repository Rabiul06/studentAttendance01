<br>
<?php 
include "config.php";
$number=0;
if(isset($_POST['submit'])){

	   $date = date("y-m-d");
	   
        foreach($_POST['attendance'] as $ast=>$attendance) {
        $name = $_POST['name'][$ast];
		$roll= $_POST['roll'][$ast];
		
      
    $query=mysqli_query($conn,"SELECT  * FROM attn_tbl WHERE attndate='$date'");
	$count=mysqli_num_rows($query);
	$number++;
          
	// echo $count;
	if($count>$number)
	{
		echo '<script type="text/javascript">
		        alert("Student attendance already taken.");
		        window.location = "index.php";         
		        </script>';  
	}
	
       	  else{ $query=mysqli_query($conn,"insert into attn_tbl (name,roll,Attendance,attndate) value ('$name','$roll ','$attendance','$date')");

			if($query)
		    {
		        echo '<script type="text/javascript">
		        alert("Take attendance Successfull.");
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
	
	<marquee style="font-size: 30px;
         font-weight: 700;
         color:#8ebf42;
         font-style:inherit;
         font-family: sans-serif;">Student/Employee Attendance system</marquee>
	</div>
</div>

<div clas="panel panel-default">
<div class="panel-heading">
		
 <h2>
 	<a class="btn btn-success" href="insert.php">Add student</a>
 	<a class="btn btn-info pull-right" href="attendance.php">View All</a>
 </h2>
</div>

<div class="panel-body">
	<div class="well text-center" style="font-size:20px" >
		<strong>Date:</strong><?php $cur_date = date('d-m-y'); echo $cur_date; ?>
	</div>
	<form action="" method="POST">
		<table class="table table-striped">
			<tr>
				<th width="15%">Serial</th>
				<th width="15%">Student Name</th>
				<th width="20%">Student Rool</th>
				<th width="25%">Attendance</th>
				<th width="20">Edit</th>
			</tr>


<?php
$query=mysqli_query($conn,"select * from db_tbl ");
$Serial=0;
$counter=0;

while($row=mysqli_fetch_array($query))
{  $Serial++;
   ?>
<tr> 
<td><?php echo $Serial;?></td>

<td><?php echo $row['name'];?>
	
	<input type="hidden" value="<?php echo $row['name'];?>" name="name[]">
</td>

<td><?php echo $row['roll'];?>
	<input type="hidden" value="<?php echo $row['roll'];?>" name="roll[]">
</td>
<td><input type="radio" name="attendance[<?php echo $counter;?>]" value = "present" required="1" >P
<input type="radio" name="attendance[<?php echo $counter;?>]" value="Absence" required="1" >A</td>
<td><a class="btn btn-success"  href="update.php?roll=<?php echo $row['roll'];?>"><i class="fa fa-edit"  ></i></a> 
 </tr>
<?php 
$counter++;

} ?>
			
			<tr>
				<td colspan="5"><input type="submit" class="btn btn-info" name="submit" value="Submit"></td>
			</tr>
		</table>

	</form>
</div>
</div>
	<div class="alert alert-primary" role="alert">
		<div class="well text-center">
		<a href="https://www.google.com/search?q=vu.edu.bd&oq=vu.&aqs=chrome.1.69i57j69i59j69i60.6298j0j7&sourceid=chrome&ie=UTF-8"><h4>Website:www.vu.edu.bd.com</h4></a>
	</div>
</div>

</div>
</body>
</html>



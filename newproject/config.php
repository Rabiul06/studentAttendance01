<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "new_db";

// Create connection 
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

mysqli_select_db($conn,$dbname);
date_default_timezone_set("Asia/Dhaka");
?>
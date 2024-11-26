<?php

$stu_id = $_GET['id'];  // Get the student ID from the URL

$con = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

// Corrected SQL query to delete data
$sql = "DELETE FROM students WHERE sid = {$stu_id}";

// Execute query
$result = mysqli_query($con, $sql) or die("Query unsuccessful");

// Redirect back to the main page after deletion
header("Location: index.php");

// Close the connection
mysqli_close($con);

?>

<?php
// Capture form data and display it
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];


$con = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

// SQL query to fetch data
$sql = "INSERT INTO students(sname,saddress,sclass,sphone) VALUES('{$stu_name }','{$stu_address }','{$stu_class }','{$stu_phone }')";

// Execute query
$result = mysqli_query($con, $sql) or die("query unsuccessful");

header("Location:index.php");

mysqli_close($con);
?>

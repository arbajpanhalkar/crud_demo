<?php
// Capture form data and display it
echo $stu_id = $_POST['sid'];
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['sclass'];
echo $stu_phone = $_POST['sphone'];


$con = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

$sql = "UPDATE students SET sname = '{$stu_name}', saddress = '{$stu_address}', sclass = '{$stu_class}', sphone = '{$stu_phone}' WHERE sid = '{$stu_id}'";


// Execute query
$result = mysqli_query($con, $sql) or die("query unsuccessful");

header("Location:index.php");

mysqli_close($con);
?>

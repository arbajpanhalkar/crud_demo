<?php include 'header.php'; ?>
<?php 
if(isset($_POST['deletebtn'])){

    $con = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

    $stu_id = $_POST['sid'];
    $sql = "DELETE FROM students WHERE sid = {$stu_id}";

// Execute query
$result = mysqli_query($con, $sql) or die("Query unsuccessful");

// Redirect back to the main page after deletion
header("Location: index.php");

// Close the connection
mysqli_close($con);


}

?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>

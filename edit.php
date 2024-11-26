<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $con = mysqli_connect("localhost", "root", "", "crud") or die("Connection failed");

    $stu_id = $_GET['id'];
    // SQL query to fetch data
    $sql = "SELECT * FROM students WHERE sid = {$stu_id}";

    // Execute query
    $result = mysqli_query($con, $sql) or die("Query unsuccessful");

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <form class="post-form" action="updatedata.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>" />
                    <input type="text" name="sname" value="<?php echo $row['sname']; ?>" required />
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>" />
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <select name="sclass" required>
                        <option value="" selected disabled>Select Class</option>
                        <?php
                        // Fetching classes
                        $sql1 = "SELECT * FROM studentclass";
                        $result1 = mysqli_query($con, $sql1) or die("Query unsuccessful");

                        if (mysqli_num_rows($result1) > 0) {
                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                // Set selected attribute if the class matches the student's class
                                $selected = ($row1['cid'] == $row['sclass']) ? 'selected' : '';
                                echo '<option value="' . htmlspecialchars($row1['cid']) . '" ' . $selected . '>' . htmlspecialchars($row1['cname']) . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>" />
                </div>
                <input class="submit" type="submit" value="Update" />
            </form>
        <?php
        }
    }
    ?>
</div>
</body>

</html>
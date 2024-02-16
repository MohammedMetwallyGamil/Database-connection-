<?php
include("connect.php");


function depIDExists($conn, $dep_ID) {
    $check_sql = "SELECT dep_ID FROM Department WHERE dep_ID='$dep_ID'";
    $check_result = mysqli_query($conn, $check_sql);
    return mysqli_num_rows($check_result) == 1;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_ID = $_POST['emp_ID'];
    $dep_ID = $_POST['dep_ID'];

    
    if (depIDExists($conn, $dep_ID)) {
      
        $check_sql = "SELECT emp_ID FROM Emp WHERE emp_ID='$emp_ID'";
        $check_result = mysqli_query($conn, $check_sql);

        if (mysqli_num_rows($check_result) == 1) {
            
            $update_sql = "UPDATE Emp SET dep_ID='$dep_ID' WHERE emp_ID='$emp_ID'";
            if (mysqli_query($conn, $update_sql)) {
                echo "   dep_ID updated successfully";
            } else {
                echo "Error updating dep_ID: " . mysqli_error($conn);
            }
        } else {
            echo "Employee ID not found";
        }
    } else {
        echo "     dep_ID does not exist in the Department table";
    }
}

if (isset($_GET['emp_ID'])) {
    $emp_ID = $_GET['emp_ID'];
    $current_dep_ID = getCurrentdep_ID($conn, $emp_ID);
} else {
    $current_dep_ID = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Update Employee dep_ID</h2>
    <?php if ($current_dep_ID !== null) : ?>
        <p>Previous dep_ID: <?php echo $current_dep_ID; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="emp_ID">Enter Employee ID:</label>
        <input type="text" id="emp_ID" name="emp_ID" required><br><br>
        <label for="dep_ID">Enter New dep_ID:</label>
        <input type="number" id="dep_ID" name="dep_ID" required><br><br>
        <input type="submit" value="Set dep_ID">
    </form>
</body>
</html>

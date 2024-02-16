<?php
include("connect.php");


function getCurrentSalary($conn, $emp_ID) {
    $sql = "SELECT salary FROM Emp WHERE emp_ID='$emp_ID'";
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        return $row['salary'];
    } else {
        return null; 
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $emp_ID = $_POST['emp_ID'];
    $salary = $_POST['salary'];

    
    $check_sql = "SELECT emp_ID FROM Emp WHERE emp_ID='$emp_ID'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) == 1) {
        
        $update_sql = "UPDATE Emp SET salary='$salary' WHERE emp_ID='$emp_ID'";
        if (mysqli_query($conn, $update_sql)) {
            echo "  Salary updated successfully";
        } else {
            echo "  Error updating salary: " . mysqli_error($conn);
        }
    } else {
        
        echo "Employee ID not found";
    }
}


if (isset($_GET['emp_ID'])) {
    $emp_ID = $_GET['emp_ID'];
    $current_salary = getCurrentSalary($conn, $emp_ID);
} else {
    $current_salary = null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wemp_IDth=device-wemp_IDth, initial-scale=1.0">
    <title>Admin Page</title>
</head>
<body>
    <h2>Update Employee Salary</h2>
    <?php if ($current_salary !== null) : ?>
        <p>Previous Salary: <?php echo $current_salary; ?></p>
    <?php endif; ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="emp_ID">Enter Employee ID:</label>
        <input type="text" emp_ID="emp_ID" name="emp_ID" required><br><br>
        <label for="salary">Enter New Salary:</label>
        <input type="number" emp_ID="salary" name="salary" required><br><br>
        <input type="submit" value="Update Salary">
    </form>
</body>
</html>

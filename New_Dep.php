<?php
include("connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dep_ID = $_POST['dep_ID'];
    $Loca = $_POST['Loca'];
    $emp_ID = $_POST['emp_ID'];

    
    $check_emp_sql = "SELECT * FROM Emp WHERE emp_ID = '$emp_ID'";
    $check_emp_result = mysqli_query($conn, $check_emp_sql);
    if (mysqli_num_rows($check_emp_result) == 0) {
        echo "   Error: Manager ID does not exist in the Emp table";
        exit; 
    }

    
    $insert_department_sql = "INSERT INTO Department (dep_ID, Loca) VALUES ('$dep_ID', '$Loca')";
    if (mysqli_query($conn, $insert_department_sql)) {
        echo "     Department details inserted successfully";
    } else {
        echo "     Error inserting department details: " . mysqli_error($conn);
    }
    
    
    $insert_manage_dep_sql = "INSERT INTO manage_dep (emp_ID, dep_ID) VALUES ('$emp_ID', '$dep_ID')";
    if (mysqli_query($conn, $insert_manage_dep_sql)) {
        echo "      Manager assigned to department successfully";
    } else {
        echo "     Error assigning manager to department: " . mysqli_error($conn);
    }
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
    <h2>Add Department</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="dep_ID">Department ID:</label>
        <input type="text" id="dep_ID" name="dep_ID" required><br><br>
        <label for="Loca">Location:</label>
        <input type="text" id="Loca" name="Loca" required><br><br>
        <label for="emp_ID">Manager ID:</label>
        <input type="text" id="emp_ID" name="emp_ID" required><br><br>
        <input type="submit" value="Add Department">
    </form>
</body>
</html>

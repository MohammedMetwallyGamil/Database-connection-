<?php
include("connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $emp_ID = $_POST['emp_ID'];

   
    $check_sql = "SELECT * FROM Emp WHERE emp_ID='$emp_ID'";
    $check_result = mysqli_query($conn, $check_sql);

    if (mysqli_num_rows($check_result) == 1) {
       
        $update_sql = "UPDATE Emp SET admin=1 WHERE emp_ID='$emp_ID'";
        if (mysqli_query($conn, $update_sql)) {
            echo "Employee with ID $emp_ID promoted to admin successfully";
        } else {
            echo "Error promoting employee to admin: " . mysqli_error($conn);
        }
    } else {
        echo "Employee with ID $emp_ID not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promote Employee to Admin</title>
</head>
<body>
    <h2>Promote Employee to Admin</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="emp_ID">Enter Employee ID:</label>
        <input type="text" id="emp_ID" name="emp_ID" required><br><br>
        <input type="submit" value="Promote to Admin">
    </form>
</body>
</html>

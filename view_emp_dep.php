<?php
include("connect.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $dep_ID = $_POST['dep_ID'];

   
    $sql = "SELECT * FROM Emp WHERE dep_ID = '$dep_ID'";
    $result = mysqli_query($conn, $sql);

  
    if (mysqli_num_rows($result) > 0) {
       
        echo "<h2>Employees Information for Department ID: $dep_ID</h2>";
        echo "<table border='1'>";
        echo "<tr><th>emp_ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Department ID</th></tr>";

      
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['emp_ID'] . "</td>";
            echo "<td>" . $row['FirstName'] . "</td>";
            echo "<td>" . $row['LastName'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['dep_ID'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found for Department ID: $dep_ID";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Employees by Department</title>
</head>
<body>
    <h2>View Employees by Department</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="dep_ID">Enter Department ID:</label>
        <input type="text" id="dep_ID" name="dep_ID" required><br><br>
        <input type="submit" value="View Employees">
    </form>
</body>
</html>

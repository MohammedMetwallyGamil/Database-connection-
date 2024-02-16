<?php
include("connect.php");

// Fetch all records from the Emp table
$sql = "SELECT * FROM Emp";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    
    echo "<h2>All Employees Information</h2>";
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
    echo "No records found";
}


mysqli_close($conn);
?>

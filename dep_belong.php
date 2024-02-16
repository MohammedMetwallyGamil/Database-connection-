<?php
session_start();
if(isset($_SESSION['email'])) {
    include("connect.php");
    
    $email = $_SESSION['email'];
    
    
    $sql = "SELECT emp_ID, dep_ID FROM Emp WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $emp_ID = $row['emp_ID']; // the emp_ID
            $dep_ID = $row['dep_ID'];
            echo "   Employee ID: " . $emp_ID;
            echo "  , Department ID: " . $dep_ID;
        } else {
            echo "  Employee not found";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    header("Location: login.php");
    exit();
}
?>

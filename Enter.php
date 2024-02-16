<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_login = $_POST['email']; 
    $password = $_POST['pass'];

    $sql = "SELECT * FROM Emp WHERE email='$email_login'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            if ($password == $row['pass']) {
                session_start();
                $_SESSION['email'] = $email_login;
                if ($row['Admin'] == 0) {
                    // welcome page for regular users
                    header("Location: welcome.php?email=" . urlencode($email_login));
                    exit();
                } else {
                    //  Admin page for admin users
                    header("Location: Adminspage.php?email=" . urlencode($email_login));
                    exit();
                }
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "User not found";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    // Redirect to login page if not submitted via POST
    header("Location: login.php");
    exit();
}
?>

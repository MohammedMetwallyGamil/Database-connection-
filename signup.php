<?php
include("connect.php");

if(isset($_POST['submit'])){
    $FirstName = $_POST['Fname'];
    $LastName = $_POST['Lname'];
    $email = $_POST['email']; 
    $password = $_POST['pass'];
    
    // Check if the user or email already exists
    $sql="SELECT * FROM Emp WHERE FirstName='$FirstName' OR email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_user_email = mysqli_num_rows($result);

    if($count_user_email == 0){ 
        
        

        
        $sql = "INSERT INTO Emp(FirstName, LastName, email, pass) VALUES('$FirstName', '$LastName', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: welcome.php");
            exit; 
        } else {
            echo "Error: " . mysqli_error($conn); 
        }
    } else {
        echo "Username or email already exists";
    }
}
?>

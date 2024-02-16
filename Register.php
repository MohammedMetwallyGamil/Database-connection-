<?php
echo "hello in register page <br><br>";
?>

<?php 
include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Bootstrap demo</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FU">
   </head>
   <body>
     <div id="form">
      <h1 id="heading">SignUp Form</h1><br>

      <form name="form" action="signup.php" method="post">
        <input type="text" id="Fname" name="Fname" placeholder="Enter your First name" required><br><br>
        <input type="text" id="Lname" name="Lname" placeholder="Enter your Last name" required><br><br>
        <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" id="pass" name="pass" placeholder="Create Password" required><br><br>
        <input type="Submit" id="btn" value="SignUp" name="submit" />
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3"></script>
  </body>
</html>

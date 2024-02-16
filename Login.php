<?php
echo "hello in login page";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>
  <form action="Enter.php" method="post">
        <input type="email" id="email" name="email" placeholder="Enter Email" required><br><br>
        <input type="password" id="pass" name="pass" placeholder="Enter Password" required><br><br>
    <input type="submit" value="Enter">
  </form>
</body>
</html>

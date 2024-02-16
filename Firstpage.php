<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FU">
</head>
<body>
  <div id="form">
    <h1 id="heading">Hi </h1><br>
    <button type="button" class="btn btn-primary" onclick="ToLoginPage()">Login</button><br><br>
    <button type="button" class="btn btn-secondary" onclick="ToRegisterPage()">Register</button><br><br>
    <button type="button" class="btn btn-danger" onclick="exitProgram()">Exit</button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3"></script>
  <script>
    function ToLoginPage() {
      // the login page   
      window.location.href = "Login.php"; 
    }

    function ToRegisterPage() {
      //  the register page
      window.location.href = "Register.php"; 
    }

    function exitProgram() {
      
       
    }
  </script>
</body>
</html>

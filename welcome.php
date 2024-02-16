<?php

echo "Hello emp";

?>

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
    <h1 id="heading"> </h1><br>
    <button type="button" class="btn btn-primary" onclick="department_you_belong_to()">department_you_belong_to</button><br><br>
    <button type="button" class="btn btn-primary" onclick="info()">info</button><br><br>
   
    <button type="button" class="btn btn-danger" onclick="exitProgram()">Exit</button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3"></script>
  <script>
    function department_you_belong_to() {
       
      window.location.href = "dep_belong.php"; 
    }
    /*function New_Dep() {
       //set Dep_num in department table
      window.location.href = "New_Dep.php"; 
    }*/

   
    function exitProgram() {
      
       
    }
  </script>
</body>
</html>
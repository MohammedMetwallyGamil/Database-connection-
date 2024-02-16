<?php

echo "Hello Admin";

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
    <button type="button" class="btn btn-primary" onclick="ToSetSalary()">Set_Salary</button><br><br>
    <button type="button" class="btn btn-primary" onclick="New_Dep()">New_Dep</button><br><br>
    <button type="button" class="btn btn-secondary" onclick="ToSetDepNum()">Set_DepNum</button><br><br>
    <button type="button" class="btn btn-secondary" onclick="view_all_emp()">view_all_emp</button><br><br>
    <button type="button" class="btn btn-secondary" onclick="view_emp_on_specific_dep()">view_emp_on_specific_dep</button><br><br>
    <button type="button" class="btn btn-secondary" onclick="set_admin()">set_admin</button><br><br>
    <button type="button" class="btn btn-danger" onclick="exitProgram()">Exit</button>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3"></script>
  <script>
    function ToSetSalary() {
       //salary
      window.location.href = "setSal.php"; 
    }
    function New_Dep() {
       //set Dep_num in department table
      window.location.href = "New_Dep.php"; 
    }

    function ToSetDepNum() {
     // set Dep_num in emp table
      window.location.href = "Dep_num.php"; 
    }
    function view_all_emp() {
     // set Dep_num in emp table
      window.location.href = "view_emp.php"; 
    }
    function view_emp_on_specific_dep() {
     // set Dep_num in emp table
      window.location.href = "view_emp_dep.php"; 
    }
    function set_admin() {
     // set Dep_num in emp table
      window.location.href = "set_admin.php"; 
    }
    function exitProgram() {
      
       
    }
  </script>
</body>
</html>
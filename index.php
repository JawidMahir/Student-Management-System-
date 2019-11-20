<!doctype html>
<html lang="en">
  <head>
    <title>SMS | Student Management System</title>
    <meta charset="utf-8">
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/png" href="images/1.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
   <body class="p-3 mb-2 bg-light text-dark">
   <div class="container">
<br><br><br><br><br><br>
  <form class="form-control"  method="post" action="index.php">
  <h3><a href="login.php">Admin Login</a></h3>
 <h1 align="center"><b>Welcome to Student Management System</b></h1>
 <div class="container">
 <table  class="table table-striped" style="">
     <tr>
         <td><h2>Student Information</h2></td>
     </tr>
     <tr>
         <th><b>Choose Standerd</b></th>
         <td>
             <select name="std" required >
                 <option value="1">1st</option>
                  <option value="2">2nd</option>
                   <option value="3">3rd</option>
                    <option value="4">4td</option>
                     <option value="5">5th</option>
                      <option value="6">6th</option>
                    
             </select>
         </td>
     </tr>
     <tr>
         <th><b>Enter Rollno</b></th> 
         <td><input type="text" class="form-control is-valid" name="rollno" required></td>
     </tr>
     <tr>
         <td colspan="2"><input type="submit" value="Show Info" class="btn btn-success" name="submit"></td>
     </tr>     
 </table>
      </div>
 </form>
 
 </div>

  </body>
</html>
<?php
if(isset($_POST['submit']))
{
$standerd = $_POST['std'];
$rollno = $_POST['rollno'];
 
include('dbcon.php');  
    
include('function.php');   
      
      
    showdetails($standerd,$rollno);
}

?>
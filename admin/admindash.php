<?php
session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else{
   header('location: ../login.php');
    include ('titles/title6.php');

}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/png" href="../images/1.png">
    <meta charset="UTF-8">
    <title>SMS | Student Management System</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
    
<br><br><br><br><br><br><br><br>
 <div class="container" align="center">
 

 <form class="form-control">
 
 <div class="container" align="center">
  <table class="table table-striped" >
   <h3 align="left"><a href="logout.php">Logout</a></h3>
   
    <h1 align="center"><b>Welcome to Admin dashboard</b></h1>
     
      <tr>
          <th>1.</th>
          <th><a href="addstudent.php">Insert Student Details</a></th>
      </tr>
      <tr>
          <th>2.</th>
          <th><a href="updatestudent.php">Update Student Details</a></th>
      </tr> 
      <tr>
          <th>3.</th>
          <th><a href="deletestudent.php">Delete Student Details</a></th>
      </tr>  
        <tr>
          <th>4.</th>
          <th><a href="exam.php">Student Exam Details</a></th>
      </tr>     
  </table>
  </div>
  
  </form>
  </div>

    
</body>
</html>
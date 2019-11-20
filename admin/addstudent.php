<?php
session_start();

if(isset($_SESSION['uid']))
{
    echo "";
}
else{
   header('location: ../login.php');
}
?>
<?php
include ('header.php');
include ('titles/title1.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS | Student Management System</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
 <form method="post" action="addstudent.php" enctype="multipart/form-data">
  <table class="table table-striped" >
      
     
     <tr>
         <th>Roll No</th>
         <td><input type="text" class="form-control is-valid"  name="rollno" placeholder="Enter Rollno" required></td>
     </tr>
     <tr>
         <th>Full Name</th>
         <td><input type="text" class="form-control is-valid"  name="name" placeholder="Enter Full Name" required></td>
     </tr>
     <tr>
         <th>City</th>
         <td><input type="text"  class="form-control is-valid" name="city" placeholder="Enter City" required></td>
     </tr>
     <tr>
         <th>Parents Contact No</th>
         <td><input type="text" class="form-control is-valid"  name="pcont" placeholder="Enter the Contact Parents" required></td>
     </tr>
     <tr>
         <th>Standerd</th>
         <td><input type="number" class="form-control is-valid"  name="std" placeholder="Enter Standerd" required></td>
     </tr>
     <tr>
         <th>Image</th>
         <td><input type="file" name="simg"  required></td>
     </tr>
     <tr>
         <td colspan="2"> <input type="submit" class="btn btn-success" name="submit" value="Submit"></td>
     </tr>
     </table>
 </form>
    </body>
</html>
   
  <?php
if(isset($_POST['submit']))
{
    include '../dbcon.php';
    
    $rolLno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcont'];
    $std =  $_POST['std'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");    
        
     
    $qry = "INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES ('$rolLno','$name','$city','$pcon','$std','$imagename')";
    
    $run = mysqli_query($con,$qry);
    
    if($run == true)
    {
        ?>
        <script>
            alert('Student Inserted Successfully.');

</script>
        <?php
    }
    
    
}


?>
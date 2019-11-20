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
include ('titles/title2.php');
include ('../dbcon.php');
$sid = $_GET['sid'];
$sql = "SELECT * FROM student WHERE id ='$sid'";
$run = mysqli_query($con,$sql);
$data= mysqli_fetch_assoc($run);
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS | Student Management System</title>
</head>

<body class="p-3 mb-2 bg-light text-dark">
 <form method="post" action="updatedata.php" enctype="multipart/form-data">
  <table class="table table-striped" >
     <tr>
         <th>Roll No</th>
         <td><input type="text" class="form-control is-valid"  name="rollno" value="<?php echo $data['rollno'];?>" required> </td>
     </tr>
     <tr>
         <th>Full Name</th>
         <td><input type="text" class="form-control is-valid"  name="name" value="<?php echo  $data['name'];?>" required></td>
     </tr>
     <tr>
         <th>City</th> 
         <td><input type="text"  class="form-control is-valid"  name="city" value="<?php echo  $data['city'];?>" required></td>
     </tr>
     <tr>
         <th>Parents Contact No</th>
         <td><input type="text"  class="form-control is-valid" name="pcon"  value="<?php echo $data['pcont'];?>" required></td>
     </tr>
     <tr>
         <th>Standerd</th>
         <td><input type="number" class="form-control is-valid"  name="std" value="<?php echo $data['standerd'] ;?>" required></td>
     </tr>
     <tr>
         <th>Image</th>
         <td><input type="file" name="simg"  required></td>
     </tr>
     <tr>
         <td colspan="2">
           <input type="hidden" name="sid" value="<?php echo $data['id'];?>">
           <input type="submit" class="btn btn-success" name="submit" value="Submit"></td>
     </tr>
     </table>
 </form>
   
    </body>

</html>
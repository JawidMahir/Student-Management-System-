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
include ('titles/title6.php');
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS | Student Management System</title>
</head>
<body class="p-3 mb-2 bg-light text-dark">
 <form method="post" action="addmarks.php" enctype="multipart/form-data">
  <table class="table table-striped" >
      
     
     <tr>
         <th>PHP</th>
         <td><input type="number" class="form-control is-valid"  name="php" placeholder="Php marks..." required></td>
     </tr>
     <tr>
         <th>ASP</th>
         <td><input type="number" class="form-control is-valid"  name="asp" placeholder="Asp marks..." required></td>
     </tr>
     <tr>
         <th>MIS</th>
         <td><input type="number"  class="form-control is-valid" name="mis" placeholder="Mis marks..." required></td>
     </tr>
     <tr>
         <th>Compiler</th>
         <td><input type="number" class="form-control is-valid"  name="compiler" placeholder="Compiler marks" required></td>
     </tr>
     <tr>
         <th>CCNA</th>
         <td><input type="number" class="form-control is-valid"  name="ccna" placeholder="Cnna marks..." required></td>
     </tr>
     <tr>
         <td colspan="2"> <input type="submit" class="btn btn-success" name="submit" value="Add Marks"></td>
     </tr>
     </table>
 </form>
    </body>
</html>
   
  <?php
if(isset($_POST['submit']))
{
    include '../dbcon.php';
    $php = $_POST['php'];
    $asp = $_POST['asp'];
    $mis = $_POST['mis'];
    $compiler = $_POST['compiler'];
    $ccna =  $_POST['ccna']; 
    $qry = "INSERT INTO `exam`(`php`, `asp`, `mis`, `compiler`, `ccna`) VALUES ('$php','$asp','$mis','$compiler','$ccna')";
    
    $run = mysqli_query($con,$qry);
    
    if($run == true)
    {
        ?>
        <script>
            alert('Marks Inserted Successfully.');

</script>
        <?php
    }

    

    
}


?>
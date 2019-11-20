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
include ('titles/title7.php');
include ('../dbcon.php');
$sid = $_GET['sid'];
$sql = "SELECT * FROM exam WHERE id ='$sid'";
$run = mysqli_query($con,$sql);
$data= mysqli_fetch_assoc($run);
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMS | Student Management System</title>
</head>



<body class="p-3 mb-2 bg-light text-dark">
 <form method="post" action="Showmarks.php" enctype="multipart/form-data">
  <table class="table table-striped" >
     <tr>
        
        
<?php
         require("../dbcon.php");
    $sql="SELECT * FROM exam";
    $exam=mysqli_query($con, $sql);
    $row1=mysqli_fetch_array($exam);
    
    ?> <tr>
         <th>PHP</th>
      <td><?php echo $row1['php'];?></td>
      </tr>
    
     <tr>
         <th>ASP</th>
      <td><?php echo $row1['asp'];?></td>
      </tr>
    
    <tr>
         <th>MIS</th>
      <td><?php echo $row1['mis'];?></td>
      </tr>
    
     <tr>
         <th>Compiler</th>
      <td><?php echo $row1['compiler'];?></td>
      </tr>
    
     <tr>
         <th>CCNA</th>
      <td><?php echo $row1['ccna'];?></td>
      </tr>
    
     <tr>
         <td colspan="2">
           <input type="hidden" name="sid" value="<?php echo $data['id'];?>">
         </td>
     </table>
 </form>
   
    </body>

</html>
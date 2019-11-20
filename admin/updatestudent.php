<?php
session_start();
if(isset($_SESSION['uid']))
{
    echo "";
}
else
{
   header('location: ../login.php');
}
?> 
<?php
include ('header.php');
include ('titles/title8.php');
?>
<!DOCTYPE html>
<html lang="en">
<body class="p-3 mb-2 bg-light text-dark">
<table class="table table-striped">
<form action="updatestudent.php" method="post">
    <tr>
        <th>Enter Standerd</th>
        <td>  <input type="number" class="form-control is-valid" name="standerd" placeholder="Enter Standerd" required></td>
    </tr>
  <tr>
      <th>Enter Student Name</th>
      <td><input type="text" class="form-control is-valid" name="stuname" placeholder="Enter Student Name" required></td>
  </tr>
  <tr>
      <td colspan="2"><input type="submit" class="btn btn-success" name="submit" value="Search"></td>
  </tr>

</form>
</table>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Rollno</th>
        <th>Edit</th>
    </tr>
<?php
    if(isset($_POST['submit'])){
        include('../dbcon.php');
        $standerd = ucfirst($_POST['standerd']);
        $name = ucfirst($_POST['stuname']);
        $sql = "SELECT * FROM `student` WHERE `standerd`='$standerd' AND `name` LIKE '%$name%'";
        $run=mysqli_query($con,$sql);
        
        if(mysqli_num_rows($run)<1)
        {
            echo "<tr><td colspan='5'>No Records Found</td></tr>";
        }
        else 
        {
            
            $count=0;
            while($data=mysqli_fetch_assoc($run))
            {
                $count++;
              ?>
               <tr>
        <td><?php echo $count; ?></td>
        <td><img src="../dataimg/<?php echo $data['image'];?>" class="img-thumbnail" style="max-width:100px;"></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['rollno']; ?></td>
        <td><a href="updateform.php?sid=<?php echo $data['id'];?>">Edit</a></td>
    </tr>
              
                <?php  
            }
        }
        
    }
    ?>
</table>

    </body>
</html>
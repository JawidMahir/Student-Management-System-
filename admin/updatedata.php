<?php
include('../dbcon.php');
    $rolLno = $_POST['rollno'];
    $name = $_POST['name'];
    $city = $_POST['city'];
    $pcon = $_POST['pcon'];
    $std =  $_POST['std'];
    $id =  $_POST['sid'];
    $imagename = $_FILES['simg']['name'];
    $tempname = $_FILES['simg']['tmp_name'];
    
    move_uploaded_file($tempname,"../dataimg/$imagename");    
        
     
    $qry = "UPDATE student SET rollno = '$rolLno', name = '$name', city = '$city', pcont = '$pcon', standerd = '$std', image = '$imagename' WHERE id = $id";
    
    $run = mysqli_query($con,$qry);
    
    if($run == true)
    {
        ?>
        <script>
            alert('Student Details Updated Successfully.');
            window.open('updateform.php?sid=<?php echo $id;?>','_self');

</script>
        <?php
    }
?>
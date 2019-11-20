<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admin/admindash.php');
}

?>
<html lang="en">

<head>
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" type="image/png" href="images/1.png">
  
    <meta charset="UTF-8">
    <title>SMS | Student Management System</title>
</head>
<body class="p-3 mb-2 bg-light text-dar
k">
 <div class="container" align="center">
   <br><br><br><br><br><br><br>
    <form action="login.php" method="post" class="form-control">
       <div class="container" align="center">
        <table class="table table-striped">
            <h1><b>Admin Login</b></h1>
            <h3 align="right"><a href="index.php">BackInfo</a></h3>
            <tr>
                <th align="center"><b>Username</b></th><td><input type="text" class="form-control is-valid" name="username" required></td>
            </tr>
            <tr><th><b>Password</b></th><td><input type="password" class="form-control is-valid" name="pass" required></td></tr><br>
            <tr><td colspan="6"><input type="submit"  class="btn btn-success" value="login" name="login"></td></tr>
        </table>
        </div>
         
     </form>
   </div>
    
</body>
    
</html> 

<?php
include('dbcon.php');

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['pass'];
    
    $qry= "SELECT * FROM admin WHERE username='$username' AND password='$password'";
   $run =  mysqli_query($con,$qry);
   $row = mysqli_num_rows($run);
     if($row <1)
     {
         ?>
         <script>
             alert('Username or Password not match !!');
             window.open('login.php','_self ');
         </script>
         <?php
     }
    else
    {
        $data = mysqli_fetch_assoc($run);
        
        $id = $data['id'];
        session_start();
       
        $_SESSION['uid']=$id;
        
        header('location:admin/admindash.php');
        
    }
    
}


?>
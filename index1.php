<?php
    session_start();
    error_reporting(0);
    include('includes/dbconn.php');

    if(isset($_POST['login']))
    {
        $adminuser=$_POST['username'];
        $password=$_POST['password'];

        $query=mysqli_query($con,"SELECT ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
        $ret=mysqli_fetch_array($query);

        if($ret>0){
            $_SESSION['avmsaid']=$ret['ID'];
            header('location:dashboard.php');
        } else {
        echo '<script>
            window.location.href = "index1.php";
        alert("Login failed. Invalid username or password")
        </script>';
    }    }
  ?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Apartment Security login</title>
</head>
<body><div class="container">
<form method="post"> 

         <div class="login-form">
        <div class="login">
            <h2><b>LOGIN</b></h2>
        </div>
        
<input type="text" placeholder="Username" name="username" required>
<input type="password" placeholder="Password" name="password">
 <input type="submit" placeholder="submit" name="login">
        </div>
    
    </form>
</div>     
</body>
</html>
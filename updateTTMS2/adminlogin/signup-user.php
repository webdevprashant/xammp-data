<!-- <?php require_once "controllerUserData.php"; ?> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <h2 class="text-center">Signup Form</h2>
                
                <form action="signup-user.php" method="post">

<div class="form-group">
                    <div class="form-group">
                        <input class="form-control" type="text" name="uname" placeholder="Enter Username" required>
                    </div>

                        <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                    </div>
<br><br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Sign Up">
                    </div>
        
                    <div class="link login-link text-center">Already a member? <a href="login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php

include '../dbcon.php';
if(isset($_POST['login'])) {
	$username   = $_POST['uname'];
	$email   = $_POST['email'];
	$password= $_POST['password'];
    $qry="INSERT INTO `admin`(`username`, `email`, `password`) VALUES ('$username','$email','$password');";
    $run=mysqli_query($conn,$qry);	
    $row=mysqli_num_rows($run);
if($row < 1) {
      ?>
	  <script>
	  alert('Signed Up Successully ! !');
         window.open('signup-user.php','_self');
      </script>	  
		 <?php
}
else {
$data = mysqli_fetch_assoc($run);
$id=$data['id'];
session_start();
$_SESSION['uid']=$id;
header("Location:../admindash.php");
}	
}
?> 
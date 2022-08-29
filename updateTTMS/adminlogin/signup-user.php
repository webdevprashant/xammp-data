<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }

?>
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
    $qry1="SELECT * FROM `admin` WHERE email='$email'";

    $run=mysqli_query($conn,$qry);	
    $run1=mysqli_query($conn,$qry1);	
    $data = mysqli_num_rows($run1);
    // $row=mysqli_num_rows($run);
if($run ==true && $data==0) {
      ?>
	  <script>
	  alert('Signed Up Successully ! !');
         window.open('login.php','_self');
      </script>	  
		 <?php
}
else {
    ?>
        <script>
    	  alert('This Email Id Already exist ! !');
         window.open('signup-user.php','_self');
      </script>	  
    <?php
}
}
?> 

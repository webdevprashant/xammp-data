<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }

?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 align="center" style="margin-top: 15px;"> Welcome To Admin Dashboard</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login.php" method="post">
                    <h2 class="text-center" align="center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter Email Address" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Enter Password" required>
                    </div>
<br><br>
                    <div class="link forget-pass text-left"><a href="forgot-password.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                    <div class="link login-link text-center">Not yet a member? <a href="signup-user.php">Signup now</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php

include '../dbcon.php';
if(isset($_POST['login'])) {
	$email   = $_POST['email'];
	$password= $_POST['password'];
    $qry="SELECT * FROM admin WHERE email ='$email' AND password='$password'";
    $run=mysqli_query($conn,$qry);	
    $row=mysqli_num_rows($run);
if($row < 1) {
      ?>
	  <script>
	  alert('Email or Password not match ! !');
         window.open('login.php','_self');
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
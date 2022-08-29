<!-- <?php require_once "controllerUserData.php"; ?> -->
<!-- <?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
   else {
	   header('location: login.php');
   }
?> -->
<html>
<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgot-password.php" method="post">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address : </p>
                
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                    <input class="form-control button" type="submit" name="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


<?php

include '../dbcon.php';
if(isset($_POST['submit'])) {
	
    $email= $_POST['email'];

    $qry="SELECT * FROM `admin` WHERE email='$email'";

    $run=mysqli_query($conn,$qry);	
    $data = mysqli_num_rows($run);
if($data== 1) {
header("Location:changepass.php");

}
else {
    ?>
    <script>
    alert('Email Id not exist, Please Sign Up first ... ! !');
    window.open('signup-user.php','_self');
    </script>	  
    <?php
}	
}
?> 
<!-- <?php require_once "controllerUserData.php"; ?> -->
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
                </form>
            </div>
        </div>
</div>
    
</body>
</html>


<?php

include '../dbcon.php';

$email= $_POST['email'];

$qry="SELECT * FROM `admin` WHERE email='$email'";

$run=mysqli_query($conn,$qry);	    
$data=mysqli_num_rows($run);
while($data1= mysqli_fetch_array($run)) {
if(isset['$_POST'])
    if($data== 1) {
        header("Location:changepass.php");
        ?>
                    }
                    <?php     }
     ?>

else {
    ?>
    <script>
    alert('Email Id not exist, Please Sign Up first ... ! !');
    window.open('signup-user.php','_self');
    </script>	  
    <?php
}	

?> 
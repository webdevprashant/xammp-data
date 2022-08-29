<?php
session_start();
   if(isset($_SESSION['uid'])) {
	   echo "";
   }
?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="changepass.php" method="post" >
                    <h2 class="text-center">Change Password</h2>
                    <br>
                    <p class="text-center">Your New Password : </p>
                
                    <div class="form-group">
                        <input class="form-control" type="password" name="newpass" placeholder="Enter Your New Password" required>
                    </div>
                    <br>
                    <p class="text-center">Repeat New Password : </p>
                
                <div class="form-group">
                    <input class="form-control" type="password" name="repass" placeholder="Repeat Your New Password" required>
                </div>
                <br>
                    <br>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="submit" 
                        value="Change Password"></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>


<?php
$conn=new mysqli('localhost:3308','root','','sttms');
if(isset($_POST['submit'])) {
    
    $newpass= $_POST['newpass'];
    $reppass= $_POST['repass'];
    $qry="UPDATE `admin` SET `password`='$newpass'";
        $run = mysqli_query($conn , $qry);

if($run== true) {
    ?>
    <script>
    alert("Password Changed Succesfully ! !");
    window.open("login.php?id=<?php echo $id; ?>" , _self);
    <?php

}
else {
    ?>
    <script>
    alert('Something Wrong ... ! !');
    window.open('changepass.php','_self');
    </script>	  
    <?php
}	
}

?> 

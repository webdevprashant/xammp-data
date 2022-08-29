<h1 align="center">
<!--                SOLUTION OF 2 Problem -->
<?php
session_start();
    if(isset($_SESSION['Uname'])) {

        echo "Welcome ".$_SESSION['Uname'];
    }
    else {
        echo "You are not logged in";
    }
?>
</h1>

<!-- Below Code belongs to LESSON14_PT3 How to Destroy Session -->
<h2><a href="Logout14.php" style="float: right;">Logout</a></h2>
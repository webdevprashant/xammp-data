<!--                                        Creating MySQL Database using PHP -->

<?php
$conn = new mysqli('localhost:3307' , 'root' , '');
$sql = "Create database harrytut";
$run = mysqli_query($conn , $sql);
 if($run) {
     echo "Database created successfully";
 }
 else {
     echo "Already Exists";
 }
?>
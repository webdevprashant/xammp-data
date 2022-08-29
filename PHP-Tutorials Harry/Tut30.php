<!--                            Updating Records in PHP  -->

<?php
$conn = new mysqli('localhost:3307' , 'root' , '' ,'harrytut');
$sql = "UPDATE `tut28` SET `Name` = 'jay' WHERE `Sno` = 3;";
$run=mysqli_query($conn , $sql);
echo var_dump($run)."<br>";                   // It returns T F, you can check this using var_dump($run)

//                          Check How many rows updated
$aff = mysqli_affected_rows($conn);
echo $aff." Records are Updated "; 
if($run) {
    echo "<br>Update Success";
}
else {
    echo "Not Updated";
}
?>
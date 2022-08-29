<!--                            Deleting Records in PHP  -->

<?php
$conn = new mysqli('localhost:3307' , 'root' , '' , 'harrytut');
$sql = "DELETE FROM `tut28` WHERE Name='Agam'";
$run=mysqli_query($conn , $sql);
$aff = mysqli_affected_rows($conn);
    echo $aff ." Recors deleted <br>";
if($run) {
    echo "Record Deleted Successfully";
}
else {
    echo "No record";
}
?>
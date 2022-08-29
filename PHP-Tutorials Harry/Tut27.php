<!--                                        Insert data into table Using PHP -->

<?php
$conn = new mysqli('localhost:3307' , 'root' , '' , 'harrytut');

$sql = "Insert into tut26(Name , Address , City) Values('Ram','East','Agra');  ";
$run=mysqli_query($conn , $sql);

if($run) {
    echo "Data inserted Successfully";
}
else {
    echo "Error";
}
?>
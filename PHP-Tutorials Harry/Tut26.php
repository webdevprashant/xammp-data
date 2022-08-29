<!--                                        Creating table Using PHP -->

<?php

$conn = new mysqli('localhost:3307' , 'root' , '' , 'harrytut');
$sql = "Create table tut26 (    
        Id int not null auto_increment primary key, 
        Name varchar(40), 
        Address varchar(40),
        City varchar(40)    ) 
";
$run = mysqli_query($conn , $sql);
if($run) {
    echo "Table Created Successfully";
}
else {
    echo "Table already Exist";
}
?>
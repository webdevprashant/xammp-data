<!--                                        Connecting to MySQL Database -->

<?php
$conn = new mysqli('localhost:3307' , 'root' , '' , 'harrytut');

if($conn) {
    echo "Connected Successfully";
}
else {
    echo "Error";
}
?>
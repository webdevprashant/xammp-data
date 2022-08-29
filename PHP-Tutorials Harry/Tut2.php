<!--                            Creating Our Fist PHP Website -->

<!-- <?php
    echo "Hello WWE Champion<br>";                          //  It is normal print statement in PHP
    echo 5*67;
?> -->

<!--                This code belongs to tut28 -->

<?php
$conn = new mysqli('localhost:3307','root','' , 'harrytut');

$name = $_POST['name'];
$email = $_POST['email'];
$dec = $_POST['concern'];
$sql = "INSERT INTO `tut28` (`Name`, `email`, `Concern`, `dt`) 
        VALUES ('$name', '$email', '$dec', current_timestamp())";
$run=mysqli_query($conn,$sql);

if($run) {
    echo "Data inserted Successfully";
}
else {
    echo "Something is problem";
}
?>

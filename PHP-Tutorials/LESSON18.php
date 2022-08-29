<!-- <h1 align="center">How to connect Database with PHP</h1> -->

<!-- L17 Create database - csetutsdb and table name - Student And insert some records  -->


<?php
$conn=new mysqli('localhost:3308' , 'root' , '' , 'csetutsdb');
// if ($conn) {
//     echo "Connected";
// }

?>


<!--                    This cpde belongs to Tut 19 -->
<?php
    $conn=new mysqli('localhost:3308' , 'root' , '' , 'csetutsdb');
    $roll = $_POST['roll'];
    $name = $_POST['name'];
    $standard = $_POST['std'];
    $add = $_POST['address'];
    $sql = "INSERT INTO `student`(`Rollno`, `Name`, `Standard`, `Address`) VALUES ('$roll','$name','$standard','$add')";

    $run=mysqli_query($conn , $sql);
    if ($run) {
        echo "Done <a href='LESSON19.php' >Click Here to Insert More</a>";
        ?>
        <!-- <script> -->
        <!-- // alert('Data Inserted Successfully'); -->
        <!-- </script> -->
          <?php    
    }
    else {
        echo "Something Is Missing !!!!";
    }
?>
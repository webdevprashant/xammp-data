<h1 align="center">How To Store Images in Database with PHP</h1>
<html>
<body>
<form method="post" action="LESSON21.php" enctype="multipart/form-data">
<input type="file" name="img1" required>
<input type="submit" name="submit" value="Upload">
</form>
</body>
</html>

<?php

if (isset($_POST['submit']))    {
    $imgname = $_FILES['img1']['name'];                         // Store filename in imgname var
    $tempimgname = $_FILES['img1']['tmp_name'];                 // Store temp name which stores server first
    $conn = new mysqli('localhost:3308' , 'root' , '' , 'phpdb');
        move_uploaded_file($tempimgname , "images/$imgname");
        // This is fn, says that store file(tempname) in server and in img21 folder with original name
        $sql = "INSERT INTO `storeimg`(`Images`) VALUES ('$imgname')";
        $run = mysqli_query($conn , $sql);
       echo "Upload Success";   
}
?>
<?php
include 'dbh.php';
$uname=$_POST['uname'];
$Email=$_POST['Email'];
$password=$_POST['Password'];

$sql="insert into signup (Username,email,Password)
VALUES ('$uname','$Email','$password')";

$result=$conn->query($sql);
header("Location:index.php");
?>
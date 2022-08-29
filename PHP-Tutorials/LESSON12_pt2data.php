        <h1>Receive Data Using POST </h1>
<?php
echo 'Your Name is '.$_POST['name']."<br>";
echo 'Your Password is '.$_POST['pass']."<br>";
echo 'Your Address is '.$_POST['address']."<br>";
echo 'Your Gender is '.$_POST['gender']."<br><br><br>";
?>

        <h1> Receive Data Using REQUEST </h1>

<?php
//  Request receive both type of data Get & Post
echo 'Your Name is '.$_REQUEST['name']."<br>";
echo 'Your Password is '.$_REQUEST['pass']."<br>";
echo 'Your Address is '.$_REQUEST['address']."<br>";
echo 'Your Gender is '.$_REQUEST['gender']."<br>";

?>
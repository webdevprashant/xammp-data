<h1 align="center">SUPER GLOBAL ARRAY & $_SERVER IN PHP </h1>
<h3>
<?php
echo "HTTP_HOST = ".$_SERVER['HTTP_HOST']."<br>";              // To know the host name of Wamp/Xammp Server     
echo "HTTP_USER_AGENT = ".$_SERVER['HTTP_USER_AGENT']."<br>";  // To know browser's information
echo "REMOTE ADDR = ".$_SERVER['REMOTE_ADDR']."<br>";          // Tells IP Address 
echo "SERVER PORT = ".$_SERVER['SERVER_PORT']."<br>";          // Tells server port 
echo "PHP SELF  = ".$_SERVER['PHP_SELF']."<br><br><br>";        // Denotes file location 

function show() {
    return $_SERVER['HTTP_USER_AGENT'];
}

echo "You are using ". show()."<br>";
?>
</h3>
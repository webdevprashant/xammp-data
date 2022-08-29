<h1 align="center">FUNCTIONS IN PHP PT1 </h1>

<?php
function sayhello() {               //      Without parameter
    echo "Hello This is printed by fn <br>";
}

function sayhello1($a1) {               //      With parameter
    echo "Hello This is printed  ".$a1."<br>";
}

sayhello();
sayhello1('Prashant');

$a2='Vijay';

sayhello1($a2);
?>
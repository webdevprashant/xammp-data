<?php

trait message1 {
public function msg1() {
echo "OOP is Fun";
}
}

class welcome {
 use message1;
}

$obj=new welcome();
$obj->msg1();
?>

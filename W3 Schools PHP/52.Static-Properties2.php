<?php

class pi {
 public static $value=3.12345;
public function staticvalue() {
   return self::$value;
}
}

// Get static property
$pi=new pi();
echo $pi->staticvalue();
?>
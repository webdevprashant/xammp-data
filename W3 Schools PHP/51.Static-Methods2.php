<?php

class greeting {
   public static function welcome() {
        echo "Hey Prasant";
}
   public function __construct() {
        self::welcome();
}
}
new greeting();
?>


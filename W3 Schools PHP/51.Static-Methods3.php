<?php

class domain {
   protected static function getwebname() {
       return "W3 Schools.com";
}
}
class domainw3 extends domain {
  public $webname;
   public function __construct() {
     $this ->websiteName=parent::getwebname();
}
}
$domainw3=new domainw3;
echo $domainw3 -> websitename;
?>


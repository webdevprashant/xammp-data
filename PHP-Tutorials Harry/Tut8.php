<!--                                        String Functions in PHP -->

<?php

$name = "Lord of Darkness The Lagendary Phenom";
echo    "The length of ". "my string is ". strlen($name)."<br>";
echo str_word_count($name)."<br>";                                  //  Count total words in specific str

echo strrev($name)."<br>";                                          //  Returns blank str
echo strpos($name , 'The')."<br>";          // search specific str, if found returns char position no. else blank

echo str_replace('Lord' , 'Demon Of Death Valley' , $name)."<br>";   // 1 - Replace str , 2 - New str , 3 - str name 

echo str_repeat($name , 3)."<br>";             // 1 - str name , 2 - No of times repeat

echo rtrim("       This is fn which removes spaces at right side          ")."<br>";
echo ltrim("       This is fn which removes spaces at left side           ")."<br>";


?>
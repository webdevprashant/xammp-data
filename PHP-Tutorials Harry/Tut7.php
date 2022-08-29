<!--                                        Data Types in PHP -->

<?php
$name = "Hari";
$income = 200;

/*
                    PHP Data types
1. String
2. Interger
3. Float
4. Boolean
5. Object
6. Array
7. NULL

*/

//                  String - Sequence of Characters

$name = "Ramesh";
$name2 = 'Rahul';
echo "$name ka friend h $name2<br>";

//                  Integer - Non decimal number
$num1 = 344;
$num2 = -234.0;
echo "$num1 is different with $num2<br>";

//                  Float - Decimal point number

$num1 = 23.89;
$num2 = -23.78;
echo "$num1 and $num1 are decimal point numbers <br>";


//                  Boolean - Either True or False
$x = true;
$y= false;

//                  var_dump takes variables,print its value and type
echo var_dump($x)."<br>";
echo var_dump($y)."<br>";

//      Object - Instances of classes
//      Employee is a class , Harry can be object 

//                   Array - Used to store multiple values in a single variable

$array = array('Rohan' , 'SkillF' , 'Shubham' , 'Jarry');

echo $array[0]."<br>";
echo $array[1]."<br>";
echo $array[2]."<br>";
echo $array[3]."<br>";
echo "<pre>";
print_r($array);
echo "</pre>";
//                    NULL 

$n = NULL;
echo var_dump($n);

?>
<!--                                 Multi Dimensional Array in PHP -->

<!-- 
Array ke andr array(Nested Array) is called multi dim array

 -->

 <?php
        //          This is 2D array  
$multidim =array(
                        array(2,5,7,8),
                        array(1,2,3,1),
                        array(4,5,0,8)
                );
                // echo var_dump($multidim);
                // echo $multidim[1][2];

//                  Printing Content and details of 2D array
                for($i=0; $i<count($multidim); $i++) {
                    echo var_dump($multidim[$i])."<br>";
                }

for ($i=0; $i < count($multidim); $i++) { 
for ($j=0; $j < count($multidim[$i]); $j++) { 
echo $multidim[$i][$j];
echo " ";
}
echo "<br>";
}

 ?>
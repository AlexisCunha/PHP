<?php


function graden(){
    $a= 20;
    echo ($a-32)/1,8;
} 

function three(){
    $a= 6/3;
    echo $a;
    var_dump(is_int($a));
}

function rever(){
 echo strrev("Hello world!");
}
echo "<br>";
graden();
echo "<br>";
rever();
echo "<br>";
three();


?>


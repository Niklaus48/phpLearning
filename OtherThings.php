<?php


//how you print
echo "Hello World";

$a = array("hello","salam",20);

//how you make a function
function  func()
{
    echo "ColorFull Flag";
}

//how you call a function
func();

//this function give us a good information about our variables like their lenghts and types and...
var_dump($a);


//how you can get a random number
rand(1,6);

//foreach structure
foreach ($a as $item){
    echo $item;
}

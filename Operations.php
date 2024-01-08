<?php


$a = 5;
$b = "5";


//== check if values are equal on matter of their type
var_dump($a == $b);

//=== check if values are equal include of their type
var_dump($b === $a);

$str1 = "Hello";
$str2 = "My Name Is Amin";

// operator . merge two string and int and... output of this eche is :  Hello My Name Is Amin
echo $str1 . $str2;
<?php

//how you can make an array

$array = array("Amin","Negin","Ali");
$array2 = ["Amin","Negin","Ali"];
//array based on a key as index
$array3 = array("Amin"=> 18,"Negin"=> 19,"Ali"=>17);

//how you can add an element at the end of an array
$array[] = "Nima";
echo array_push($array,"Amir");

//how you can remove an element at the end of an array
array_pop($array);

//how you can remove an element at the first of an array and return its values
array_shift($array);

//how you can add an element at the first of an array
array_unshift($array,"Javad");

//how you can get lenght of an array
echo count($array);
echo sizeof($array);

//how you can check if an element exist in array and also if you set the third input to true this function check for their types too
echo in_array("Negin",$array,false);

//this function serarch in array to find an element and if was success it return index of that element and also can check their types to
echo array_search(17,$array,false);

//point to the First element of an array and return the value of that
echo current($array);

//reset the pointer and return it to the first element of an array
echo reset($array);

// Move The Pointer to the next element
next($array);

//Move the pointer to the previos Element
prev($array);

//return value of the last Element in
end($array);

//return the index of pointed element
echo key($array);

//sort an array based on its values and if array contain both string and numbers the string values have more priority than numbers
//and strings are sorted based on english alpahbet (A to Z)
sort($array);

//sort reverse high to low or Z to A
rsort($array);

//sort element without changing their index
asort($array);

//sort array based on key
ksort($array);

//dont know how to explain
natsort($array);
<?php


//how you print
echo "Hello World";

//how you Make variables
$a = "string";
$b = 20;
$c = true;
$f = array("amin",20,false);
$str = <<<EOD
At The End Of The Day I Choose you :) 
EOD;


//how you make a function
function  func()
{
    echo "ColorFull Flag";
}

//how you call a function
func();

//this function give us a good information about our variables like their lenghts and types and...
var_dump($f);

//this function help us to access substring of an string
echo substr($str,3,5);

//this function give us lenght of an string
echo strlen($a);

//this function give us the number of words inside an string
echo str_word_count($str);

//this function do replacing in string
echo str_replace("End","Start",$str);

//this function give us index of an string inside an string
echo strpos($a,"r");

//this function remove given string from an string
echo trim($a,"s");

//this function(explode) split an string using the given keySeparator
print_r(explode(" ",$str));

//this function is a not for explode function
echo implode(" ",$f);

//this function check two string and if they were equal return 0 and if they not return -1
echo strcmp($str,$a);

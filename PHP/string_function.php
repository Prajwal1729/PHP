<?php

$str = "Black Hole";


// length:
echo strlen($str) . ' <br>';


// find position of the first occurence of a substring in a string.

echo strpos($str,"Ho") . ' <br>';

// find position of the last occurence of a substring in a string.

echo strrpos($str,"la") . ' <br>';

// reverse string

echo strrev($str) . '<br>';

// convert the string characters to lowercase

echo strtolower($str) . '<br>';

// convert the string characters to uppercase

echo strtoupper($str) . '<br>';

// convert first character of each word to upper case.

echo ucwords($str) . '<br>';

// return portion of a string specified by offset and length.

echo substr($str,0,5) . '<br>';
echo substr($str,5) . '<br>';

if(str_starts_with($str,"Black")){
    echo "Yes" . '<br>';
};

if(str_ends_with($str,"Hole")){
       echo "Yes";
};

// $str2 = '<h1>Hello</h1>';

$str2 = '<script>alert(1)</script>';
echo htmlspecialchars($str2) . '<br>';


printf('%s likes to %s','Prajwal','Code') . '<br>';
printf('1+1=%d',1+1);







?>
<?php

// $cars = ["Lamborgini","Audi","Mercedes","BMW"];

// echo count($cars);

// search array:

// var_dump(in_array('Audi',$cars));

// add to array:
// $cars[] = 'Rolls Royce';
// print_r($cars);

// push
// array_push($cars,'Rangrover');
// print_r($cars);

// unshift
// array_unshift($cars,'Jaguar');
// print_r($cars);

// remove:
// array_pop($cars);
// array_shift($cars);
// print_r($cars);

// unset($cars[2]);

// $chunked_array = array_chunk($cars,2);
// print($chunked_array);
// print_r($cars);

$arr1 = [1,2,3,4,5];
$arr2 = [6,7,8,9,10];

$new_arr = array_merge($arr1,$arr2);
print_r($new_arr);


// spread operator:
$arr4 = [...$arr1,...$arr2];
// print_r($arr4);


$a = ['green','blue','yellow'];
$b = ['avocardo','banana','apple'];
$c = array_combine($a,$b);
print_r($c);

$keys = array_keys($c);
print_r($keys);

$val = array_values($c);
print_r($val);


$flip = array_flip($c);
print_r($flip);


$numbers = range(1,20);
// print_r($numbers);

// map

$newNumbers = array_map(function($number){
    return "Number ${number}";
},$numbers);

print_r($newNumbers);

// filter

$num_less_10 = array_filter($numbers,fn($num) => $num <= 10);
print_r($num_less_10);

// reduce:
$sum = array_reduce($numbers,fn($carry,$num)=>
$carry + $num);

var_dump($sum);


?>
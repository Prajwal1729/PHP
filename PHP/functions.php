<?php

// $y = 1899;

function registerUser($email){
    // global $y;
    // echo $y . '<br>';
    // $x=10;

   echo $email . ' Registered' . ' <br>';
   echo "User Registered";
}
// echo $x;
// registerUser("prajwal1729@gmail.com");  


function sum($a,$b){
    return $a + $b;
}

// $num = sum(67,89);

// echo $num;


$subtract = function($n1,$n2){
    return $n1 - $n2;
};

// echo $subtract(10,6);

$multiplication = fn($n1,$n2) => $n1*$n2;

echo $multiplication(67,90);


?>
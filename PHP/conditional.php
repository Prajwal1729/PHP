<?php

$age = 23;

// if($age > 18){
//     echo 'You can drive';
// }

// else if($age < 18){
//     echo 'You cannot drive';
// }

// else{
//     echo 'Invalid syntax';
// }

$t = date("H");   // this vakue is by default the present value.

// echo $t;

// if($t < 12){
//     echo "Good Morning";
// }
// else if($t < 17){
//     echo "Good afternoon";
// }
// else{
//     echo "Good evening";
// }

// $posts = ["First Post"];

// if(!empty($posts)){
//     echo $posts[0];
// }

// else{
//     echo "No posts";
// }

// echo !empty($posts) ? $posts[0] : 'No Posts';

// $firstpost = !empty($posts) ? $posts[0] : 'No Posts';

// $firstpost = $posts[0] ?? null;
// echo $firstpost;

$favColor = 'black';

switch($favColor){
    case 'red':
        echo "Your favorite color is red";
        break;
    
    case 'blue':
        echo "Your favorite color is blue";
        break;
    
    case 'yellow':
        echo "Your favorite color is yellow";
        break;
    
    case 'black':
        echo "Your favorite color is black";
        break;
    default:
       echo "No color";
       
}




?>
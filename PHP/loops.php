<?php

// for loop

// for($i = 0;$i <= 10;$i++){
//     echo $i . '<br>';
// }

// while loop

// $x = 0;
// while($x < 10){
//     echo $x .  '<br>';
//     $x++;
// }


// do-while loop.
// $a = 0;
// do{
//     echo $a . '<br>';
//     $a++;
// }while($a < 10);

$posts = ["First Post","Second Post","Third Post","Fourth Post"];

// foreach($posts as $val){
//     echo $val . '<br>';
// }


for($x = 0;$x<count($posts);$x++){
    echo $posts[$x] . '<br>';

}

'<br>';

$person = [
    'first_name' => 'Prajwal',
    'last_name' => 'Chavan',
    'email' => 'prajwalc129@gmail.com'
];

foreach($person as $key => $value){
    echo "$key ---- $value" . '<br>';
};




?>


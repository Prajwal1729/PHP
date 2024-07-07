<?php

// simple arrays

$numbers = [2,73,7992,"Prajwal"];
$names = ["Prajwal","Havey","Mike","Jessia"];

print_r($numbers);
print_r($names);

var_dump($names);

// echo $names[2];

// Associative array:

$colors = [
    1 => 'red',
    4 => 'yellow',
    7 => 'blue'
];

// echo $colors[4];

$hex = [
    'red' => '#f00',
    'blue'=> '#0f0',
    'green'=> '#00f'
];

// echo $hex['blue'];


$person = [
    'first_name' => 'Prajwal',
    'last_name' => 'Chavan',
    'email' => 'prajwal8242@gmail.com'
];

// echo $person['first_name'];

$people = [
    [

    'first_name' => 'Prajwal',
    'last_name' => 'Chavan',
    'email' => 'prajwal8242@gmail.com'

    ],

    [

    'first_name' => 'John',
    'last_name' => 'Cena',
    'email' => 'johncen344@gmail.com'

    ],

    [

    'first_name' => 'Mike',
    'last_name' => 'Ross',
    'email' => 'Mike6372@gmail.com'

    ]

    ];

    // echo $people[1]['email'];

    var_dump(json_encode($people));

?>
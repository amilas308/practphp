<?php
// simple array
$numbers = [1,2,3,4,5,6];
$fruit = array('apple','mango', 'pineaple');
print_r($fruit);
// associative array
$color = [
    1 => 'red',
    2 => 'blue',
    3 => 'green',
    4 => 'purple',
];
$hex = [
    'red' => '#f3214',
    'black' => '#4123',
    'pink' => '#f2211',
    'indigo' => '#f2314',
];
$person= [
    'first_name' => 'Bilal',
    'last_name' => 'Aliyu',
    'email' => 'bilalaliyu@gmail.com',
];
$people = [
    [
        'first_name' => 'Bilal',
        'last_name' => 'Aliyu',
        'email' => 'bilalaliyu@gmail.com',
    ],
    [
        'first_name' => 'Masu',
        'last_name' => 'Alamin',
        'email' => 'bilalaliyu@gmail.com',
    ],
    [
        'first_name' => 'Abba',
        'last_name' => 'Jibril',
        'email' => 'bilalaliyu@gmail.com',
    ]
];
// echo $color[2];
// print_r($hex);
// print_r($person);
// echo $people[2]['last_name'];
var_dump(json_encode($people));


?>
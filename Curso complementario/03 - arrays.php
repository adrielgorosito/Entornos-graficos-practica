<?php
/* ----------- Arrrays ----------- */
$numbers = [1, 2, 3, 4, 5];
$colors = ['red', 'blue', 'green'];

echo $numbers[0] . "<br>";
echo $numbers[3] + $numbers[4] . "<br>";

var_dump($numbers);

/* ------ Associative Arrays ----- */
$colors = [
  1 => 'red',
  2 => 'green',
  3 => 'blue',
];

echo  "<br>" . $colors[1] . "<br>";

$hex = [
  'red' => '#f00',
  'green' => '#0f0',
  'blue' => '#00f',
];

echo $hex['red'] . "<br>";
var_dump($hex);

/* ---- Multi-dimensional arrays ---- */

$person1 = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

$people = [
  $person1,
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

echo "<br>" . $people[0]['first_name'] . "<br>";
echo $people[2]['email'] . "<br><br>";

var_dump($people);

// Encode to JSON
echo "<br><br>";
var_dump(json_encode($people));

// Decode from JSON
echo "<br><br>";
$jsonobj = '{"first_name":"Brad","last_name": "Traversy","email":"brad@gmail.com"}';
var_dump(json_decode($jsonobj));
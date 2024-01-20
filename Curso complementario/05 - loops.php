<?php

/* ------------ For ------------ */
echo "For loop: ";
for ($x = 0; $x <= 10; $x++) {
  echo $x;
}

/* ------------ While ------------ */
echo "<br> While loop: ";
$y = 1;

while ($y <= 5) {
  echo $y;
  $y++;
}

/* ---------- Do While --------- */
echo "<br> Do loop: ";
$z = 10;

do {
  echo $z;
  $z++;
} while ($z <= 5);

/* ---------- Foreach ---------- */
echo "<br> For each: ";
$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $n) {
  echo $n;
}

// Obtener el índice
echo "<br> For each con índice: <br>";
$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "* $index - $post <br>";
}

// Use the keys within the loop for an associative array
echo "For each de un array asociativo: <br>";
$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

foreach ($person as $key => $val) {
  echo "* $key - $val <br>";
}

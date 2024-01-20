<?php

/* ------------ Operadores ----------- */
// <, >, <=, >=, == (igual a), === (idéntico a), !=, !==

// Fechas -- Ejemplo fecha de hoy: $today = date("F j, Y, g:i a");
$today = date("F j, Y, g:i a");
echo $today . "<br>";

/* ---------- If --------- */

$age = 20;

if ($age >= 18) {
  echo 'Podés beber alcohol';
} else if ($age == 17) {
  echo 'Te falta un año para beber alcohol';
} else {
  echo 'No podés beber alcohol';
}

// Checkear si un arreglo es nulo con empty()
$posts = [];

if (!empty($posts[0])) {
  echo $posts[0];
} else {
  echo '<br> There are no posts';
}

/* -------- Operador ternario -------- */
echo !empty($posts[0]) ? $posts[0] : '<br> There are no posts <br>';

/* -------- Operador de coalescencia nula -------- */
// Siempre devuelve el primer parámetro, salvo que sea nulo
$firstPost = $posts[0] ?? null;
var_dump($firstPost);

/* -------- Switch------- */
$favcolor = 'red';

switch ($favcolor) {
  case 'red':
    echo '<br> Your favorite color is red!';
    break;
  case 'blue':
    echo '<br> Your favorite color is blue!';
    break;
  case 'green':
    echo '<br> Your favorite color is green!';
    break;
  default:
    echo '<br> Your favorite color is not red, blue, nor green!';
}
<?php

/* ----- Variables & Tipo de datos ----- */

/* --------- Tipos de datos --------- */
// String, Integer, Float, Boolean, Array, Object, NULL, Resource

/* --------- Reglas de variables --------- */
/*
- Se declaran con $
- Deben comenzar con una letra o con guión bajo
- No pueden comenzar con un número
- Solo pueden contener caracteres alfanuméricos o guiones (A-z, 0-9, y _)
- Son case-sensitive ($name y $NAME son dos variables distintas)
*/

$name = 'Name';
$age = 40;
$hasKids = true;
$cashOnHand = 10.5;

echo "Información sobre la variable 'cashOnHand': ";
var_dump($cashOnHand);
echo "<br><br>";

/* --- Impresión de variables -- */
echo "$name is $age years old";
echo '<h3>' . $name . ' is ' . $age . ' years old</h3>';

// Operaciones aritméticas
echo 5 + 5 . "<br>";
echo 10 - 6 . "<br>";
echo 5 * 10 . "<br>";
echo 10 / 2 . "<br>";

// Constantes
define('HOST', 'localhost');
define('USER', 'root');

var_dump(HOST);
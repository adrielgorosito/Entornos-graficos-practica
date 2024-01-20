<?php
/* ------------ Funciones ----------- */

// Cabe aclarar que las funciones tienen su propio scope, opuesto al scope global
$x = 5;

function testScope() {
  // if ($x == 5)
  //   echo "Esto tira error, no se reconoce la variable $x";
  $y = 10;
  if ($y == 10)
    echo "Esto no tira error";
}

if ($y != 10) {
  echo "Esto se imprime, pero la variable 'y' no vale 10 (cómo en la función), sino que es nula.<br>";
  var_dump($y);
}

// Función con parámetros
function registerUser($username, $edad) {
  echo "El usuario $username tiene $edad años";
}

echo "<br><br>Función con parámetros: ";
registerUser("John", 25);

// Función que retorna valores
function add($num1, $num2) {
  return $num1 + $num2;
}

$sum = add(5, 5);
echo "<br>Función con retorno: " . $sum;

// Función con valores predeterminados
function subtract($num1 = 10, $num2 = 5) {
  return $num1 - $num2;
}

echo "<br>Función con valores predeterminados: ";
echo subtract();

// Funciones anónimas (generalmente usadas para funciones callback)
$add = function ($num1, $num2) {
  return $num1 + $num2;
};

echo "<br>Función anónima: " . $add(5, 5);

// Funciones flecha
$multiply = fn($num1, $num2) => $num1 * $num2;

echo "<br>Función flecha: " . $multiply(5, 5);

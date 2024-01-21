<?php
/* --------- Funciones de arrays -------- */
$fruits = ['apple', 'banana', 'orange'];

echo "Arreglo original: ";
print_r($fruits);

// Obtener tamaño
echo "<br><br>Tamaño del arreglo: " . count($fruits);

// Checkear si el elemento está en el arreglo (devuelve 1 si está)
echo "<br>El elemento 'banana' está en el arreglo? Respuesta: " . in_array('banana', $fruits) . "<br>";

// Añadir elementos
$fruits[] = 'new1';
array_push($fruits, 'new2', 'new3', 'new4');
array_unshift($fruits, 'new5'); // Añade en el primer lugar

echo "Arreglo con nuevos elementos: ";
print_r($fruits);

// Remover elementos
array_pop($fruits); // Remueve el último
array_shift($fruits); // Remueve el primero
unset($fruits[2]); // Remove un elemento específico

echo "<br>Arreglo con elementos removidos: ";
print_r($fruits);

// Dividir el arreglo (en este caso, en 2 elementos)
$chunkedArray = array_chunk($fruits, 2);

echo "<br>Arreglo con tres elementos de máximo dos elementos cada uno: ";
print_r($chunkedArray);

// Concatenar arreglos
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

echo "<br>Arreglo concatenado: ";
print_r($arr3);

$arr4 = [...$arr1, ...$arr2]; // Usar Spread

echo "<br>Arreglo concatenado con Spread: ";
print_r($arr4);

// Combinar arreglos (keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

echo "<br>Arreglo combinado: ";
print_r($c);

// Arreglo de las keys
$keys = array_keys($c);

echo "<br>Arreglo de las keys: ";
print_r($keys);

// Invertir keys por values
$flipped = array_flip($c);

echo "<br>Arreglo invertido: ";
print_r($flipped);

// Crear un arreglo de un rango de números
$numbers = range(1, 5);

echo "<br>Arreglo de rango de números: ";
print_r($numbers);

// Arreglo nuevo con función map()
$newNumbers = array_map(function ($number) {
  return "Number $number";  // Le agrega el string "Number"
}, $numbers);

echo "<br>Arreglo con función map: ";
print_r($newNumbers);

// Filtrar arreglo con función filter()
$greaterThan2 = array_filter($numbers, fn($number) => $number > 2);

echo "<br>Arreglo filtrado: ";
print_r($greaterThan2);

// Reducir arreglo con función reduce()
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number); // "carry" guarda el valor de la iteración anterior

echo "<br>Arreglo reducido (suma de valores): ";
print_r($sum);

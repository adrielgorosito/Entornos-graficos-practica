<?php
/* ---------- String Functions -------- */
$string = 'Hello World';

// Obtener el tamaño
echo "Tamaño:" . strlen($string);

// Encontrar la posición de la primera ocurrencia
echo "<br>Posición primera ocurrencia de la letra 'o': " . strpos($string, 'o');

// Encontrar la posición de la última ocurrencia
echo "<br>Posición última ocurrencia de la letra 'o': " . strrpos($string, 'o');

// Invertir
echo "<br>String invertido: " . strrev($string);

// Convertir todos los caracteres a minúscula
echo "<br>Carácteres en minúscula: " . strtolower($string);

// Convertir todos los caracteres a mayúscula
echo "<br>Carácteres en mayúscula: " . strtoupper($string);

// Convertir la primera letra de cada palabra a mayúscula
echo "<br>Primer carácter de cada palabra en mayúscula: " . ucwords($string);

// Reemplazar string
echo "<br>Palabra 'World' reemplazada por 'Everyone: " . str_replace('World', 'Everyone', $string);

// Obtener porción del string (según offset y length)
echo "<br>String de las posiciones 0 a 8: " . substr($string, 0, 8);
echo "<br>String de la posición 8 al final: " . substr($string, 8);

// Checkear si comienza con...
if (str_starts_with($string, 'Hel')) {
  echo "<br>El string comienza con la palabra 'Hel'";
}

// Checkear si termina con...
if (str_ends_with($string, 'ryone'))
  echo "<br>El string termina con la palabra 'ryone'";
else
  echo "<br>El string no termina con la palabra 'ryone'";

// Imprimir código HTML con la función htmlentities()
echo "<br>Código html: " . htmlentities('<h1><u><i>Hello World</i></u></h1>');

// Strings formateados
printf('<br>%s is %s, but right now he only has $%f on his wallet', 'John', 'rich', 2.38);
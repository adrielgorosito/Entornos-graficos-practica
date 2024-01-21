<?php

/* ---------- Manejo de archivos --------- */
/* Es la habilidad de leer y escribir archivos en el servidor.
   Para las distintas operaciones de apertura, lectura, escritura y clausura hay distintos modos
    Modos: r, w, a, x, r+, w+, a+, x+
    r	- "sólo lectura"
    w - "sólo escritura". Borra el contenido del archivo o crea uno nuevo si no existe.
    a - "sólo escritura". Mantiene los datos del archivo o crea uno nuevo si no existe. El puntero se ubica al final.
    x - Crea un nuevo archivo en modo "sólo escritura". Devuelve "False" y un error si el archivo ya existe.
    Si se les agrega el signo "+" el archivo pasa a ser de "escritura y lectura": r+, w+, a+, x+
  */

$file = '14b - users_file.txt';

if(file_exists($file)) {
  // Devuelve el contenido y el número de bytes leídos del archivo
  echo "Función readfile(): ";
  echo readfile('14b - users_file.txt') . "<br><br>";

  // Abrir archivo
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file)); // Lee el archivo y devuelve el contenido como un string
  fclose($handle); // Cierra el archivo
  echo "Contenido del archivo: " . $contents;
} else {
  // Crear archivo
  $handle = fopen($file, 'w');
  $contents = 'Brad' .  PHP_EOL . 'Sara' .  PHP_EOL . 'Mike' .  PHP_EOL . 'John'; // PHP_EOL: fin de línea
  fwrite($handle, $contents); // Escribe el contenido al archivo y devuelve el número de bytes escritos
  fclose($handle);
}


<?php // PHP tag. Si no hay html debajo no es necesario cerrarlo.

/* ------------ Impresión de datos ------------ */

// Echo - strings, números, html, etc
echo 'String';
echo 123;
echo '<h1>HTML</h1>';

// print - Similar a echo pero más lento
print 'print<br><br>';

// print_r - Brinda más información y puede imprimir arreglos
print_r([1, 2, 3]);
print_r('<br><br>');

// var_dump - Imprime más información como el tipo de dato y longitud
var_dump('Hello');
var_dump([1, 2, 3]);

/* ------------ Comentarios ------------ */
// Comentario de una sola línea
/*
  Comentario de
  múltiple líneas
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <h1>Hello <?php echo '<u>World</u>'; ?></h1>
  <h2>Crash <?= 'Course' ?></h2>
</body>
</html>
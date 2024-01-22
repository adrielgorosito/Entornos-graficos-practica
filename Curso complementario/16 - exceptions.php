<?php

/* ----------- Exceptions ----------- */

function inverse($x) {
  if ($x === 0)
    throw new Exception('Division by zero.');
  return 1 / $x;
}

try {
  echo "1 - " . inverse(1) . '<br>';
  echo "2 - " . inverse(2) . '<br>';
  echo "3 - " . inverse(5) . '<br>';
  echo "4 - " . inverse(8) . '<br>';
  echo "5 - " . inverse(0) . '<br>';  // Aquí se produce el error
  echo "6 - " . inverse(9) . '<br>';  // De esta línea para adelante, no se ejecutará
  echo "7 - " . inverse(10) . '<br>';
} catch (Exception $e) {
  echo 'Caught exception: ' .  $e->getMessage();
} finally {
  echo "<br><br>Esta línea se ejecuta siempre, haya o no error ";
}

echo "<br><br>Fin del llamado a la función";
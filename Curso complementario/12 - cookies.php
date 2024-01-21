<?php
/* ------------- Cookies ------------ */

/*
  Las cookies sirven para guardar información en el navegador y luego devolverla. 
  Se puede especificar qué se va a gurdar y luego obtenerlo cuando el usuario visite el sitio de nuevo.
  Las cookies se guardan en el cliente, no se deberían guardar datos sensibles. Para ello, se utilizan las sesiones.
*/

// Guardar una cookie
setcookie('name', 'John', time() + 86400 * 30); // 86400 = 1 day

// Get a cookie
if (isset($_COOKIE['name'])) {
  echo "Cookie: " . $_COOKIE['name'];
}

// Delete a cookie
setcookie('name', '', time() - 86400);

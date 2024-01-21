<?php
/* ---------- Superglobals ---------- */
// Son variables por defecto que están disponibles en todos los scopes
/*
  $GLOBALS - Contiene información de cualquier variable
  $_GET - Contiene información sobre variables pasadas a través de la url o de un form
  $_POST - Contiene información sobre variables pasadas a través de un form
  $_COOKIE - Contiene información de variables guardadas en cookies
  $_SESSION - Contiene información de variables guardadas en una sesión
  $_SERVER - Contiene información sobre el servidor
  $_ENV - Contiene información sobre las variables de entorno
  $_FILES -  Contiene información sobre archivos subidos
  $_REQUEST - Contiene información sobre variables pasadas a través de la url o de un form
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
    <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
    <li>System Root: <?php echo $_SERVER['SystemRoot']; ?></li>
    <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
    <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
    <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
    <li>Request URI: <?php echo $_SERVER['REQUEST_URI']; ?></li>
    <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
    <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
    <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
    <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
  </ul>
</body>
</html>
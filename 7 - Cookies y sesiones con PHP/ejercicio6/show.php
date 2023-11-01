<?php
  session_start();
  if (isset($_SESSION['nombre'])) {
    $msg= "Bienvendio: ".$_SESSION['nombre'];
  } else {
    $msg ="Acceso denegado";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sysacad</title>
</head>
<body>
  <?php
    echo "<b>$msg</b>";
  ?>
</body>
</html>
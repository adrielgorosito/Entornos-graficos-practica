<?php
  include("./cookieBgColor.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    include("./changeBg.php");
  ?>
<title>Cambiar fondo</title>
</head>
<body>
  <form action="cookieBgColor.php" method="post">
    <h2>Seleccione el color del fondo</h2><br>
    <select name="estilo">
      <option value="blanco">Default</option>
      <option value="verde">Verde</option>
      <option value="negro">Negro</option>
      <option value="azul">Azul</option>
    </select>
    <input type="submit" value="Actualizar fondo">
  </form>
</body>
</html>
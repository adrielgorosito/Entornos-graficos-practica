<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambiar username</title>
</head>
<body>
  <form action="cookieUserName.php" method="post">
    <p>Ingrese el nombre de usuario: </p>
    <input type="text" name="username">
    <input type="submit" name="Submit" value="Enviar">
  </form>
  <?php
    if(isset($_COOKIE["nomuser"])){
      echo "<br>El último nombre de usuario ingresado fue: <b>".$_COOKIE["nomuser"]."</b>";
    }
  ?>
</body>
</html>
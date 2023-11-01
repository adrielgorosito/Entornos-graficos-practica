<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesión</title>
</head>
<body>
  <form action="./varsSesion.php" method="post">
    <h2>Iniciar sesión</h2>
    <label for="username">Username: </label>
    <input type="text" name="username">
    <br><br>
    <label for="password">Password: </label>
    <input type="password" name="password"><br><br>
    <button type="submit">Entrar</button>
  </form>
</body>
</html>
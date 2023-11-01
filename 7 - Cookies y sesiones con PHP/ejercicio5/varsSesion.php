<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['username'] = $_POST['username'];
  $_SESSION['password'] = $_POST['password'];
} else {
  if (isset($_GET['clear_session'])) {
    session_unset();
  }
}

echo "<p>Bienvenido</p>";
echo "<p>El username es: <b>". $_SESSION['username']."</b></p>";
echo "<p>La contraseña es: <b>". $_SESSION['password']."</b></p>";
echo "<a href='.?clear_session=true'>Salir</a>";
?>
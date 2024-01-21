<?php
session_start();

if (isset($_SESSION['username'])) {
  echo '<h1>Bienvenido, ' . $_SESSION['username'] . '</h1>';
  echo '<a href="13c - sessions.php">Cerrar sesión</a>';
} else {
  echo '<h1>Bienvenido, invitado</h1>';
  echo '<a href="13a - sessions.php">Home</a>';
}

// O sino se podría redireccionar automáticamente sino detecta la sesión
// if (!isset($_SESSION['username']))
//   header('Location: 13a - sessions.php');

// echo '<h1>Bienvenido, ' . $_SESSION['username'] . '</h1>';
// echo '<a href="13c - sessions.php">Cerrar sesión</a>';
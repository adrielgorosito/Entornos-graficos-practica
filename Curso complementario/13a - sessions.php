<?php
/* ------------ Sessions ------------ */

/*
  Las sesiones sirven para guardar información que podrá ser accedida en diferentes páginas.
  A diferencia de las cookies, las sesiones se guardan en el servidor.
*/

// La función session_start() debe ir siempre que se trabaje con sesiones
// Más adelante se verá como importar otros archivos, como un header.php para que
// no sea necesario escribir la misma función todo el tiempo
session_start();

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  if ($username == 'john' && $password == '123') {
    $_SESSION['username'] = $username; // Se guarda la sesión
    header('Location: 13b - sessions.php'); // Se redirecciona a otra página
  } else {
    echo '<p><b>Usuario y/o contraseña incorrectos</b></p><br><hr><br>';
  }
}

?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
  <div>
    <label>Usuario: </label>
    <input type="text" name="username">
  </div>
  <br>
  <div>
    <label>Contraseña: </label>
    <input type="password" name="password">
  </div>
  <br>
  <input type="submit" name="submit" value="Iniciar sesión">
</form>
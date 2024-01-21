<?php
/* --- $_POST --- */
// Sirve para pasar información a través de formularios

if (isset($_POST['submit'])) {
  echo '<p><u>Datos pasados:</u></p>';
  echo '<p><b>Nombre:</b> ' . $_POST['name'] . '</p>';
  echo '<p><b>Contraseña:</b> ' . $_POST['password'] . '</p><br>';
  echo '<hr><br>';
}
?>

<!-- Pasar a través de un form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Nombre: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Contraseña: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Enviar">
</form>
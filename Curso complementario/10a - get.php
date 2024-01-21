<?php
/* --- $_GET --- */
// Sirve para pasar información a través de urls o formularios

if (isset($_GET['submit'])) {
  echo '<p><u>Datos pasados:</u></p>';
  echo '<p><b>Nombre:</b> ' . $_GET['name'] . '</p>';
  echo '<p><b>Contraseña:</b> ' . $_GET['password'] . '</p>';
  echo '<p>Sin embargo, no es recomendable pasar los datos de un formulario con un get (los datos se ven en la URL)</p><br>';
  echo '<hr><br>';
}
?>

<!-- Pasar a través de un form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
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

<!-- Pasar a través de un link -->
<br><br>
<p>O se puede pasar a través de un link:</p>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?link=John">Link</a>
<?php 
  if (isset($_GET['link'])) {
    echo '<p><b>El nombre seteado en el link es:</b> ' . $_GET['link'] . '</p>'; 
  }
?>
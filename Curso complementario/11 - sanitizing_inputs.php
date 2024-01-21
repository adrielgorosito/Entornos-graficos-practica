<?php
/* --- Sanitizando inputs --- */
// La información a través de un form no está sanitizada por defecto. Hay varias formas de sanitizarla
/*
  htmlspecialchars() - Sanitiza código html
  filter_var(variable, FILTRO) - Sirve para cualquier tipo de dato
  filter_input(INPUT_POST, nombre del input, FILTRO); - Sirve solo para inputs

  Los posibles filtros son:
  - FILTER_SANITIZE_STRING - Convierte un string a un string con solamente caracteres alfanuméricos, espacios y '-_.:/'
  - FILTER_SANITIZE_EMAIL - Convierte un string a un mail válido
  - FILTER_SANITIZE_URL - Convierte un string a una URL válida
  - FILTER_SANITIZE_NUMBER_INT - Convierte un string a un entero
  - FILTER_SANITIZE_NUMBER_FLOAT - Convierte un string a un float
  - FILTER_SANITIZE_FULL_SPECIAL_CHARS - Sanitoza posible código HTML
*/

if (isset($_POST['submit'])) {
  /* $name = htmlspecialchars($_POST['name']);
     $email = htmlspecialchars($_POST['email']); /*

  /* $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); */

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
} 

  echo "Nombre: " . $name;
  echo "<br>Email: " . $email . "<br><br><hr><br>";
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Email: </label>
  <input type="email" name="email">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>
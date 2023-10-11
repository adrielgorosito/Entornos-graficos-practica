<!-- Escribir un script en PHP para poder enviar un correo electrónico, con formato HTML, a
través del servidor -->

<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practica 5 - Ejercicio 1</title>
</head>

<body>
  <h1>Enviar un mail</h1>

  <form method="post" action="ejercicio1.php">
    <label>Para:</label>
    <input type="email" name="email">
    <button>Enviar</button>

  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destinatario = $_POST["email"];
    $asunto = "Practica 5: PHP -  Ejercicio 1";
    $cuerpo = '<p>Prueba de envio de mail</p>';

    $success=mail($destinatario, $asunto, $cuerpo);
    if ($success) {
      echo 'Se envió correctamente el mail';
    }
    else {
      echo 'No se pudo enviar el mail';
    }
  }
  ?>
</body>
</html>

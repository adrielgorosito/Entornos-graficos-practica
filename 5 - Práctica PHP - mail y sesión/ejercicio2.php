<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practica 5 - Ejercicio 2</title>
</head>
<body>
  <form action="ejercicio2.php" method="post">
    <label for="email">De:</label>
    <input type="email" name="email" id="email"><br>

    <label for="subject">Asunto:</label>
    <input type="text" name="subject" id="subject"><br>

    <label for="msj">Msj:</label>
    <input type="text" name="msj" id="msj">
    
    <button>Enviar</button>
  </form>

  <?php
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $destinatario = "webmaster@gmail.com";
    $subj = $_POST["subject"] ." | Consulta de ".$_POST["email"];
    $body = $_POST["msj"];

    $success=mail($destinatario, $subj, $body);
    if($success){
      echo 'Se envio el mail';
    }
    else{
      echo 'No se pudo enviar el mail';
    }

  }
  ?>

</body>
</html>


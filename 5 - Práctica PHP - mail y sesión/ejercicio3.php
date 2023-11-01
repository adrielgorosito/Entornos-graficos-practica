<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Practica 5 - Ejercicio 3</title>
</head>
<body>
  <h2>Recomenda nuestro sitio 😌</h2>
  <form action="ejercicio3.php" method="post">
    <label for="email">Email de tu amigo:</label>
    <input type="email" name="email" id="email"><br>

    <label for="nom">Tu nombre:</label>
    <input type="text" name="nom" id="nom"><br>
    
    <button>Enviar</button>
  </form>

  <?php
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $destinatario = $_POST["email"];
    $subj = $_POST["nom"] ." te recomienda este sitio";
    $body = "Tu amigo te recomendo visitar nuestro <a href'https://www.youtube.com'>sitio web</a>";

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
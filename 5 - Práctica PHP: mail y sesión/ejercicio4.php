<?php
  session_start();
?>

<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Práctica 5 - Ejercicio 4</title>
</head>

<body>
  <h1>Contador de visitas</h1>
  <span>Visitaste esta página: </span>
  
  <?php
      if (array_key_exists("count", $_SESSION)) {
        $_SESSION["count"]++;
      }
      else{
        $_SESSION["count"]=1;
      }

    echo "<b><span>".$_SESSION["count"]."</span></b>";

  ?>

  <span>veces.</span>
  
</body>
</style>
</html>
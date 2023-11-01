<html>
  <head>
    <title>Ej 2 - Practica 6 | Mod</title>
  </head>
  <body>
  <?php
    include("./connection.php");
    $ciudad = $_POST["ciudad"];
    $pais = $_POST["pais"];
    $hab = $_POST["hab"];
    $sup = $_POST["sup"];
    $metro = $_POST["metro"];

    $query = "UPDATE Ciudades set ciudad = '$ciudad', pais = '$pais', 
    habitantes = '$hab', superficie = '$sup', tieneMetro = '$metro' WHERE ciudad = $ciudad";
  
    mysqli_free_result($result);
    mysqli_close($conn);
  ?>
  </body>
</html>
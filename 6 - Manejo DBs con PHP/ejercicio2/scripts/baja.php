<html>
  <head>
    <title>Ej 2 - Practica 6 | Alta</title>
  </head>
  <body>
  <?php
    include("./connection.php");
    $ciudad = $_POST["ciudad"];
    $query = "SELECT * FROM Ciudades WHERE ciudad = $ciudad";
    $result = mysqli_query($conn,$query) or die(mysqli_error($conn));

    if(mysqli_num_rows($result) > 0){
      $query = "DELETE FROM Ciudades WHERE ciudad = $ciudad";
      mysqli_query($conn,$query) or die(mysqli_error($conn));
      echo("La ciudad fue borrada <br>");
      echo("<a href='../index.html'>Volver al menu principal</a>");
    } else{
      echo("La ciudad no existe!! <br>");
      echo("<a href='../index.html'>Volver al menu principal</a>");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
  ?>

  </body>
</html>
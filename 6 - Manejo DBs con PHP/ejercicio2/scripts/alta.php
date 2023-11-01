<html>
  <head>
    <title>Ej 2 - Practica 6 | Alta</title>
  </head>
  <body>
    <?php
      include("./connection.php");

      $ciudad = $_POST["ciudad"];
      $pais = $_POST["pais"];
      $hab = $_POST["hab"];
      $sup = $_POST["sup"];
      $metro = $_POST["metro"];

      $query = "SELECT Count(ciudad) as cant FROM Ciudades WHERE ciudad = $ciudad";
      $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
      
      $row = mysqli_fetch_array($result);
      if($row["cant"] != 0){
        echo("<b>La ciudad ya existe</b><br>");
        echo("<a href='../index.html'>Volver al menu principal</a>");
      }
      else{
        $query = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
          values($ciudad, $pais, $hab, $sup, $metro)"; //Doy por entendido que el id de la ciudad es autogenerado por la BD, por eso el usuario no lo tiene que ingresar
        mysqli_query($conn, $query) or die(mysqli_error($conn));
        echo("Ciudad agregada con exito<br>");
        echo("<a href='../index.html'>Volver al menu principal</a>");
      }
      mysqli_free_result($result);
      mysqli_close($conn);

    ?>
  </body>
</html>



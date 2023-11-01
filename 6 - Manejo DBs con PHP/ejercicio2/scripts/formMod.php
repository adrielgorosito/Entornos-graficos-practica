<html>
  <head>
    <title>Ej 2 - Practica 6 | Mod</title>
  </head>
  <body>
  <?php
    include("./connection.php");
    $ciudad = $_POST["ciudad"];
    $query= "SELECT * FROM Ciduades WHERE ciudad = $ciudad";
    $result=mysqli_query($conn, $query) or die(mysqli_error($conn));

    $row=mysqli_fetch_array($result);
    if(mysqli_num_rows($result)> 0){  
      ?>
      <form action="mod.php" method="post" name="formMod">
        <table>
          <tr>
            <td>Ciudad</td>
            <td><input type="text" name="ciudad" value="<?php echo($fila['ciudad'])?>"></td>
          </tr>
          <tr>
            <td>Pais</td>
            <td><input type="text" name="pais" value="<?php echo($fila['pais'])?>"></td>
          </tr>
          <tr>
            <td>Habitantes</td>
            <td><input type="number" name="hab" value="<?php echo($fila['habitantes'])?>"></td>
          </tr>
          <tr>
            <td>Superficie</td>
            <td><input type="number" name="sup" value="<?php echo($fila['superficie'])?>"></td>
          </tr>
          <tr>
            <td>Tiene Metro?</td>
            <td><input type="checkbox" name="metro" value="<?php echo($fila['tieneMetro'])?>"></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <input type="submit" name="Submit" value="Modificar">
            </td>
          </tr>
        </table>
      </form>
    <?php
    }else{
      echo("La ciudad no existe!! <br>");
      echo("<a href='../index.html'>Volver al menu principal</a>");
    }
    mysqli_free_result($result);
    mysqli_close($conn);
  ?>
  </body>
</html>


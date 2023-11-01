<html>
  <head>
    <title>Ej 2 - Practica 6 | Listado</title>
  </head>
  <body>
    <?php
      include("./connection.php");

      $query="SELECT * FROM Ciudades";
      $result=mysqli_query($conn,$query);
      ?>
      <table>
        <tr>
          <td><b>ID</b></td>
          <td><b>CIUDAD</b></td>
          <td><b>PAIS</b></td>
          <td><b>HAB</b></td>
          <td><b>SUP</b></td>
          <td><b>METRO</b></td>
        </tr>
      <?php
      while($row=mysqli_fetch_array($result)){
        ?>
          <tr>
            <td><?php echo($row["id"])?></td>
            <td><?php echo($row["ciudad"])?></td>
            <td><?php echo($row["pais"])?></td>
            <td><?php echo($row["habitantes"])?></td>
            <td><?php echo($row["superficie"])?></td>
            <td><?php echo($row["tieneMetro"])?></td>
          </tr>
          <tr>
            <td colspan="5">

      <?php
      }
      mysqli_free_result($result);
      mysqli_close($conn);
      ?>
      
            </td>
          </tr>
    </table>
    <p align="center"><a href='../index.html'>Volver al menu principal</a></p>
  </body>
</html>
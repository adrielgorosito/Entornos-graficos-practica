<html>
  <head>
    <title>Ej 2 - Practica 6 | Listado con Paginacion</title>
  </head>
  <body>
    <?php
      include("./connection.php");
      $cantPorPag = 2;
      $pag = isset($_GET["pag"]) ? $_GET["pag"] : null;
      if(!$pag){
        $inicio = 0;
        $pag = 1;
      } else{
        $inicio = ($pag - 1) * $cantPorPag;
      }

      $query = "SELECT * FROM Ciudades";
      $result = mysqli_query($con,$query);
      $totRegistros = mysqli_num_rows($result);

      $totPags = ceil($totRegistros / $cantPorPag);
      $query = "SELECT * FROM Ciudades"."limit".$inicio.",".$cantPorPag;
      $result = mysqli_query($con,$query);
      $totRegistros = mysqli_num_rows($result);
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
      while($row = mysqli_fetch_array($result)){
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
    <?php
      if($totPags > 1){
        for($i=1;$i<=$totPags;$i++){
          if($pag==$i){
            echo $pag."";
          }else{
            echo "<a href='listadoPag.php?pag=".$i."'>".$i."</a>";
          }
        }
      }
    ?>
    <p align="center"><a href='../index.html'>Volver al menu principal</a></p>
  </body>
</html>


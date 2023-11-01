<?php
  include("./entities/prod.php");
  session_start();
  if (isset($_SESSION["compras"])) {
    $arrCompras = $_SESSION["compras"];
  }else{
    $_SESSION["compras"] = array();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COMPRAS</title>
</head>
<body>
  <?php
    include("./bd/getFuncs.php");
    $catalogo = getAll();
  ?>
  <table>
    <tr>
      <td>ID</td>
      <td>NOMBRE</td>
      <td>PRECIO</td>
    </tr>
    <?php
        while ($row = mysqli_fetch_array($catalogo)) {
    ?>
    <tr>
      <td><?php echo $row["id"]?></td>
      <td><?php echo $row["producto"]?></td>
      <td><?php echo $row["precio"]?></td>
    </tr>
    <?php
        }
    ?>
    <form action="./scripts/addProd.php" method="post">
      <p>Ingrese Id del producto a añadir</p><br>
      <input type="number" name="id">
      <input type="submit" value="Agregar al carrito">
    </form>
  </table>

  <?php
    if(sizeof($arrCompras)> 0){
      echo"<b>Mi Carrito</b>";
      echo"<table>";
      foreach($arrCompras as $comp){
        echo"<td>".$comp -> getId()."</td>"."<br>";
        echo"<td>".$comp -> getNom()."</td>"."<br>";
        echo"<td>".$comp -> getPrecio()."</td>"."<br>";
      }
      echo "</table>";
    }
  ?>
</body>
</html>
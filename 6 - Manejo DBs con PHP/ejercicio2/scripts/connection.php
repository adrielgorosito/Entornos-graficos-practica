<?php
  $conn = mysqli_connect("lokalhost", "root") or die("Hubo un problema con la conexion a la BD");
  mysqli_select_db($conn, "Capitales");
?>
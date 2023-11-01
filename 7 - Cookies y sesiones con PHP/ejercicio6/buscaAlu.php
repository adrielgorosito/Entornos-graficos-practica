<?php
  session_start();

  $conn = mysqli_connect("localhost", "root") or die("Hubo un problema con la conexión a la BD");
  mysqli_select_db($conn, "base2");

  $email = $_POST["email"];

  $query = "SELECT * FROM alumnos alu WHERE alu.mail = $email";
  $result = mysqli_query($conn,$query);
  $row = mysqli_fetch_array($result);

  $_SESSION["nombre"] = $row["nombre"];
  
  header("Location: show.php");
?>
<?php
  $estilo = '';

  if(isset($_POST["estilo"])){
    $estilo = $_POST["estilo"];
    setcookie("estilo", $estilo, time()+ (60*60*24*90));
    header("Location: index.php");
    exit();
  } elseif (isset($_COOKIE["estilo"])) {
      $estilo = $_COOKIE["estilo"];
  }
?>
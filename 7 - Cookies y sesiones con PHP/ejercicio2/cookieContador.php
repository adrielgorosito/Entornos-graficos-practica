<?php
  $cont = $_COOKIE["contador"];
  if(isset($_COOKIE["contador"])){
    $cont++;
    setcookie("contador", $cont, time()+ (60*60*24*90));
    echo("<b>Accediste a esta pagina ".$_COOKIE["contador"]." veces</b>");
  }else{
    setcookie("contador", 0, time()+ (60*60*24*90));
    echo("<b>Bienvenido!</b>");
  }
?>
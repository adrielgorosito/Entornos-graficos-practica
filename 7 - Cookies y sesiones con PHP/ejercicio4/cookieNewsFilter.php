<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['noticia'])) {
  $noticia = $_POST['noticia'];
  setcookie('noticia', $noticia, time() + (60*60*24*90));
} else {
  if (isset($_GET['borrar_cookie'])) {
    $noticia = 'todas';
    setcookie('noticia', $noticia, time() + (60*60*24*90));
  } else {
    if (isset($_COOKIE['noticia'])) {
      $noticia = $_COOKIE['noticia'];
    }
  }
}

function getNews($eleccion) {
  switch ($eleccion) {
    case 'deportes':
      getDeportes();
      break;
    case 'politica':
      getPolitica();
      break;
    case 'economia':
      getEconomia();
      break;
    default:
      getDeportes();
      getPolitica();
      getEconomia();
  }
}

function getEconomia() {
  echo '<h2>Economía</h2>
  <p>El dolar está $1000</p><br>';
}
function getPolitica() {
  echo '<h2>Política</h2>
  <p>El balotaje se dará entre Milei y Massa el 19 de Noviembre</p><br>';
}
function getDeportes() {
  echo '<h2>Deportes</h2>';
  echo '<h3>Futbol</h3>
  <p>Messi ganó el balón de oro</p>';
  echo '<h3>Juegos panamericanos</h3>';
  echo '<p>USA lidera el medallero</p><br>';
}
?>

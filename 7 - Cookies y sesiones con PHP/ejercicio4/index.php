<?php
  include("cookieNewsFilter.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diario</title>
</head>
<body>
  <h1 align="center">Noticias</h1>
  <div align="center">
    <form method="POST">
      <div>
        <input type="radio" name="noticia" value="politica">
        <label for="politica">Politica</label>
        <input type="radio" name="noticia" value="economia">
        <label for="economia">Economia</label>
        <input type="radio" name="noticia" value="deportes">
        <label for="deportes">Deportes</label>
      </div>
      <br>
      <div>
        <button>Cambiar seccion</button>
      </div>
    </form>
    <br>
    <a href='.?borrar_cookie=true'>Ver todas las secciones</a>
  </div>
  <br><br>
  
  <div align="center" style="border:1px solid black">
      <?php
      getNews($noticia)?>
  </div>
</body>
</html>
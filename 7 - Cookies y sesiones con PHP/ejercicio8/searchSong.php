<?php
  include("connection.php");
  $song = $_POST["cancion"];
  $query = "SELECT * FROM buscador WHERE canciones LIKE '%".$song."%'";
  $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
  $nombre = $row["canciones"];
  setcookie("songs", $nombre, time()+ (60*60*24*90)) ;
  header("index.php");
?>


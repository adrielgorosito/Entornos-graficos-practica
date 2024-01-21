<?php
  /* ----------- Subida de archivos ---------- */

  if(isset($_POST['submit'])) {
    if(empty($_FILES['upload']['name'])) // Checkea si se subió un archivo
      $message = '<p><b>No elegiste ningún archivo</b></p>';
    else {
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      $target_dir = "file uploads/$file_name";

      $file_extension = explode('.', $file_name); // Separa el "." de ".png"
      $file_extension = strtolower(end($file_extension));
      
      echo "Extensión del archivo: " . $file_extension;
      
      if(!in_array($file_extension, array('png', 'jpg', 'jpeg', 'gif'))) {
        $message = '<p><b>Tipo de archivo inválido.</b></p>';
      } else {
        if($file_size >= 1000000) {   // 1000000 bytes = 1MB
          $message = '<p><b>El archivo es muy grande</b></p>';
        } else {
          move_uploaded_file($file_tmp, $target_dir);
          $message = '<p style="color: green;">Archivo subido exitosamente!</p>';
        }
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
<body>
  <?php echo $message !== null ? $message . "<br><hr><br>" : null; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    <label for="upload">Select image to upload:</label>
    <input type="file" name="upload">
    <br><br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>
</html>
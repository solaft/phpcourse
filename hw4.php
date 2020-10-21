<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<body>
<style>
  .imgphp {
  display: flex;
  width: 150px;  
  height: 150px;
  margin-bottom: 15px;
  flex-direction: column;
}
</style>

<?php
  $path = $_SERVER['DOCUMENT_ROOT'] . '/images/';
  $images = scandir($path);
  if (false !== $images) {
      $images = preg_grep('/\\.(?:png|gif|jpe?g)$/', $images);
      foreach ($images as $image)
          echo '<img class="imgphp" src="/images/', htmlspecialchars(urlencode($image)),'" />';
  }
  ?>
</body>
</html>


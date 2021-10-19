<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>


<?php 


$images = scandir('img/');
for ($i = 0; $i < count($images); $i++) {
  if ($images[$i] != '.' && $images[$i] != '..') {
    echo '<a href="' . 'img/' . $images[$i] . '" target="_blank"><img src=' . 'img/' . $images[$i] . ' style="width: 200px;"></a>';
  }
}


?>


  
</body>
</html>
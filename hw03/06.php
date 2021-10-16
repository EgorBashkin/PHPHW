<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>Задание 6</h1>

<?php 

$menu = ['Главная страница', 'Товары', 'Корзина', 'Контакты', 'Профиль'];

echo '<ul>';

foreach ($menu as $section ){
  echo "<li>$section</li>";

}

echo '</ul>';



?>
  
</body>
</html>

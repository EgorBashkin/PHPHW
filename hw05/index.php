<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>hello</h1>

<?php 
require_once 'db.php';

$result = mysqli_query($link, 'select * from test ');
while ($row = mysqli_fetch_assoc($result)) {
  echo '<a href="/showimages.php?test_id=' . $row['id'] . '">';
  echo '<img width = "200" height = "200" src="' .$row['img_path'] . '">';
  echo '</a>';

}
// where 0 order by viewed desc
?>






</body>
</html>






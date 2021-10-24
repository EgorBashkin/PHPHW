<?php 
require_once 'db.php';

$id = $_GET['test_id'] ?? null;
if ($id && is_numeric($id)) {
  mysqli_query($link, 'update test set viewed=viewed+1 where id=' . $id );
  $result = mysqli_query($link, 'select * from test where id =' . $id);
  $image = mysqli_fetch_assoc($result);
  if ($image) {
      echo '<img src="' . $image['img_path'] . '">';
  }
  else {
      die("can`t find image with id =" . $id);
  }

}


?>


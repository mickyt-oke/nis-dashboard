<?php
require_once 'core/init.php';

$appid = "-1";

if(isset($_POST['appid'])) {
  $appid = $_POST['appid'];
}

if ($appid > 0) {
  $catg = $cat->getCategorys($appid);

  foreach($catg as $cat) {
    echo "<option value='".$cat['id']."'>".$cat['category']."</option>";
  }
}
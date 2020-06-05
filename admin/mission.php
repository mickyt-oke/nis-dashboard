<?php
require_once 'core/init.php';

$countryid = "-1";

if(isset($_POST['countryid'])) {
  $countryid = $_POST['countryid'];
}

if ($countryid > 0) {
  $missions = $mission->getMission($countryid);

  foreach($missions as $mission) {
    echo "<option value='".$mission['id']."'>".$mission['mission']."</option>";
  }
}

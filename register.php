<?php
include "index.php";
$shipid = $_REQUEST["shipid"];
$weaponid = $_REQUEST["weaponid"];
    $sql = "insert into ShipHasWeapon(ship_id,weapon_id) Values (" . $shipid . "," . $weaponid . ");";
  $mysqli->query($sql);



?>
<script>
window.location='slisting.php';
</script>
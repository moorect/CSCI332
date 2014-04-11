<?php
include "index.php";
$shipid = $_REQUEST["shipid"];
$manufacturerid = $_REQUEST["manufacturerid"];
    $sql = "insert into ShipHasManufacturer(Manufacturer_id,Ship_id) Values (" . $manufacturerid . "," . $shipid . ");";
//echo $sql;
//exit;
  $mysqli->query($sql);



?>
<script>
window.location='slisting.php';
</script>
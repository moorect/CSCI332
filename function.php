<?php
include "index.php";

$count = $_REQUEST["Ship_id"];
$countSQL = "call fCountShips(".$count.");";
$mysqli->query($countSQL);

echo $count;
echo $countSQL;
?>
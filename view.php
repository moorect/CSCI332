<?php
  include "index.php";
?>

<h2>Ship Details Report</h2>
<table border="10">
<tr><th>ShipID</th><th>ShipName</th><th>Length</th><th>Weight</th><th>ShieldCapacity</th><th>Speed</th><th>WeaponName</th><th>Num</th></tr>
<?php
  $sql = "select ShipID, ShipName, Length, Weight, Shields, Speed, WeaponName, Num from vShipDetails;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {

        echo "<tr><td>" . $row["ShipID"] . "</td>";
        echo "<td>" . $row["ShipName"] . "</td>";
        echo "<td>" . $row["Length"] . "</td>";
        echo "<td>" . $row["Weight"] . "</td>";
        echo "<td>" . $row["Shields"] . "</td>";
        echo "<td>" . $row["Speed"] . "</td>";
        echo "<td>" . $row["WeaponName"] . "</td>";
        echo "<td>" . $row["Num"] . "</td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>

<table><tr>
<td><a href="index.php">Return to Main</a></td>
</tr></table>
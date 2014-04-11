<table border="1">
<tr><th>Id</th><th>Name</th><th>Length</th><th>Weight</th><th>Shield Capacity</th><th>Speed</th><th>Class</th></tr>
<?php
  $sql = "select id,name,length,weight,shieldCap,speedCap,class from ship s inner join ShipHasWeapon h on h.ship_id = s.id where Weapon_id = $id;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["length"] . "</td>";
        echo "<td>" . $row["weight"] . "</td>";
        echo "<td>" . $row["shieldCap"] . "</td>";
        echo "<td>" . $row["speedCap"] . "</td>";
        echo "<td>" . $row["class"] . "</td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>
</br></br>
<form action="register.php">
<input type="hidden" name="weaponid" value= "<?php echo $id;?>" >
<select name="shipid">
<?php
  $sql = "select id,name from Ship s where s.id not in (select ship_id from ShipHasWeapon where Weapon_id = $id);";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        echo "<option value ='" . $row["id"] . "'>" . $row["name"] . "</option>";
    }
  }
  else
     die($mysqli->error);
?>
</select>
<input type="submit" value="Register">
</form>
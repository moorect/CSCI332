<table border="1">
<tr><th>Id</th><th>Name</th></tr>
<?php
  $sql = "select id,name from Manufacturer m inner join ShipHasManufacturer s on s.Manufacturer_id = m.id where ship_id = $id;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>
</br></br>
<form action="enroll.php">
<input type="hidden" name="ship_id" value= "<?php echo $id;?>" >
<select name="Manufacturer_id">
<?php
  $sql = "select id,name from Manufacturer m where m.id not in (select Manufacturer_id from ShipHasManufacturer where ship_id = $id);";
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
<input type="submit" value="Enroll">
</form>
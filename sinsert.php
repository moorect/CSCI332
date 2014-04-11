<?php
include "index.php";
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$length = $_REQUEST["length"];
$weight = $_REQUEST["weight"];
$shieldCap = $_REQUEST["shieldCap"];
$speedCap = $_REQUEST["speedCap"];
$class = $_REQUEST["class"];
if(strlen($name) > 0) {
  if(strlen($id) > 0)
  {
    $sql = "UPDATE Ship SET name='$name', length='$length', weight='$weight', shieldCap='$shieldCap', speedCap='$speedCap', class='$class' where id = $id;";
  }

  else
  {
    $sql = "INSERT INTO Ship (name,length,weight,shieldCap,speedCap,class) VALUES ('" . $name . "','" . $length . "','" . $weight . "','" . $shieldCap . "','" . $speedCap . "','" . $class . "');";
    $mysqli->query($sql);
    $sql = "INSERT INTO ShipHasWeapon (Ship_id) VALUES ('" . $id . "');";
    $mysqli->query($sql);
    $sql = "INSERT INTO ShipHasManufacturer (Ship_id) VALUES ('" . $id . "');";
    $mysqli->query($sql);
    $sql = "INSERT INTO ShipHasAffiliation (Ship_id) VALUES ('" . $id . "');";
  }

  $mysqli->query($sql);
}

?>
<form>
<input type="hidden" name="id" value= "<?php echo $id;?>" >
Name: <input type="text" name="name" value= "<?php echo $name;?>" required></br>
Length: <input type="text" name="length" value= "<?php echo $weight;?>" required></br>
Weight: <input type="text" name="weight" value= "<?php echo $weight;?>" required></br>
Shield Capacity: <input type="text" name="shieldCap" value= "<?php echo $shieldCap;?>" required></br>
Speed: <input type="text" name="speedCap" value= "<?php echo $speedCap;?>" required></br>
Class: <input type="text" name="class" value= "<?php echo $class;?>" required></br>
<input type="submit" value="Submit">
</form>
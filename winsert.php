<?php
include "index.php";
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
$class = $_REQUEST["class"];
if(strlen($name) > 0) {
  if(strlen($id) > 0) {
    $sql = "update Weapon set name='$name',class='$class' where id = $id;";
  }
  else
    $sql = "insert into Weapon (name,class) Values ('" . $name . "','" . $class .  "');";

  $mysqli->query($sql);
}

?>
<form>
<input type="hidden" name="id" value= "<?php echo $id;?>" >
Name: <input type="text" name="name" value= "<?php echo $name;?>" required></br>
Class: <input type="text" name="class" value= "<?php echo $class;?>" required></br>
<input type="submit" value="Submit">
</form>
<?php
if(!empty($id))
include "ShipHasWeapon.php";
?>
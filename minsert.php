<?php
include "index.php";
$id = $_REQUEST["id"];
$name = $_REQUEST["name"];
if(strlen($name) > 0) {
  if(strlen($id) > 0) {
    $sql = "update Manufacturer set name='$name' where id = $id;";
  }
  else
    $sql = "insert into Manufacturer (name) Values ('" . $name .
      "');";

  $mysqli->query($sql);
}

?>
<form>
<input type="hidden" name="id" value= "<?php echo $id;?>" >
Name: <input type="text" name="name" value= "<?php echo $name;?>" required></br>
<input type="submit" value="Submit">
</form>
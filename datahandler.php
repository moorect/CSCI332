<?php
  $mysqli = new mysqli("localhost", "moorect", "Snow1234", "moorect_project");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . 
      $mysqli->connect_error;
  }
  switch($_REQUEST["action"])
 {
   case 'I':
    $sql = "insert into ship (name,length,weight,shieldCap,speedCap,class) ";
    $sql .= "Values ('" . $_REQUEST["name"] . "',";
    $sql .= "'" . $_REQUEST["length"] . "',";
    $sql .= "'" . $_REQUEST["weight"] . "')";
    $sql .= "'" . $_REQUEST["shieldCap"] . "')";
    $sql .= "'" . $_REQUEST["speedCap"] . "')";
    $sql .= "'" . $_REQUEST["class"] . "')";
    break;
   case 'D':
    $sql = "delete from ship where id =" . $_REQUEST["id"];
    break;
 }
 if(!$mysqli->query($sql))
    die($mysqli->error);

?>
<script>window.location='index2.php';</script>

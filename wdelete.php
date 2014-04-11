<?php
include 'index.php';
$id = $_REQUEST["id"];

if(strlen($id) > 0) {
  $sql = "delete from Weapon where id=$id";
  $mysqli->query($sql);  
}
?>
<script>
window.location='wlisting.php';
</script>
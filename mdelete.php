<?php
include 'index.php';
$id = $_REQUEST["id"];

if(strlen($id) > 0) {
  $sql = "delete from Manufacturer where id=$id";
  $mysqli->query($sql);  
}
?>
<script>
window.location='mlisting.php';
</script>
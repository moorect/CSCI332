<?php
include 'index.php';
$id = $_REQUEST["id"];

if(strlen($id) > 0) {
  $sql = "delete from Ship where id=$id";
  $mysqli->query($sql);
}
?>
<script>
window.location='slisting.php';
</script>
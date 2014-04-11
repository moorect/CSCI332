<?php
  include "index.php";
?>
<table border="1">
<tr><th>Id</th><th>Name</th></tr>
<?php
  $sql = "select id,name from Manufacturer;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        $link = "minsert.php?id=" . $row["id"] . "&name=" . $row["name"];                           
        echo "<tr><td><a href='$link'>" . $row["id"] . "</a></td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td><a href='mdelete.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>
<a href="minsert.php">Add New</a>

<table><tr>
<td><a href="index.php">Return to Main</a></td>
</tr></table>
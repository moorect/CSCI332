<?php
  include "index.php";
?>
<table border="1">
<tr><th>Id</th><th>Name</th><th>Class</th></tr>
<?php
  $sql = "select id,name,class from Weapon;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        $link = "winsert.php?id=" . $row["id"] . "&name=" . $row["name"] . "&class=" . $row["class"];                           
        echo "<tr><td><a href='$link'>" . $row["id"] . "</a></td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["class"] . "</td>";
        echo "<td><a href='wdelete.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>
<a href="winsert.php">Add New</a>

<table><tr>
<td><a href="index.php">Return to Main</a></td>
</tr></table>
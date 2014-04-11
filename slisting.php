<?php
  include "index.php";
?>

<table border="1">
<tr><th>Id</th><th>Name</th><th>Length</th><th>Weight</th><th>Shield Capacity</th><th>Speed</th><th>Class</th></tr>
<?php
  $sql = "select id,name,length,weight,shieldCap,speedCap,class from Ship ;";
  $mysqli->query($sql);

  if($results = $mysqli->query($sql)) {
    while ($row = $results->fetch_assoc()) {
        $link = "sinsert.php?id=" . $row["id"] . "&name=" . $row["name"] . "&length=" . $row["length"] . "&weight=" . $row["weight"] . "&shieldCap=" . $row["shieldCap"] . "&speedCap=" . $row["speedCap"] . "&class=" . $row["class"];
        echo "<tr><td><a href='$link'>" . $row["id"] . "</a></td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["length"] . "</td>";
        echo "<td>" . $row["weight"] . "</td>";
        echo "<td>" . $row["shieldCap"] . "</td>";
        echo "<td>" . $row["speedCap"] . "</td>";
        echo "<td>" . $row["class"] . "</td>";
        echo "<td><a href='sdelete.php?id=" . $row["id"] . "'>Delete</a></td>";
        echo "</tr>";
    }
  }
  else
     die($mysqli->error);
?>
</table>
<a href="sinsert.php">Add New</a>


<table><tr>
<td><a href="index.php">Return to Main</a></td>
</tr></table>
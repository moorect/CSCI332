<?php
  $mysqli = new mysqli("localhost", "moorect", "Snow1234", "moorect_project");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . 
      $mysqli->connect_error;
  }
  $result = $mysqli->query("select name,length,weight,shieldCap,speedCap,class,id from ship");
  echo "<table><tr><th>Name</th><th>Length</th><th>Weight</th><th>shieldCap</th><th>speedCap</th><th>Class</th></tr>";
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['length'];
    echo "</td><td>";
    echo $row['weight'];
    echo "</td><td>";
    echo $row['shieldCap'];
    echo "</td><td>";
    echo $row['speedCap'];
    echo "</td><td>";
    echo $row['class'];
    echo "</td><td>";
    echo "<a href='dataHandler.php?action=D&id=" . $row['id'] . "'>Delete</a>";
    echo "</td></tr>";
  }  
  echo "</table>";
?>
<a href='createship.html'>Create a Ship</a>
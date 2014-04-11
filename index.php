<?php
  
  $mysqli = new mysqli("localhost", "moorect_admin", "Snow1234", "moorect_project");
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . 
      $mysqli->connect_error;
  }
  $pageTitle = "StarWars Ships Database";

?>

<h1>StarWars Ships Database</h1>
<img src="starwars_image.jpg" width="550" height="380">

<table border="1"><tr>
<td><a href="slisting.php">Ship</a></td>
<td><a href="mlisting.php">Manufacturer</a></td>
<td><a href="wlisting.php">Weapon</a></td>
<td><a href="view.php">View Ship Details Report</a></td>
</tr></table>
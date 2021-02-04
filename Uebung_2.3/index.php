<?php
$servername = "localhost";
$username = "vmadmin";
$password = "sml12345";
$database = "northwind";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
mysqli_select_db($conn,'northwind');

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo $result->num_rows . " Resultate";
} else {
  echo "Keine Resultate vorhanden";
}
$row = mysqli_fetch_array( $northwind, MYSQLI_ASSOC)
?>
<table>
<tr>
<td><?= $row['id']; ?></td>
<td><?= $row['Vorname']; ?></td>
<td><?= $row['Nachname']; ?></td>
<td><?= $row['JobTitle']; ?></td>
</tr>
</table>
<? echo "</table>";?>
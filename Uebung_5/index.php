<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['name'];
        echo "Hallo {$username}!";
    }
?>
<form method="POST" action="?">
    <input type="text" name="name" placeholder="Benutzername" require/>
    <input type="submit" value="Absenden" /><br>
    Klasse:  
<select>  
  <option value="Klasse wählen">Klasse wählen</option>}  
  <option value="IMS">IMS</option>  
  <option value="WML">WML</option>  
  <option value="FMS">FMS</option>  
  </select>
</form>